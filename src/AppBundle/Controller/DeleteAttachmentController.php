<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Attachment;
class DeleteAttachmentController extends Controller
{
    /**
     * @Route("/admin/delete_attachment/{delete}", name="delete_attachment", defaults={"delete"=0})
     */
    public function indexAction(Request $request, $delete)
    {
        $this->denyAccessUnlessGranted('ROLE_LECTURER', null, 'Unable to access this page!');
        
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        // replace this example code with whatever you need
        $update_msg="";
        $cat2="";
        $error=array();
        
        $cat2 = $em->getRepository('AppBundle:Attachment')->findOneBy(array('attachment_id'=>$delete));
        if($cat2){
            $em->remove($cat2);
            $em->flush();
        }
        
        $cat3 = $em->getRepository('AppBundle:Group')->findOneBy(array('attachment_id'=>$delete));
        $group_id = 0;
        if($cat3){
            $group_id = $cat3->getGroupId();
            $em->remove($cat3);
            $em->flush();
        }
        $cat4 = $em->getRepository('AppBundle:GroupMessage')->findBy(array('group_id'=>$group_id));
        if($cat4){
            foreach($cat4 as $cat){
                $em->remove($cat);
                $em->flush();
            }
        }
     
        return $this->redirectToRoute("add_documents");
    }
}
