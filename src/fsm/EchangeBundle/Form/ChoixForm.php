<?php

namespace fsm\EchangeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ChoixForm extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
               $builder
              ->add('statut', 'choice', array(
    'choices' => array(
        '1' => 'Approuvée',
        '4' => 'Refusée'
    ),
    'required'    => true,
    'empty_data'  => null,
                  'label'=>'Votre décision',
                  'attr' => array('class' => 'form-control')
     ));}
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'fsm\EchangeBundle\Entity\Demande'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'fsm_echangebundle_demande';
    }
}

    
//
//     public function buildForm(FormBuilderInterface $builder, array $options) {
//       $builder
//              ->add('decision', 'choice', array(
//    'choices' => array(
//        '1' => 'Approuvée',
//        '4' => 'Refusée'
//    ),
//    'required'    => true,
//    'empty_data'  => null,
//                  'label'=>'Votre décision',
//                  'attr' => array('class' => 'form-control')
//     ));}
    
 
