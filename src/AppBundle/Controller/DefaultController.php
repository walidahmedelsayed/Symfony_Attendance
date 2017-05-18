<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;


class DefaultController extends FOSRestController
{
    /**
     * @Rest\Get("/home")
     */
    public function indexAction(Request $request)
    {
        return new View("Welcome To Our Symfony Api", Response::HTTP_OK);

    }
}
