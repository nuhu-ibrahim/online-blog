<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Symfony\Component\HttpFoundation\Response;
class AdminPasswordController extends Controller
{
    /**
     * @Route("/change_password_admin", name="admin_change_password")
     */
    public function indexAction(Request $request)
    {
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }
       
        
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        
        $newUser = new User();
        $newUser->setEmail($user->getEmail());
        $success = 'no';
        $form = $this->createForm(UserType::class, $newUser, array('validation_groups' => array("update")));
        
        $form->handleRequest($request);
        
        $error=array();
        
        if ($form->isSubmitted() && $form->isValid()) {
            
            $cat2 = $em->getRepository('AppBundle:User')->findOneBy(array('email'=>$user->getEmail()));
            $password = $cat2->getPassword();
            
            $newPassword = $form->get('newPassword')->getData();
            $confirmPassword = $form->get('cPassword')->getData();
                    
            if($newPassword != ''){
                if($password === $newUser->getPassword()){
                    if( $newPassword === $confirmPassword ){                   
                        $cat2->setPassword($newPassword);
                        $em->flush();
                        $success='yes';
                    }else{
                        $error[]='confirm password does not match new password, check and try again.';
                    }
                }else{
                    $error[]='Incorrect old password, try again.';
                }
            }else{
                $error[]='Provide your new Password.';
            }
            
        }
        
        $stu = $em->getRepository('AppBundle:Student')->findOneBy(array('email'=>$user->getEmail()));
        $cour = $em->getRepository('AppBundle:Course')->findAll();
        $ses = $em->getRepository('AppBundle:Session')->findAll();
        $news = $em->getRepository('AppBundle:News')->findBy(array('news_status'=>'Published'), array('news_date' => 'ASC'));
        
        return $this->render("admin/change_password.html.twig", array('success'=>$success, 'errors'=>$error, 'user'=>$user, 'form' => $form->createView(), 'news'=>$news,"page_header"=>"Password", 'student'=>$stu, 'courses'=>$cour, 'session'=>$ses));

    }
}
