<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
class DeleteStudentController extends Controller
{
    /**
     * @Route("/admin/delete_student/{delete}", name="delete_students", defaults={"delete"=0})
     */
    public function indexAction(Request $request, $delete)
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');
        
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        // replace this example code with whatever you need
        $update_msg="";
        $cat2="";
        $error=array();
        
        $cat2 = $em->getRepository('AppBundle:Student')->findOneBy(array('student_id'=>$delete));
        $email= $cat2->getEmail();
        if($cat2){
            $em->remove($cat2);
            $em->flush();
        }
        
        $cat2 = $em->getRepository('AppBundle:User')->findOneBy(array('email'=>$email));
        
        if($cat2){
            $em->remove($cat2);
            $em->flush();
        }
        return $this->redirectToRoute("add_students");
    }
}
