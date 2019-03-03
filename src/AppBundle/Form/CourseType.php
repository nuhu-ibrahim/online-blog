<?php
// src/AppBundle/Form/CategoryType.php
namespace AppBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CourseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('course_title', TextType::class)
        ->add('course_code', TextType::class)
        ->add('course_level',  ChoiceType::class, array('choices' => array('--Select Level--'=>'', '100Level'=>'100Level', '200Level'=>'200Level', '300Level'=>'300Level', '400Level'=>'400Level')))
        ->add('submit', SubmitType::class, array('label' => 'Add Course'))
        ->add('update', SubmitType::class, array('label' => 'Update Course'));
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
        'data_class' => 'AppBundle\Entity\Course',
        ));
    }
}