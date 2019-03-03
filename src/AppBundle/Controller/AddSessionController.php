<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Session;
use AppBundle\Form\SessionType;
use Symfony\Component\HttpFoundation\Response;
class AddSessionController extends Controller
{
    /**
     * @Route("/admin/session", name="add_sessions")
     */
    public function indexAction(Request $request)
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');
        
        $user = $this->getUser();
        // replace this example code with whatever you need
        $session = new Session();
        $form = $this->createForm(SessionType::class, $session, array('validation_groups' => array("add")));
        
        $form->handleRequest($request);
        
        $create_msg="";
        $error=array();
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $cats = $em->getRepository('AppBundle:Session')->findOneBy(array('session_title'=>$session->getSessionTitle()));
            if($cats){
                $error[]="Session title already exist.";
            }else{
                $em->persist($session);
                $em->flush();
                
                return $this->redirectToRoute("add_sessions");
            }
            
        }
        $em = $this->getDoctrine()->getManager();
        $cat = $em->getRepository('AppBundle:Session')->findAll();
  
        return $this->render('admin/add_session.html.twig', array(
        'user'=>$user,'form' => $form->createView(), "create_msg"=>$create_msg , "errors"=>$error, "page_header"=>"Sessions", "sessions"=>$cat));
    }
}