<?php

namespace fsm\EchangeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DemandeType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('debut', 'date', array(
                    'widget' => 'single_text',
                    'format' => 'yyyy-MM-dd', 'attr' => array('class' => 'form-control')
                        )
                )
                ->add('fin', 'date', array(
                    'widget' => 'single_text',
                    'format' => 'yyyy-MM-dd', 'attr' => array('class' => 'form-control')
                        )
                )
                ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'fsm\EchangeBundle\Entity\Demande'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'fsm_echangebundle_demande';
    }

}
