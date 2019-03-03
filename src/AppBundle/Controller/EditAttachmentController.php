<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use AppBundle\Entity\Attachment;
use AppBundle\Form\AttachmentType;
use Symfony\Component\HttpFoundation\Response;

class EditAttachmentController extends Controller
{
    /**
     * @Route("/admin/edit_document/{edit}", name="edit_documents", defaults={"edit"=0})
     */
    public function indexAction(Request $request, $edit)
    {
        $this->denyAccessUnlessGranted('ROLE_LECTURER', null, 'Unable to access this page!');
        
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        // replace this example code with whatever you need
        $att= $em->getRepository('AppBundle:Attachment')->findOneBy(array('attachment_id'=>$edit));
        if(!$att){
            return $this->redirectToRoute("add_documents");
        }
        $attachment=new Attachment();
        
        $attachment->setCourseId($att->getCourseId());
        $attachment->setAttachmentDesc($att->getAttachmentDesc());

        $form = $this->createForm(AttachmentType::class, $attachment, array('validation_groups' => array("edit")));
        
        $form->handleRequest($request);
        $update_msg="";
        $cat2="";
        $image="";
        $error=array();
        if ($form->isSubmitted() && $form->isValid()) {
            $att = $em->getRepository('AppBundle:Attachment')->findOneBy(array('attachment_id'=>$edit));
            $att->setCourseId($attachment->getCourseId());
            $att->setAttachmentDesc($attachment->getAttachmentDesc());
            
            if($attachment->getAttachment()){
                $file= $attachment->getAttachment();
                $directory="uploads";
                //$file=$pass->move($directory, $pass->getClientOriginalName());
                $ext=$file->guessExtension();
                if(!$ext){
                    $ext='bin';
                }
                $rand= rand(1, 9999999);
                $file->move($directory, $rand.'.'.$ext);
                $att->setAttachment($rand.'.'.$ext);
            }
            $em->flush();

            return $this->redirectToRoute("add_documents");
        }
        $cat2 = $em->getRepository('AppBundle:Attachment')->findOneBy(array('attachment_id'=>$edit));
        if(!$cat2){
            return $this->redirectToRoute("add_documents");
        }
        
        $em = $this->getDoctrine()->getManager();
        $att = $em->getRepository('AppBundle:Attachment')->findAll(array('course_title'=>'ASC'));

        $crs = $em->getRepository('AppBundle:Course')->findAll();
        
        return $this->render('user/edit_attachment.html.twig', array(
        'user'=>$user,'form' => $form->createView(), "update_details"=>$cat2, "errors"=>$error, "update_msg"=>$update_msg, "page_header"=>"Documents", "properties"=>$att, "attachments"=>$att, "courses"=>$crs));
    }
}
