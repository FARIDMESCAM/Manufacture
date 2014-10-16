<?php

namespace fsm\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;
use fsm\EchangeBundle\Form\AdressType;
use fsm\EchangeBundle\Entity\Adress;

class RegistrationFormType extends BaseType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        parent::buildForm($builder, $options);
        $builder
        ->add('username', null,
        array(
        'label' => 'form.username', 'translation_domain' => 'FOSUserBundle',
        'attr' => array('class' => 'form-control'))
        )
        ->add('email', 'email',
        array('label' => 'form.email', 'translation_domain' => 'FOSUserBundle',
        'attr' => array('class' => 'form-control')))
        ->add('plainPassword', 'repeated', array(
        'type' => 'password',
        'options' => array('translation_domain' => 'FOSUserBundle'),
        'first_options' => array('label' => 'form.password',
        'attr' => array('class' => 'form-control')),
        'second_options' => array('label' => 'confirmation',
        'attr' => array('class' => 'form-control')),
        'invalid_message' => 'fos_user.password.mismatch',
        ))
        ->add('adresse', 'entity', array(
        'label' => 'Votre adresse',
        'class' => 'fsm\EchangeBundle\Entity\Adress',
        'multiple' => FALSE,
        'property' => 'getLibelle',
        'attr' => array('class' => 'form-control')))
        ->add('telephone', 'text', array('label' => "Votre téléphone", 'attr' => array('class' => 'form-control')))


        ;
    }

    public function getName() {
        return 'fsm_user_registration';
    }

}
