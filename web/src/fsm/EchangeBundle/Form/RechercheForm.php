<?php

namespace fsm\EchangeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RechercheForm extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
        ->add('name', 'text', array( 'required' => false, 'label' => 'Votre Recherche',
        'attr' => array('class' => 'form-control')))
        ->add('categories', 'entity', array(
        'required' => false,
        //'expanded' => true,
        'empty_value' => 'Choisissez une option',
        'label' => 'Categorie de votre objet',
        'class' => 'fsm\EchangeBundle\Entity\Categorie',
        'multiple' => false,
        'property' => 'getNom',
        'attr' => array('class' => 'form-control')))
        ;
    }

    public function getName() {
        return 'objetrecherche';
    }

}
