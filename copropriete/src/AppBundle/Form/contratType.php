<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class contratType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom')->add('date_signature', DateType::class, array(
            'widget' => 'single_text',
            // do not render as type="date", to avoid HTML5 date pickers
            'html5' => false,
            // add a class that can be selected in JavaScript
            'attr' => ['class' => 'js-datepicker']))
            ->add('date_fin', DateType::class, array(
            'widget' => 'single_text',
            // do not render as type="date", to avoid HTML5 date pickers
            'html5' => false,
            // add a class that can be selected in JavaScript
            'attr' => ['class' => 'js-datepicker']));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\contrat'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_contrat';
    }


}
