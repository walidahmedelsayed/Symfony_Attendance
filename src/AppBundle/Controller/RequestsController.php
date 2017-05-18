<?php
namespace AppBundle\Controller;


use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
use AppBundle\Entity\Request as myRequest;


class RequestsController extends FOSRestController
{
    /**
     * @Rest\Get("/api/requests")
     */
    public function getAction()
    {

        $restresult = $this->getDoctrine()->getRepository('AppBundle:Request')->findAll();
        if ($restresult === null) {
            return new View("there are no users exist", Response::HTTP_NOT_FOUND);
        }
        return $restresult;

    }

    /**
     * @Rest\Get("/api/requests/{id}")
     */
    public function getRequestAction($id)
    {
        $singleresult = $this->getDoctrine()->getRepository('AppBundle:Request')->find($id);
        if ($singleresult === null) {
            return new View("user not found", Response::HTTP_NOT_FOUND);
        }
        return $singleresult;
    }

    /**
     * @Rest\Post("/api/requests")
     */
    public function postAction(Request $request)
    {
        $data = new myRequest;
        $targetDate = $request->get('targetDate');
        $type = $request->get('type');
        $body = $request->get('body');
        $hoursLate = $request->get('hoursLate');
        $date = new \DateTime('now');
        $status = 1;
        $user = $this->getDoctrine()->getRepository('AppBundle:User')->find($request->get('user_id'));

        if (empty($body) || empty($date) || empty($status) || empty($user) || empty($targetDate) || empty($type)) {
            return new View("NULL VALUES ARE NOT ALLOWED", Response::HTTP_NOT_ACCEPTABLE);
        }
        $data->setTargetDate($targetDate);
        $data->setType($type);
        $data->setBody($body);
        $data->setDate($date);
        $data->setStatus($status);
        $data->setUser($user);
        if($hoursLate){
            $data->setHoursLate($hoursLate);
        }
        $em = $this->getDoctrine()->getManager();
        $em->persist($data);
        $em->flush();
        return new View($data, Response::HTTP_OK);
    }

    /**
     * @Rest\Put("/api/requests/{id}")
     */
    public function updateAction($id, Request $request)
    {
        $status = $request->get('status');
        $userrequest = $this->getDoctrine()->getRepository('AppBundle:Request')->find($id);

        $sn = $this->getDoctrine()->getManager();

        if (empty($userrequest)) {
            return new View("request not found", Response::HTTP_NOT_FOUND);
        } elseif (!empty($status) && !empty($userrequest)) {
            $userrequest->setStatus($status);

            $sn->flush();
            return new View($userrequest, Response::HTTP_OK);
        } else return new View("request wasn't updated", Response::HTTP_NOT_ACCEPTABLE);
    }


    /**
     * @Rest\Delete("/api/requests/{id}")
     */
    public function deleteAction($id)
    {

        $sn = $this->getDoctrine()->getManager();
        $request = $this->getDoctrine()->getRepository('AppBundle:Request')->find($id);
        if (empty($request)) {
            return new View("request not found", Response::HTTP_NOT_FOUND);
        } else {
            $sn->remove($request);
            $sn->flush();
        }
        return new View("deleted successfully", Response::HTTP_OK);
    }


}