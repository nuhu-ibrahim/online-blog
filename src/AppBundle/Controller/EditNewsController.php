<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\News;
use AppBundle\Form\NewsType;
use Symfony\Component\HttpFoundation\Response;
class EditNewsController extends Controller
{
    /**
     * @Route("/admin/edit_news/{edit}", name="edit_news", defaults={"edit"=0})
     */
    public function indexAction(Request $request, $edit)
    {
        $this->denyAccessUnlessGranted('ROLE_LECTURER', null, 'Unable to access this page!');
        
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        // replace this example code with whatever you need
        $news = new News();

        $cat2 = $em->getRepository('AppBundle:News')->findOneBy(array('news_id'=>$edit));
        if(!$cat2){
            return $this->redirectToRoute("add_news");
        }
        
        $news->setNewsContent($cat2->getNewsContent());
        $news->setNewsStatus($cat2->getNewsStatus());
        $news->setNewsTitle($cat2->getNewsTitle());
        
        $form = $this->createForm(NewsType::class, $news, array('validation_groups' => array("edit")));
        
        $form->handleRequest($request);
        $update_msg="";
        $cat2="";
        $error=array();
        if ($form->isSubmitted() && $form->isValid()) {
            $cat2 = $em->getRepository('AppBundle:News')->findOneBy(array('news_id'=>$edit));

            $cat2->setNewsContent($news->getNewsContent());
            $cat2->setNewsStatus($news->getNewsStatus());
            $cat2->setNewsTitle($news->getNewsTitle());
            
            $em->flush();

            return $this->redirectToRoute("add_news");
        }
       
        $search_msg='';
        if(isset($_POST['search'])){
            $status=$_POST['search'];
            if(!$status==''){
                $pro = $em->getRepository('AppBundle:News')->findBy(array('news_status'=>$status));
                $search_msg=  ucfirst($status);
            }else{
                $pro = $em->getRepository('AppBundle:News')->findAll();
                $search_msg=  "All";
            }
        }else{
            $pro = $em->getRepository('AppBundle:News')->findAll();
            $search_msg=  "All";
        }
        
        $cour = $em->getRepository('AppBundle:Course')->findAll();
        
        return $this->render('user/edit_news.html.twig', array(
        'user'=>$user,'form' => $form->createView(), 'courses'=>$cour, 'search'=>$search_msg, "update_details"=>$cat2 ,"update_msg"=>$update_msg, "page_header"=>"News and Information", "errors"=>$error, "news"=>$pro));
    }
}
