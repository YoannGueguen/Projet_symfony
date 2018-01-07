<?php

namespace AppBundle\Form;

use AppBundle\Entity\message;
use AppBundle\Entity\user;
use Doctrine\DBAL\Types\TextType;
use FOS\UserBundle\Controller\SecurityController;
use SensioLabs\Security\SecurityChecker;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
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
        $time = new \DateTime();
        //on formate la date pour être cohérent avec SQL
        $time->format('Y-m-d H:i:s');
        $builder->add('contenu',TextareaType::class);
        //$builder->add('discussion_id');

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
