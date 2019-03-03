<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Lecturer;
use AppBundle\Form\LecturerType;
use Symfony\Component\HttpFoundation\Response;
class EditLecturerController extends Controller
{
    /**
     * @Route("/admin/edit_lecturer/{edit}", name="edit_lecturers", defaults={"edit"=0})
     */
    public function indexAction(Request $request, $edit)
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');
        
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        // replace this example code with whatever you need
        $lecturer = new Lecturer();
        $cat2 = $em->getRepository('AppBundle:Lecturer')->findOneBy(array('staff_id'=>$edit));
        if(!$cat2){
            return $this->redirectToRoute("add_lecturers");
        }
        
        $lecturer->setStaffId($cat2->getStaffId());
        $lecturer->setSurname($cat2->getSurname());
        $lecturer->setOthername($cat2->getOthername());
        $lecturer->setFirstname($cat2->getFirstname());
        $lecturer->setMobile($cat2->getMobile());
        $lecturer->setEmail($cat2->getEmail());
        $lecturer->setSex($cat2->getSex());
        $lecturer->setMstatus($cat2->getMstatus());
        $lecturer->setAddress($cat2->getAddress());
            
        $form = $this->createForm(LecturerType::class, $lecturer, array('validation_groups' => array("edit")));
        
        $form->handleRequest($request);
        $update_msg="";
        $cat2="";
        $error=array();
        if ($form->isSubmitted() && $form->isValid()) {
            $cat2 = $em->getRepository('AppBundle:Lecturer')->findOneBy(array('staff_id'=>$edit));
            
            $cat2->setStaffId($lecturer->getStaffId());
            $cat2->setSurname($lecturer->getSurname());
            $cat2->setOthername($lecturer->getOthername());
            $cat2->setFirstname($lecturer->getFirstname());
            $cat2->setMobile($lecturer->getMobile());
            $cat2->setEmail($lecturer->getEmail());
            $cat2->setSex($lecturer->getSex());
            $cat2->setMstatus($lecturer->getMstatus());
            $cat2->setAddress($lecturer->getAddress());
            
            if($lecturer->getPassport()){
                $file= $lecturer->getPassport();
                
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

            return $this->redirectToRoute("add_lecturers");
        }
       
        $pro = $em->getRepository('AppBundle:Lecturer')->findAll();

        return $this->render('admin/edit_lecturer.html.twig', array(
        'user'=>$user,'form' => $form->createView(), "update_details"=>$cat2 ,"update_msg"=>$update_msg, "page_header"=>"Lecturers", "errors"=>$error, "lecturers"=>$pro));
    }
}