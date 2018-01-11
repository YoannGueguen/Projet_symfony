<?php

namespace AppBundle\Form;

use AppBundle\DataTransformer\FilePathToFileTransformer;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class projetType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('titre')
            ->add('description', TextareaType::class)
            ->add('statut', ChoiceType::class, array(
                'choices'  => array(
                    'en discussion' => 'en discussion',
                    "en attente d'exécution" => "en attente d'execution",
                    "exécuté" => "exécuté",
                )))
            ->add('date_debut', DateType::class, array(
                'widget' => 'single_text',
                // do not render as type="date", to avoid HTML5 date pickers
                'html5' => false,
                'format' => 'MM-dd-yyyy',
                // add a class that can be selected in JavaScript
                'attr' => ['class' => 'js-datepicker']))
            ->add('date_fin', DateType::class, array(
                'widget' => 'single_text',
                // do not render as type="date", to avoid HTML5 date pickers
                'html5' => false,
                'format' => 'MM-dd-yyyy',
                // add a class that can be selected in JavaScript
                'attr' => ['class' => 'js-datepicker']))
            ->add('discu_id')
            ->add('pj_id', FileType::class, array('required'=>false))
            ->add('utilisateurs')
            ->get('pj_id')
            ->addModelTransformer($this->transformer);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\projet'
        ));
    }

    private $transformer;

    public function __construct(FilePathToFileTransformer $transformer)
    {
        $this->transformer = $transformer;
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_projet';
    }


}
