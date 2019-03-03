<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\News;
use AppBundle\Form\NewsType;
use Symfony\Component\HttpFoundation\Response;
class AddNewsController extends Controller
{
    /**
     * @Route("/admin/news", name="add_news")
     */
    public function indexAction(Request $request)
    {
        $this->denyAccessUnlessGranted('ROLE_LECTURER', null, 'Unable to access this page!');
        
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();

        $news = new News();
        
        $form = $this->createForm(NewsType::class, $news, array('validation_groups' => array("add")));
        
        $form->handleRequest($request);
        
        $create_msg="";
        $error=array();
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $news->setNewsAuthor($user->getSurname(). ' '. $user->getFirstname());
            $news->setNewsDate(date_create());
            $em->persist($news);
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
        
        return $this->render('user/add_news.html.twig', array(
        'user'=>$user,'form' => $form->createView(), 'search'=>$search_msg, 'courses'=>$cour, "create_msg"=>$create_msg , "errors"=>$error, "page_header"=>"News and Information", "news"=>$pro));
    }
}