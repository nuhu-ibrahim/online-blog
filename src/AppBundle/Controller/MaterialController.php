<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MaterialController extends Controller
{
    /**
     * @Route("/material/{id}", name="material", defaults={"id"=0})
     */
    public function indexAction(Request $request, $id)
    {
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }
       
        
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
       
        $cat2 = $em->getRepository('AppBundle:Course')->findOneBy(array('course_id'=>$id));
        if(!$cat2){
            return $this->redirectToRoute('student');
        }
        
        $cat3 = $em->getRepository('AppBundle:Attachment')->findBy(array('course_id'=>$id), array('attachment_id'=>'DESC'));
        $group = $em->getRepository('AppBundle:Group')->findAll();
        
        $stu = $em->getRepository('AppBundle:Student')->findOneBy(array('email'=>$user->getEmail()));
        $cour = $em->getRepository('AppBundle:Course')->findAll();
        $ses = $em->getRepository('AppBundle:Session')->findAll();
        
        return $this->render("user/material.html.twig", array('user'=>$user, 'attachments'=>$cat3, "page_header"=>"Documents", 'student'=>$stu, 'cor'=>$cat2, 'courses'=>$cour, 'session'=>$ses, "groups"=>$group));
    }
}
