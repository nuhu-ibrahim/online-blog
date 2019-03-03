<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Attachment;
use AppBundle\Entity\Group;
use AppBundle\Form\AttachmentType;
use Symfony\Component\HttpFoundation\Response;

class AddAttachmentController extends Controller
{
    /**
     * @Route("/admin/add_document", name="add_documents")
     */
    public function indexAction(Request $request)
    {
        $this->denyAccessUnlessGranted('ROLE_LECTURER', null, 'Unable to access this page!');
        
        $user = $this->getUser();
        // replace this example code with whatever you need
        $em = $this->getDoctrine()->getManager();
        
        $attachment = new Attachment();
        $group = new Group();
        
        $form = $this->createForm(AttachmentType::class, $attachment, array('validation_groups' => array("add")));
        
        $form->handleRequest($request);
        
        $create_msg="";
        $error=array();
        
        if ($form->isSubmitted() && $form->isValid()) {
            $file= $attachment->getAttachment();
            $directory="uploads";
            //$file=$pass->move($directory, $pass->getClientOriginalName());
            $ext=$file->guessExtension();
            if(!$ext){
                $ext='bin';
            }
            $rand= rand(1, 9999999);
            $file->move($directory, $rand.'.'.$ext);
            $attachment->setAttachment($rand.'.'.$ext);
            
            $em->persist($attachment);
            $em->flush();
            
            $group->setAttachmentId($attachment->getAttachmentId());
            
            $em->persist($group);
            $em->flush();

            return $this->redirectToRoute("add_documents");
        }
        
        $em = $this->getDoctrine()->getManager();
        $att = $em->getRepository('AppBundle:Attachment')->findAll(array('course_title'=>'ASC'));
        
        $crs = $em->getRepository('AppBundle:Course')->findAll();
  
        return $this->render('user/add_attachment.html.twig', array(
        'form' => $form->createView(), 'user'=>$user, "create_msg"=>$create_msg , "errors"=>$error, "page_header"=>"Documents", "attachments"=>$att, "courses"=>$crs));
    }
}