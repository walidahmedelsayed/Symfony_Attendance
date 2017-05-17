<?php
namespace AppBundle\Controller;


use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
use AppBundle\Entity\Branch;


class BranchesController extends FOSRestController
{
    /**
     * @Rest\Get("/api/branches")
     */
    public function getAction()
    {

        $restresult = $this->getDoctrine()->getRepository('AppBundle:Branch')->findAll();
        if ($restresult === null) {
            return new View("there are no branches exist", Response::HTTP_NOT_FOUND);
        }
        return $restresult;

    }


    /**
     * @Rest\Get("/api/branches/{id}")
     */
    public function getBranchAction($id)
    {
        $singleresult = $this->getDoctrine()->getRepository('AppBundle:Branch')->find($id);
        if ($singleresult === null) {
            return new View("branch not found", Response::HTTP_NOT_FOUND);
        }
        return $singleresult;
    }

    /**
     * @Rest\Post("/api/branches")
     */
    public function postAction(Request $request)
    {
        $data = new Branch;
        $name = $request->get('name');
        $city = $request->get('city');
        if (empty($name) || empty($city)) {
            return new View("NULL VALUES ARE NOT ALLOWED", Response::HTTP_NOT_ACCEPTABLE);
        }
        $data->setName($name);
        $data->setCity($city);

        $em = $this->getDoctrine()->getManager();
        $em->persist($data);
        $em->flush();
        return new View($data, Response::HTTP_OK);
    }


    /**
     * @Rest\Put("/api/branches/{id}")
     */
    public function updateAction($id, Request $request)
    {
        $name = $request->get('name');
        $city = $request->get('city');
        $branch = $this->getDoctrine()->getRepository('AppBundle:Branch')->find($id);

        $sn = $this->getDoctrine()->getManager();

        if (empty($branch)) {
            return new View("branch not found", Response::HTTP_NOT_FOUND);
        } elseif (!empty($name) && !empty($branch) && !empty($city)) {
            $branch->setName($name);
            $branch->setCity($city);

            $sn->flush();
            return new View($branch, Response::HTTP_OK);
        } else return new View("Branch wasn't updated", Response::HTTP_NOT_ACCEPTABLE);
    }

    /**
     * @Rest\Delete("/api/branches/{id}")
     */
    public function deleteAction($id)
    {

        $sn = $this->getDoctrine()->getManager();
        $request = $this->getDoctrine()->getRepository('AppBundle:Branch')->find($id);
        if (empty($request)) {
            return new View("branch not found", Response::HTTP_NOT_FOUND);
        } else {
            $sn->remove($request);
            $sn->flush();
        }
        return new View("deleted successfully", Response::HTTP_OK);
    }
}