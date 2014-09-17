<?php

namespace fsm\EchangeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ObjetType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {

        $builder
                ->add('nom', 'text',array('attr'=>array('class'=>'form-control')))
                ->add('description', 'textarea',array('attr'=>array('class'=>'form-control')))
                ->add('sens', 'choice', array(
                     'choices'   => array('0' => 'Propose', '1' => 'Recherche'),
                'required'  => true,'attr'=>array('class'=>'form-control')))
                ->add('prix', 'number',array('attr'=>array('class'=>'form-control')))
                ->add('categories', 'entity', array(
                    'label' => 'Categorie de votre objet',
                    'class' => 'fsm\EchangeBundle\Entity\Categorie',
                    'multiple' => true,
                    'property' => 'getNom',
                    'attr' => array('class' => 'form-control')));
//                ->add('photos', new PhotoType()) ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'fsm\EchangeBundle\Entity\Objet'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'fsm_echangebundle_objet';
    }

    
    
    
}
