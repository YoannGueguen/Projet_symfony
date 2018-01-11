<?php

namespace AppBundle\Form;

use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class discussionType extends AbstractType
{
    private $secu;

    public function __construct(AuthorizationCheckerInterface $authorizationChecker)
    {
        $this->secu = $authorizationChecker;
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom');
        $builder->add('type', ChoiceType::class, array(
            'choices'  => array(
                'Public' => 'Public',
                'Privé' => 'Privé',
            )));
        $builder->add('utilisateurs');
        if($this->secu->isGranted('ROLE_PREVIOUS_ADMIN')) {
            $builder->add('archive', CheckboxType::class, array( 'data' => false, 'required' => false));
        }
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\discussion'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_discussion';
    }


}
