<?php

namespace FctBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class ProfType extends AstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add("dni")
                ->add("nombre")
                ->add("ape1")
                ->add("ape2")
                ->add("rol")
                ->add("nick")  
                ->add("pass")  
                ->add("tlf")
                ->add("email")  
                ->add("foto");            
    }
    
    public function configureOptions(OptionResolver $resolver)
    {
        $resolver->setDefault(array('date_class' => 'FctBundle\Entity\Profesor'));
    }
}
