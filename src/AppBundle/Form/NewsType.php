<?php
// src/AppBundle/Form/CategoryType.php
namespace AppBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NewsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('news_title', TextType::class)
        ->add('news_content', TextareaType::class)
        ->add('news_status',  ChoiceType::class, array('choices' => array('--Select Status--'=>'', 'Drafted'=>'Drafted', 'Published'=>'Published')))
        ->add('submit', SubmitType::class, array('label' => 'Add News'))
        ->add('update', SubmitType::class, array('label' => 'Update News'));
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
        'data_class' => 'AppBundle\Entity\News',
        ));
    }
}