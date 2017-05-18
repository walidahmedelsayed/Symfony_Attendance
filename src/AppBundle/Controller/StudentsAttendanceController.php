<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Attendance;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
use AppBundle\Entity\StudentAttendance;
use AppBundle\Entity\Rule;


class StudentsAttendanceController extends FOSRestController
{
    /**
     * @Rest\Get("/api/studentsAttendance")
     */
    public function getAction()
    {

        $restresult = $this->getDoctrine()->getRepository('AppBundle:StudentAttendance')->findAll();
        if ($restresult === null) {
            return new View("there are no records exist", Response::HTTP_NOT_FOUND);
        }
        return $restresult;

    }

    /**
     * @Rest\Get("/api/studentsAttendance/{id}")
     */
    public function getStudentDetailsAction($id)
    {

        $restresult = $this->getDoctrine()->getRepository('AppBundle:StudentAttendance')->findByUser($id);
        if ($restresult === null) {
            return new View("record not found", Response::HTTP_NOT_FOUND);
        }
        return $restresult;

    }


    /**
     * @Rest\Post("/api/studentsAttendance")
     */
    public function postAction(Request $request)
    {

        $qr = $request->get('qr');
        $myQr = $this->getDoctrine()->getRepository('AppBundle:QR')->find(1)->getQr();
        if($qr == $myQr)
        {
        $user = $this->getDoctrine()->getRepository('AppBundle:User')->find($request->get('user_id'));
        $arrivalTime = new \DateTime('now');
        $attendanceTime = $user->getTrack()->getAttendanceTime();
        $attendanceRecord = new Attendance;
        $attendanceRecord->setDate($arrivalTime);
        $em = $this->getDoctrine()->getManager();
        $em->persist($attendanceRecord);
        $em->flush();
        $diff = $user->getRequests()[0]->getTargetDate()->diff($attendanceRecord->getDate());
        if (($user->getRequests()[0]->getStatus() == 2) && ($diff->format('%a') === '0')) {

            $permission = $user->getRequests()[0]->getHoursLate();

        } else {
            $permission = 0;
        }

        $hourLate = $attendanceTime->diff($arrivalTime)->format('%h') - $permission;
        if ($hourLate > 0) {
            $minLate = ($attendanceTime->diff($arrivalTime)->format('%i')) + ($hourLate * 60);
        } else {
            $minLate = $attendanceTime->diff($arrivalTime)->format('%i');
        }


        $rule = $this->getDoctrine()->getRepository('AppBundle:Rule')->find(1);
        $marksDeduct = ($minLate / $rule->getMinutes()) * $rule->getMarks();
        if (empty($user)) {
            return new View("NULL VALUES ARE NOT ALLOWED", Response::HTTP_NOT_ACCEPTABLE);
        }
        $data = new StudentAttendance();
        $data->setUser($user);
        $data->setAttendance($attendanceRecord);
        $data->setArrivalTime($arrivalTime);
        $data->setMinLate($minLate);
        $data->setMarksDeduct($marksDeduct);

        $em = $this->getDoctrine()->getManager();
        $em->persist($data);
        $em->flush();
        return new View($data, Response::HTTP_OK);
    }
    else{
        return new View("Wrong QR Code", Response::HTTP_NOT_FOUND);

    }
    }
}