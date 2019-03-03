<?php
// src/AppBundle/Form/AttachmentType.php
namespace AppBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Doctrine\ORM\EntityManager;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AttachmentType extends AbstractType
{
    
    protected $em;
    
    function __construct(EntityManager $em) {
        $this->em=$em;
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        //$em = $entity_manager->getDoctrine()->getManager();
        $cats = $this->em->getRepository('AppBundle:Course')->findAll();
        
        $cat= array('--Select Course--'=>'');
        
        foreach( $cats as $c){
            $cat[$c->getCourseCode()]=$c->getCourseId();
        }
        
        $builder
        ->add('course_id', ChoiceType::class, array('choices' => $cat))        
        ->add('attachment', FileType::class)
        ->add('attachment_desc', TextareaType::class)
        ->add('submit', SubmitType::class, array('label' => 'Add Document'))
        ->add('update', SubmitType::class, array('label' => 'Update Document'));
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
        'data_class' => 'AppBundle\Entity\Attachment',
        ));
    }
}