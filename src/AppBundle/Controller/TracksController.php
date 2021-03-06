<?php
namespace AppBundle\Controller;


use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
use AppBundle\Entity\Track;

class TracksController extends FOSRestController
{
    /**
     * @Rest\Get("/api/tracks")
     */
    public function getAction()
    {

        $restresult = $this->getDoctrine()->getRepository('AppBundle:Track')->findAll();
        if ($restresult === null) {
            return new View("there are no tracks exist", Response::HTTP_NOT_FOUND);
        }
        return $restresult;

    }


    /**
     * @Rest\Get("/api/tracks/{id}")
     */
    public function getTrackAction($id)
    {
        $singleresult = $this->getDoctrine()->getRepository('AppBundle:Track')->find($id);
        if ($singleresult === null) {
            return new View("track not found", Response::HTTP_NOT_FOUND);
        }
        return $singleresult;
    }

    /**
     * @Rest\Post("/api/tracks")
     */
    public function postAction(Request $request)
    {
        $data = new Track;
        $name = $request->get('name');
        $attendanceTime = $request->get('attendanceTime');
        $branch = $this->getDoctrine()->getRepository('AppBundle:Branch')->find($request->get('branch_id'));
        if (empty($name) || empty($branch) || empty($attendanceTime)) {
            return new View("NULL VALUES ARE NOT ALLOWED", Response::HTTP_NOT_ACCEPTABLE);
        }
        $data->setName($name);
        $data->setAttendanceTime($attendanceTime);
        $data->setBranch($branch);

        $em = $this->getDoctrine()->getManager();
        $em->persist($data);
        $em->flush();
        return new View($data, Response::HTTP_OK);
    }


    /**
     * @Rest\Put("/api/tracks/{id}")
     */
    public function updateAction($id, Request $request)
    {
        $name = $request->get('name');
        $attendanceTime = $request->get('attendanceTime');
        $branch = $this->getDoctrine()->getRepository('AppBundle:Branch')->find($request->get('branch_id'));
        $track = $this->getDoctrine()->getRepository('AppBundle:Track')->find($id);
        $sn = $this->getDoctrine()->getManager();

        if (empty($track)) {
            return new View("track not found", Response::HTTP_NOT_FOUND);
        } elseif (!empty($name) && !empty($branch) && !empty($attendanceTime)) {
            $track->setName($name);
            $track->setAttendanceTime($attendanceTime);
            $track->setBranch($branch);

            $sn->flush();
            return new View($track, Response::HTTP_OK);
        } else return new View("Track wasn't updated", Response::HTTP_NOT_ACCEPTABLE);
    }


    /**
     * @Rest\Delete("/api/tracks/{id}")
     */
    public function deleteAction($id)
    {

        $sn = $this->getDoctrine()->getManager();
        $request = $this->getDoctrine()->getRepository('AppBundle:Track')->find($id);
        if (empty($request)) {
            return new View("track not found", Response::HTTP_NOT_FOUND);
        } else {
            $sn->remove($request);
            $sn->flush();
        }
        return new View("deleted successfully", Response::HTTP_OK);
    }

}
