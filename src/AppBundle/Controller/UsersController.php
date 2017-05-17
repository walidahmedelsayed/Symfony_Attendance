<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
use AppBundle\Entity\User;


class UsersController extends FOSRestController
{
    /**
     * @Rest\Get("/users")
     */
    public function getAction()
    {
        $restresult = $this->getDoctrine()->getRepository('AppBundle:User')->findAll();
        if ($restresult === null) {
            return new View("there are no users exist", Response::HTTP_NOT_FOUND);
        }
        return $restresult;
    }


    /**
     * @Rest\Get("/users/{id}")
     */
    public function getUserAction($id)
    {
        $singleresult = $this->getDoctrine()->getRepository('AppBundle:User')->find($id);
        if ($singleresult === null) {
            return new View("user not found", Response::HTTP_NOT_FOUND);
        }
        return $singleresult;
    }


    /**
     * @Rest\Post("/users")
     */
    public function postAction(Request $request)
    {
        $data = new User;
        $name = $request->get('name');
        $password = $request->get('password');
        $track = $this->getDoctrine()->getRepository('AppBundle:Track')->find($request->get('track_id'));
        $type = $request->get('type');
        if (empty($name) || empty($password) || empty($track) || empty($type)) {
            return new View("NULL VALUES ARE NOT ALLOWED", Response::HTTP_NOT_ACCEPTABLE);
        }
        $data->setName($name);
        $data->setPassword($password);
        $data->setTrack($track);
        $data->setType($type);
        $em = $this->getDoctrine()->getManager();
        $em->persist($data);
        $em->flush();
        return new View($data, Response::HTTP_OK);
    }

    /**
     * @Rest\Put("/users/{id}")
     */
    public function updateAction($id, Request $request)
    {
        $user = $this->getDoctrine()->getRepository('AppBundle:User')->find($id);
        $name = $request->get('name');
        $password = $request->get('password');
        $track = $this->getDoctrine()->getRepository('AppBundle:Track')->find($request->get('track_id'));
        $type = $request->get('type');
        $sn = $this->getDoctrine()->getManager();

        if (empty($user)) {
            return new View("user not found", Response::HTTP_NOT_FOUND);
        } elseif (!empty($name) && !empty($password) && !empty($track) && !empty($type)) {
            $user->setName($name);
            $user->setPassword($password);
            $user->setTrack($track);
            $user->setType($type);

            $sn->flush();
            return new View("User Updated Successfully", Response::HTTP_OK);
        } elseif (empty($name) && !empty($password)) {
            $user->setPassword($password);
            $sn->flush();
            return new View("role Updated Successfully", Response::HTTP_OK);
        } elseif (!empty($name) && empty($password)) {
            $user->setName($name);
            $sn->flush();
            return new View("User Name Updated Successfully", Response::HTTP_OK);
        } else return new View("User name or role cannot be empty", Response::HTTP_NOT_ACCEPTABLE);
    }


    /**
     * @Rest\Delete("/users/{id}")
     */
    public function deleteAction($id)
    {

        $sn = $this->getDoctrine()->getManager();
        $user = $this->getDoctrine()->getRepository('AppBundle:User')->find($id);
        if (empty($user)) {
            return new View("user not found", Response::HTTP_NOT_FOUND);
        } else {
            $sn->remove($user);
            $sn->flush();
        }
        return new View("deleted successfully", Response::HTTP_OK);
    }

}