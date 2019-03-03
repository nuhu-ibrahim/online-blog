<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Course;
use AppBundle\Form\CourseType;
use Symfony\Component\HttpFoundation\Response;
class EditCourseController extends Controller
{
    /**
     * @Route("/admin/edit_course/{edit}", name="edit_courses", defaults={"edit"=0})
     */
    public function indexAction(Request $request, $edit)
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');
        
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        // replace this example code with whatever you need
        $course = new Course();
        $cat2 = $em->getRepository('AppBundle:Course')->findOneBy(array('course_id'=>$edit));
        if(!$cat2){
            return $this->redirectToRoute("add_courses");
        }
        
        $course->setCourseCode($cat2->getCourseCode());
        $course->setCourseTitle($cat2->getCourseTitle());
        $course->setCourseLevel($cat2->getCourseLevel());
        
        $form = $this->createForm(CourseType::class, $course, array('validation_groups' => array("edit")));
        
        $form->handleRequest($request);
        $update_msg="";
        $cat2="";
        $error=array();
        if ($form->isSubmitted() && $form->isValid()) {
            $cat2 = $em->getRepository('AppBundle:Course')->findOneBy(array('course_id'=>$edit));
            
            $cat2->setCourseCode($course->getCourseCode());
            $cat2->setCourseTitle($course->getCourseTitle());
            $cat2->setCourseLevel($course->getCourseLevel());
            
            $em->flush();

            return $this->redirectToRoute("add_courses");
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
        
        return $this->render('admin/edit_course.html.twig', array(
        'user'=>$user,'form' => $form->createView(), 'search'=>$search_msg, "update_details"=>$cat2 ,"update_msg"=>$update_msg, "page_header"=>"Courses", "errors"=>$error, "courses"=>$pro));
    }
}
