<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
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
            $builder->add('date_debut');
        if($this->secu->isGranted('ROLE_MANAGER')) {
            $builder->add('archive', CheckboxType::class, array( 'empty_data' => 'No', 'required' => false));
        }
            $builder->add('type');
            $builder->add('utilisateurs');
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
