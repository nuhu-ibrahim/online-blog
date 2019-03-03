<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Student;
use AppBundle\Form\StudentType;
use Symfony\Component\HttpFoundation\Response;
class EditStudentController extends Controller
{
    /**
     * @Route("/admin/edit_student/{edit}", name="edit_students", defaults={"edit"=0})
     */
    public function indexAction(Request $request, $edit)
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');
        
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        // replace this example code with whatever you need
        $student = new Student();
        $cat2 = $em->getRepository('AppBundle:Student')->findOneBy(array('student_id'=>$edit));
        if(!$cat2){
            return $this->redirectToRoute("add_students");
        }
        
        $student->setSessionId($cat2->getSessionId());
        $student->setRegNo($cat2->getRegNo());
        $student->setSurname($cat2->getSurname());
        $student->setOthername($cat2->getOthername());
        $student->setFirstname($cat2->getFirstname());
        $student->setMobile($cat2->getMobile());
        $student->setEmail($cat2->getEmail());
        $student->setSex($cat2->getSex());
        $student->setMstatus($cat2->getMstatus());
        $student->setAddress($cat2->getAddress());
            
        $form = $this->createForm(StudentType::class, $student, array('validation_groups' => array("edit")));
        
        $form->handleRequest($request);
        $update_msg="";
        $cat2="";
        $error=array();
        if ($form->isSubmitted() && $form->isValid()) {
            $cat2 = $em->getRepository('AppBundle:Student')->findOneBy(array('student_id'=>$edit));
            
            $cat2->setSessionId($student->getSessionId());
            $cat2->setRegNo($student->getRegNo());
            $cat2->setSurname($student->getSurname());
            $cat2->setOthername($student->getOthername());
            $cat2->setFirstname($student->getFirstname());
            $cat2->setMobile($student->getMobile());
            $cat2->setEmail($student->getEmail());
            $cat2->setSex($student->getSex());
            $cat2->setMstatus($student->getMstatus());
            $cat2->setAddress($student->getAddress());
            
            if($student->getPassport()){
                $file= $student->getPassport();
                
                $directory="passports";

                $ext=$file->guessExtension();
                if(!$ext){
                    $ext='bin';
                }
                $rand= rand(1, 9999999);
                $file->move($directory, $rand.'.'.$ext);
                $cat2->setPassport($rand.'.'.$ext);
            }
            
            $em->flush();
            
            

            return $this->redirectToRoute("add_students");
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

        
        return $this->render('admin/edit_student.html.twig', array(
        'user'=>$user,'form' => $form->createView(), 'search'=>$search_msg, "update_details"=>$cat2 ,"update_msg"=>$update_msg, "page_header"=>"Students", "errors"=>$error, "students"=>$pro, 'sessions'=>$ses));
    }
}