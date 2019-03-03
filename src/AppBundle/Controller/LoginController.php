<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        
        $authenticationUtils= $this->get('security.authentication_utils');
        
        $errors=$authenticationUtils->getLastAuthenticationError();
        
        $lastUsername=$authenticationUtils->getLastUsername();
        
        return $this->render('login/login.html.twig', array('last_username'=>$lastUsername, 'errors'=>$errors));
        
    }
}
