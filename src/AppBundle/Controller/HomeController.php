<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction(Request $request)
    {
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }
       
        $user = $this->getUser();
        
        if($user->getRole()=='ROLE_ADMIN'){
            return $this->redirectToRoute('admin');
        }else if($user->getRole()=='ROLE_STUDENT'){
            return $this->redirectToRoute('student');
        }else if($user->getRole()=='ROLE_LECTURER'){
            return $this->redirectToRoute('lecturer');
        }
        
        
    }
}
