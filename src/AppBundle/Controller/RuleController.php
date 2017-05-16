<?php
namespace AppBundle\Controller;


use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
use AppBundle\Entity\Rule;


class RuleController extends FOSRestController
{

    /**
     * @Rest\Get("/rule")
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
     * @Rest\Get("/rule/{id}")
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
     * @Rest\Put("/rule/{id}")
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
            return new View("Rule Updated Successfully", Response::HTTP_OK);
        }
        else return new View("rule wasn't updated", Response::HTTP_NOT_ACCEPTABLE);
    }

}