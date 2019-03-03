<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Student;
use AppBundle\Entity\User;
use AppBundle\Form\StudentType;
use Symfony\Component\HttpFoundation\Response;
class AddStudentController extends Controller
{
    /**
     * @Route("/admin/student", name="add_students")
     */
    
    public function indexAction(Request $request)
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');
        
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();

        $student = new Student();
        
        $form = $this->createForm(StudentType::class, $student, array('validation_groups' => array("add")));
        
        $form->handleRequest($request);
        
        $create_msg="";
        $error=array();
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $cats = $em->getRepository('AppBundle:Student')->findOneBy(array('email'=>$student->getEmail()));
            $cats4 = $em->getRepository('AppBundle:User')->findOneBy(array('email'=>$student->getEmail()));
            $cats2 = $em->getRepository('AppBundle:Student')->findOneBy(array('reg_no'=>$student->getRegNo()));
            if($cats || $cats4){
                $error[]="Email already exists.";
            }else if($cats2){
                $error[]="Registration number already exists.";
            }else{
                $file= $student->getPassport();
                
                $directory="passports";
                //$file=$pass->move($directory, $pass->getClientOriginalName());
                $ext=$file->guessExtension();
                if(!$ext){
                    $ext='bin';
                }
                $rand= rand(1, 9999999);
                $file->move($directory, $rand.'.'.$ext);
                $student->setPassport($rand.'.'.$ext);
                
                
                $em->persist($student);
                $em->flush();
                
                $user = new User();
                
                $user->setEmail($student->getEmail());
                $user->setFirstname($student->getFirstname());
                $user->setOthername($student->getOthername());
                $user->setPassword($student->getMobile());
                $user->setRole('ROLE_STUDENT');
                $user->setSurname($student->getSurname());
                $user->setUsername($student->getEmail());
                
                $em->persist($user);
                $em->flush();
           
                return $this->redirectToRoute("add_students");
            }
            
        }
        
        $search_msg='';
        if(isset($_POST['search'])){
            $status=$_POST['search'];
            if(!$status==''){
                $sea = $em->getRepository('AppBundle:Session')->findOneBy(array('session_title'=>$status));
                $sesID=$sea->getSessionId();
                
                $pro = $em->getRepository('AppBundle:Student')->findBy(array('session_id'=>$sesID));
                $search_msg = ucfirst($status);
            }else{
                $pro = $em->getRepository('AppBundle:Student')->findAll();
                $search_msg = "All";
            }
        }else{
            $pro = $em->getRepository('AppBundle:Student')->findAll();
            $search_msg = "All";
        }
        
        $ses = $em->getRepository('AppBundle:Session')->findAll();
        
        return $this->render('admin/add_student.html.twig', array(
        'user'=>$user,'form' => $form->createView(), 'search'=>$search_msg, "create_msg"=>$create_msg , "errors"=>$error, "page_header"=>"Students", "students"=>$pro, 'sessions'=>$ses));
    }
}