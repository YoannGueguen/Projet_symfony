<?php

namespace AppBundle\Form;

use Doctrine\DBAL\Types\ArrayType;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Entity\user;

class userType extends AbstractType
{
/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\user'
        ));
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     * {@inheritdoc}
     */

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('username');
        $builder->add('email');
        $builder->add('password', PasswordType::class);
        $builder->add( 'roles', ChoiceType::class, array(
            'choices'   => array(
                'Utilisateur'   => 'ROLE_USER',
                'Manager'      => 'ROLE_MANAGER',
                'Moderateur' => 'ROLE_PREVIOUS_ADMIN',
                'Admin'      => 'ROLE_ADMIN',
            ),
            'multiple'  => true));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_user';
    }
}
