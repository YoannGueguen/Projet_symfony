<?php

namespace AppBundle\Form;

use AppBundle\DataTransformer\FilePathToFileTransformer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class versementType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('montant')
            ->add('date', DateType::class, array(
        'widget' => 'single_text',
        // do not render as type="date", to avoid HTML5 date pickers
                'html5' => false,
                'format' => 'MM-dd-yyyy',
                // add a class that can be selected in JavaScript
                'attr' => ['class' => 'js-datepicker']))
            ->add('type', ChoiceType::class, array(
                'choices' => array(
                    'Cheque' => 'Cheque',
                    'Virement' => 'Virement',
                )))
            ->add('pj_id', FileType::class, array(
                "required"=>false
            ))
            ->add('user_id')
            ->add('charge_id')
        ->get('pj_id')
        ->addModelTransformer($this->transformer);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\versement'
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
        return 'appbundle_versement';
    }


}
