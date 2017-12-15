<?php

namespace AppBundle\Form;

use Doctrine\DBAL\Types\TextType;
use FOS\UserBundle\Controller\SecurityController;
use SensioLabs\Security\SecurityChecker;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Csrf\TokenStorage\TokenStorageInterface;

class messageType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    private $secu;

    public function __construct(AuthorizationCheckerInterface $authorizationChecker)
    {
        $this->secu = $authorizationChecker;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
            $builder->add('date');
            $builder->add('contenu');
            if($this->secu->isGranted('ROLE_ADMIN')) {
                $builder->add('archive', CheckboxType::class, array( 'empty_data' => 'No'));
            }
            $builder->add('user_id');
            $builder->add('discussion_id');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\message'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_message';
    }


}
