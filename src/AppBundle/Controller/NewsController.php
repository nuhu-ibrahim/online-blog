<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class NewsController extends Controller
{
    /**
     * @Route("/news", name="news")
     */
    public function indexAction(Request $request)
    {
        $this->denyAccessUnlessGranted('ROLE_STUDENT', null, 'Unable to access this page!');
        
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        
        $stu = $em->getRepository('AppBundle:Student')->findOneBy(array('email'=>$user->getEmail()));
        $cour = $em->getRepository('AppBundle:Course')->findAll();
        $ses = $em->getRepository('AppBundle:Session')->findAll();
        $news = $em->getRepository('AppBundle:News')->findBy(array('news_status'=>'Published'), array('news_date' => 'DESC'));
        
        
        return $this->render("user/news.html.twig", array('user'=>$user, 'news'=>$news,"page_header"=>"News and Information", 'student'=>$stu, 'courses'=>$cour, 'session'=>$ses));
    }
}
