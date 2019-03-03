<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\GroupMessage;
use AppBundle\Form\GroupMessageType;
use Symfony\Component\HttpFoundation\Response;

class ReloadMsgLectureController extends Controller
{
    /**
     * @Route("/reload3/{group_id}", name="reload3", defaults={"group_id"=0})
     */
    public function indexAction(Request $request, $group_id)
    {
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }
        
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        
        $message = new GroupMessage();
        
        $form = $this->createForm(GroupMessageType::class, $message);
        
        $form->handleRequest($request);
        
        $create_msg = "";
        
        $error = array();
        
        if($form->isSubmitted() && $form->isValid()){
            if($user->getRole() == "ROLE_STUDENT"){
                $student = $em->getRepository('AppBundle:Student')->findOneBy(array('email'=>$user->getEmail()));
                $message->setMessageSenderId($student->getStudentId());
                $message->setSenderType(1);
            }else if($user->getRole() == "ROLE_LECTURER"){
                $lecturer = $em->getRepository('AppBundle:Lecturer')->findOneBy(array('email'=>$user->getEmail()));
                $message->setMessageSenderId($lecturer->getLecturerId());
                $message->setSenderType(2);
            }
            
            $message->setGroupId($group_id);
            $message->setMessageDate(date_create());
            $em->persist($message);
            $em->flush();
            
            return $this->redirectToRoute('lecture_discussion', array("group_id"=>$group_id));
        }
        
        $lecturer = $em->getRepository('AppBundle:Lecturer')->findOneBy(array('email'=>$user->getEmail()));
        $student = $em->getRepository('AppBundle:Student')->findOneBy(array('email'=>$user->getEmail()));
        $courses = $em->getRepository('AppBundle:Course')->findAll();
        $sessions = $em->getRepository('AppBundle:Session')->findAll();
        $students = $em->getRepository('AppBundle:Student')->findAll();
        $lecturers = $em->getRepository('AppBundle:Lecturer')->findAll();
        $messages = $em->getRepository('AppBundle:GroupMessage')->findBy(array('group_id'=>$group_id), array('message_date'=>'DESC'));
        
        return $this->render("user/reload3.html.twig", array('form' => $form->createView(),'students'=>$students, 'user'=>$user, 'messages'=>$messages, "page_header"=>"General Blog", 'lecturers'=>$lecturers, 'student'=>$student, 'lecturer'=>$lecturer, 'courses'=>$courses, 'session'=>$sessions));
    }
}
