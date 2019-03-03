<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Message;
use AppBundle\Form\MessageType;
use Symfony\Component\HttpFoundation\Response;

class ReloadMsgClassController extends Controller
{
    /**
     * @Route("/reload", name="reload")
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
            $message->setMessageReciever($stu->getSessionId());
            $message->setMessageSenderId($stu->getStudentId());
            
            $em->persist($message);
            $em->flush();
            
            return $this->redirectToRoute('class_blog');
        }
        
        $stu = $em->getRepository('AppBundle:Student')->findOneBy(array('email'=>$user->getEmail()));
        $cour = $em->getRepository('AppBundle:Course')->findAll();
        $ses = $em->getRepository('AppBundle:Session')->findAll();
        $student = $em->getRepository('AppBundle:Student')->findAll();
        $mes = $em->getRepository('AppBundle:Message')->findBy(array('message_reciever'=>$stu->getSessionID()), array('message_date'=>'DESC'));
        
        return $this->render("user/reload.html.twig", array('form' => $form->createView(), 'user'=>$user, 'messages'=>$mes, "page_header"=>"Class Blog", 'student'=>$stu, 'students'=>$student, 'courses'=>$cour, 'session'=>$ses));
    }
}
