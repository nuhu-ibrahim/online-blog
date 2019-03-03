<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Session;
use AppBundle\Form\SessionType;
use Symfony\Component\HttpFoundation\Response;
class EditSessionController extends Controller
{
    /**
     * @Route("/admin/edit_session/{edit}", name="edit_sessions", defaults={"edit"=0})
     */
    public function indexAction(Request $request, $edit)
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');
        
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();

        $session = new Session();
        $cats = $em->getRepository('AppBundle:Session')->findOneBy(array('session_id'=>$edit));
        if($cats){
            $session->setSessionTitle($cats->getSessionTitle());
        }else{
            return $this->redirectToRoute("add_sessions");
        }
        $form = $this->createForm(SessionType::class, $session, array('validation_groups' => array("edit")));
        
        $form->handleRequest($request);
        $update_msg="";
        $cat2="";
        $error=array();
        if ($form->isSubmitted() && $form->isValid()) {
            $cats = $em->getRepository('AppBundle:Session')->findOneBy(array('session_title'=>$session->getSessionTitle()));
            if($cats){
                $error[]="Session title already exist.";
            }else{
                $cat2 = $em->getRepository('AppBundle:Session')->findOneBy(array('session_id'=>$edit));
                $cat2->setSessionTitle($session->getSessionTitle());
                $em->flush();

                return $this->redirectToRoute("add_sessions");
            }
        }
        
        $cat2 = $em->getRepository('AppBundle:Session')->findOneBy(array('session_id'=>$edit));
        if(!$cat2){
            return $this->redirectToRoute("add_sessions");
        }
        $cat = $em->getRepository('AppBundle:Session')->findAll();
  
        return $this->render('admin/edit_session.html.twig', array(
        'user'=>$user,'form' => $form->createView(), "update_details"=>$cat2 ,"update_msg"=>$update_msg, "page_header"=>"Sessions", "errors"=>$error, "sessions"=>$cat));
    }
}
