<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Category;
use AppBundle\Form\CategoryType;
use Symfony\Component\HttpFoundation\Response;
class DeleteNewsController extends Controller
{
    /**
     * @Route("/admin/delete_news/{delete}", name="delete_news", defaults={"delete"=0})
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
        
        $cat2 = $em->getRepository('AppBundle:News')->findOneBy(array('news_id'=>$delete));
        if($cat2){
            $em->remove($cat2);
            $em->flush();
        }

        return $this->redirectToRoute("add_news");
    }
}
