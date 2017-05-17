<?php
namespace AppBundle\Controller;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;
class AuthController extends FOSRestController
{

    /**
     * @Rest\Post("/api/token-authentication")
     */
    public function tokenAuthentication(Request $request)
    {
        $username = $request->request->get('username');
        $password = $request->request->get('password');

        $user = $this->getDoctrine()->getRepository('AppBundle:User')
            ->findOneBy(['name' => $username]);

        if(!$user) {
            throw $this->createNotFoundException();
        }

        // password check
        if($password != $user->getPassword()) {
            throw $this->createAccessDeniedException();
        }

        // Use LexikJWTAuthenticationBundle to create JWT token that hold only information about user name
        $token = $this->get('lexik_jwt_authentication.encoder')
            ->encode(['username' => $user->getUsername()]);

        // Return genereted tocken
        return new JsonResponse(['token' => $token]);
    }

    /**
     * @Rest\Get("/api/resource")
     */
    public function secureResource(){
        $data = [
            'test' => 'test',
            'test2' => 'test2'
        ];

        return new JsonResponse($data);
    }
}