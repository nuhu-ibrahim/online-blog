<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\User;

class StudentController extends Controller
{
    /**
     * @Route("/student", name="student")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        
        $this->denyAccessUnlessGranted('ROLE_STUDENT', null, 'Unable to access this page!');
        
        $user = $this->getUser();
        
        $stu = $em->getRepository('AppBundle:Student')->findOneBy(array('email'=>$user->getEmail()));
        $cour = $em->getRepository('AppBundle:Course')->findAll();
        $ses = $em->getRepository('AppBundle:Session')->findAll();

        return $this->render('user/index.html.twig', array('user'=>$user, 'student'=>$stu, 'courses'=>$cour, 'session'=>$ses));
    }
}
