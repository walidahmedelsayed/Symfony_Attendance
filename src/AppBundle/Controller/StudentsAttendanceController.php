<?php

namespace AppBundle\Controller;


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
     * @Rest\Get("/studentsAttendance")
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
     * @Rest\Post("/studentsAttendance")
     */
    public function postAction(Request $request)
    {
        $data = new StudentAttendance();
        $user = $this->getDoctrine()->getRepository('AppBundle:User')->find($request->get('user_id'));
        $attendanceRecord = $this->getDoctrine()->getRepository('AppBundle:Attendance')->find($request->get('attendance_id'));
        $attendanceTime = $attendanceRecord->getDate();
        $arrivalTime = new \DateTime('now');
        $minLate = $attendanceTime->diff($arrivalTime)->format('%i');
        $rule = $this->getDoctrine()->getRepository('AppBundle:Rule')->find(1);
        $marksDeduct = ($minLate / $rule->getMinutes()) * $rule->getMarks();
        if (empty($user)) {
            return new View("NULL VALUES ARE NOT ALLOWED", Response::HTTP_NOT_ACCEPTABLE);
        }
        $data->setUser($user);
        $data->setAttendance($attendanceRecord);
        $data->setArrivalTime($arrivalTime);
        $data->setMinLate($minLate);
        $data->setMarksDeduct($marksDeduct);

        $em = $this->getDoctrine()->getManager();
        $em->persist($data);
        $em->flush();
        return new View("Record Added Successfully", Response::HTTP_OK);
    }
}