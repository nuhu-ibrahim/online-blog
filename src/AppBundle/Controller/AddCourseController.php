<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Course;
use AppBundle\Form\CourseType;
use Symfony\Component\HttpFoundation\Response;
class AddCourseController extends Controller
{
    /**
     * @Route("/admin/courses", name="add_courses")
     */
    public function indexAction(Request $request)
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');
        
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();

        $course = new Course();
        
        $form = $this->createForm(CourseType::class, $course, array('validation_groups' => array("add")));
        
        $form->handleRequest($request);
        
        $create_msg="";
        $error=array();
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $cats = $em->getRepository('AppBundle:Course')->findOneBy(array('course_code'=>$course->getCourseCode()));
            if($cats){
                //return new Response("Here");
                $error[]="Course code already exist.";
            }else{
                $em->persist($course);
                $em->flush();
                
                return $this->redirectToRoute("add_courses");
            }
            
        }
        
        $search_msg='';
        if(isset($_POST['search'])){
            $status=$_POST['search'];
            if(!$status==''){
                $pro = $em->getRepository('AppBundle:Course')->findBy(array('course_level'=>$status));
                $search_msg=  ucfirst($status);
            }else{
                $pro = $em->getRepository('AppBundle:Course')->findAll();
                $search_msg=  "All";
            }
        }else{
            $pro = $em->getRepository('AppBundle:Course')->findAll();
            $search_msg=  "All";
        }
        
        return $this->render('admin/add_course.html.twig', array(
        'user'=>$user,'form' => $form->createView(), 'search'=>$search_msg, "create_msg"=>$create_msg , "errors"=>$error, "page_header"=>"Courses", "courses"=>$pro));
    }
}