<?php

namespace AppBundle\Form;

use AppBundle\DataTransformer\ProjectToIDTransformer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class noteType extends AbstractType
{

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('titre')
            ->add('description', TextareaType::class)
            ->add('date', DateType::class, array(
                'widget' => 'single_text',
                // do not render as type="date", to avoid HTML5 date pickers
                'html5' => false,
                'format' => 'MM-dd-yyyy',
                // add a class that can be selected in JavaScript
                'attr' => ['class' => 'js-datepicker'],))
            ->add('projet', HiddenType::class);
        $builder->get('projet')
            ->addModelTransformer($this->transformer);;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\note'
        ));
    }

    private $transformer;

    public function __construct(ProjectToIDTransformer  $transformer)
    {
        $this->transformer = $transformer;
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_note';
    }


}
