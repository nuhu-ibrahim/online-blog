<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Lecturer;
use AppBundle\Entity\User;
use AppBundle\Form\LecturerType;
use Symfony\Component\HttpFoundation\Response;
class AddLecturerController extends Controller
{
    /**
     * @Route("/admin/lecturer", name="add_lecturers")
     */
    
    public function indexAction(Request $request)
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');
        
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();

        $lecturer = new Lecturer();
        
        $form = $this->createForm(LecturerType::class, $lecturer, array('validation_groups' => array("add")));
        
        $form->handleRequest($request);
        
        $create_msg="";
        $error=array();
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $cats = $em->getRepository('AppBundle:Lecturer')->findOneBy(array('email'=>$lecturer->getEmail()));
            $cats4 = $em->getRepository('AppBundle:User')->findOneBy(array('email'=>$lecturer->getEmail()));
            $cats2 = $em->getRepository('AppBundle:Lecturer')->findOneBy(array('staff_id'=>$lecturer->getStaffId()));
            if($cats || $cats4){
                $error[]="Email already exists.";
            }else if($cats2){
                $error[]="Staff ID already exists.";
            }else{
                $file= $lecturer->getPassport();
                
                $directory="passports";
                //$file=$pass->move($directory, $pass->getClientOriginalName());
                $ext=$file->guessExtension();
                if(!$ext){
                    $ext='bin';
                }
                $rand= rand(1, 9999999);
                $file->move($directory, $rand.'.'.$ext);
                $lecturer->setPassport($rand.'.'.$ext);
                
                
                $em->persist($lecturer);
                $em->flush();
                
                $user = new User();
                
                $user->setEmail($lecturer->getEmail());
                $user->setFirstname($lecturer->getFirstname());
                $user->setOthername($lecturer->getOthername());
                $user->setPassword($lecturer->getMobile());
                $user->setRole('ROLE_LECTURER');
                $user->setSurname($lecturer->getSurname());
                $user->setUsername($lecturer->getEmail());
                
                $em->persist($user);
                $em->flush();
           
                return $this->redirectToRoute("add_lecturers");
            }
            
        }
        
        $pro = $em->getRepository('AppBundle:Lecturer')->findAll();
        
        return $this->render('admin/add_lecturer.html.twig', array(
        'user'=>$user,'form' => $form->createView(), "create_msg"=>$create_msg , "lecturers" => $pro, "errors"=>$error, "page_header"=>"Lecturer"));
    }
}