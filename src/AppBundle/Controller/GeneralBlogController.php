<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Message;
use AppBundle\Form\MessageType;
use Symfony\Component\HttpFoundation\Response;

class GeneralBlogController extends Controller
{
    /**
     * @Route("/general_blog", name="general_blog")
     */
    public function indexAction(Request $request)
    {
        $this->denyAccessUnlessGranted('ROLE_STUDENT', null, 'Unable to access this page!');
        
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        
        $message = new Message();
        
        $form = $this->createForm(MessageType::class, $message);
        
        $form->handleRequest($request);
        
        $create_msg="";
        $error=array();
        
        if($form->isSubmitted() && $form->isValid()){
            $stu = $em->getRepository('AppBundle:Student')->findOneBy(array('email'=>$user->getEmail()));
            $message->setMessageDate(date_create());
            $message->setMessageReciever(0);
            $message->setMessageSenderId($stu->getStudentId());
            
            $em->persist($message);
            $em->flush();
            
            return $this->redirectToRoute('general_blog');
        }
        
        $stu = $em->getRepository('AppBundle:Student')->findOneBy(array('email'=>$user->getEmail()));
        $cour = $em->getRepository('AppBundle:Course')->findAll();
        $ses = $em->getRepository('AppBundle:Session')->findAll();
        $student = $em->getRepository('AppBundle:Student')->findAll();
        $mes = $em->getRepository('AppBundle:Message')->findBy(array('message_reciever'=>0), array('message_date'=>'DESC'));
        
        return $this->render("user/general_blog.html.twig", array('form' => $form->createView(),'students'=>$student, 'user'=>$user, 'messages'=>$mes, "page_header"=>"General Blog", 'student'=>$stu, 'courses'=>$cour, 'session'=>$ses));
    }
}
