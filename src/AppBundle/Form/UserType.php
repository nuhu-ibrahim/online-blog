<?php
// src/AppBundle/Form/UserType.php
namespace AppBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Doctrine\ORM\EntityManager;

use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    protected $em;
    
    function __construct(EntityManager $em) {
        $this->em=$em;
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('password', PasswordType::class)
        ->add('newPassword', PasswordType::class, array('mapped' => false))
        ->add('cPassword', PasswordType::class, array('mapped' => false))
        ->add('submit', SubmitType::class, array('label' => 'Update Password'));
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
        'data_class' => 'AppBundle\Entity\User',
        ));
    }
}