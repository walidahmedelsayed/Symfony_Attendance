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
     * @Rest\Get("/requests")
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
     * @Rest\Get("/requests/{id}")
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
     * @Rest\Post("/requests")
     */
    public function postAction(Request $request)
    {
        $data = new myRequest;
        $body = $request->get('body');
        $date = new \DateTime('now');
        $status = 1;
        $user = $this->getDoctrine()->getRepository('AppBundle:User')->find($request->get('user_id'));

        if (empty($body) || empty($date) || empty($status) || empty($user)) {
            return new View("NULL VALUES ARE NOT ALLOWED", Response::HTTP_NOT_ACCEPTABLE);
        }
        $data->setBody($body);
        $data->setDate($date);
        $data->setStatus($status);
        $data->setUser($user);
        $em = $this->getDoctrine()->getManager();
        $em->persist($data);
        $em->flush();
        return new View("Request Added Successfully", Response::HTTP_OK);
    }

    /**
     * @Rest\Put("/requests/{id}")
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
            return new View("Request Updated Successfully", Response::HTTP_OK);
        } else return new View("request wasn't updated", Response::HTTP_NOT_ACCEPTABLE);
    }


    /**
     * @Rest\Delete("/requests/{id}")
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