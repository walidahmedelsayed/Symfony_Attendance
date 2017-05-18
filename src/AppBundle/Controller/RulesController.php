<?php
namespace AppBundle\Controller;


use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
use AppBundle\Entity\Rule;


class RulesController extends FOSRestController
{

    /**
     * @Rest\Get("/api/rules")
     */
    public function getAction()
    {

        $restresult = $this->getDoctrine()->getRepository('AppBundle:Rule')->findAll();
        if ($restresult === null) {
            return new View("there are no rules exist", Response::HTTP_NOT_FOUND);
        }
        return $restresult;

    }


    /**
     * @Rest\Get("/api/rules/{id}")
     */
    public function getRuleAction($id)
    {
        $singleresult = $this->getDoctrine()->getRepository('AppBundle:Rule')->find($id);
        if ($singleresult === null) {
            return new View("rule not found", Response::HTTP_NOT_FOUND);
        }
        return $singleresult;
    }


    /**
     * @Rest\Post("/api/rules")
     */
    public function postAction(Request $request)
    {
        $data = new Rule;
        $marks = $request->get('marks');
        $minutes = $request->get('minutes');
        if (empty($marks) || empty($minutes)) {
            return new View("NULL VALUES ARE NOT ALLOWED", Response::HTTP_NOT_ACCEPTABLE);
        }
        $data->setMarks($marks);
        $data->setMinutes($minutes);

        $em = $this->getDoctrine()->getManager();
        $em->persist($data);
        $em->flush();
        return new View($data, Response::HTTP_OK);
    }


    /**
     * @Rest\Put("/api/rules/{id}")
     */
    public function updateAction($id, Request $request)
    {

        $rule = $this->getDoctrine()->getRepository('AppBundle:Rule')->find($id);
        $marks = $request->get('marks');
        $minutes = $request->get('minutes');
        $sn = $this->getDoctrine()->getManager();

        if (empty($rule)) {
            return new View("rule not found", Response::HTTP_NOT_FOUND);
        } elseif (!empty($marks) && !empty($minutes)) {
            $rule->setMarks($marks);
            $rule->setMinutes($minutes);

            $sn->flush();
            return new View($rule, Response::HTTP_OK);
        } else return new View("rule wasn't updated", Response::HTTP_NOT_ACCEPTABLE);
    }


    /**
     * @Rest\Delete("/api/rules/{id}")
     */
    public function deleteAction($id)
    {

        $sn = $this->getDoctrine()->getManager();
        $request = $this->getDoctrine()->getRepository('AppBundle:Rule')->find($id);
        if (empty($request)) {
            return new View("track not found", Response::HTTP_NOT_FOUND);
        } else {
            $sn->remove($request);
            $sn->flush();
        }
        return new View("deleted successfully", Response::HTTP_OK);
    }


}