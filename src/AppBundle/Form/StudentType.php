<?php
// src/AppBundle/Form/CategoryType.php
namespace AppBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityManager;

class StudentType extends AbstractType
{
    
    protected $em;
    
    function __construct(EntityManager $em) {
        $this->em=$em;
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $cats = $this->em->getRepository('AppBundle:Session')->findAll();
        
        $cat= array('--Select Session--'=>'');
        
        foreach( $cats as $c){
            $cat[$c->getSessionTitle()]=$c->getSessionId();
        }
        
        $builder
        ->add('reg_no', TextType::class)
        ->add('session_id',  ChoiceType::class, array('choices' => $cat))
        ->add('surname', TextType::class)
        ->add('othername', TextType::class)
        ->add('firstname', TextType::class)
        ->add('mobile', TextType::class)
        ->add('email', TextType::class)
        ->add('sex', ChoiceType::class, 
            array('choices' => array('--Select Gender--'=>'', 'Male'=>'Male', 'Female'=>'Female')))
        ->add('mstatus', ChoiceType::class, 
            array('choices' => array('--Select Status--'=>'', 'Single'=>'Single', 'Married'=>'Married', 'Divorced'=>'Divorced')))
        ->add('address', TextareaType::class)
        ->add('passport', FileType::class)
        ->add('submit', SubmitType::class, array('label' => 'Add Student'))
        ->add('update', SubmitType::class, array('label' => 'Update Student'));
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
        'data_class' => 'AppBundle\Entity\Student',
        ));
    }
}