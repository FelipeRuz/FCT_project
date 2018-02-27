<?php

namespace FctBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ProfesorType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dni',TextType::class, array("label"=>"DNI","required"=>"required", "attr" => array(
                "class" => "form-titulo form-control",
            )))
            ->add('nombre',TextType::class, array("label"=>"Nombre","required"=>"required", "attr" => array(
                "class" => "form-nombre form-control",
            )))
            ->add('ape1',TextType::class, array("label"=>"1ºApellido","required"=>"required", "attr" => array(
                "class" => "form-ape1 form-control",
            )))
            ->add('ape2',TextType::class, array("label"=>"2ºApellido","required"=>"required", "attr" => array(
                "class" => "form-ape2 form-control",
            )))
            ->add('nick',TextType::class, array("label"=>"Nick","required"=>"required", "attr" => array(
                "class" => "form-nick form-control",
            )))
            ->add('pass',PasswordType::class, array("label"=>"Contraseña","required"=>"required", "attr" => array(
                "class" => "form-ape1 form-control",
            )))
            ->add('tlf',TextType::class, array("label"=>"TLF","required"=>"required", "attr" => array(
                "class" => "form-ape1 form-control",
            )))
            ->add('email',EmailType::class, array("label"=>"Email","required"=>"required", "attr" => array(
                "class" => "form-ape1 form-control",
            )))
                
            ->add('Guardar',SubmitType::class, array("attr" => array(
                "class" => "form-submit btn btn-success",
            )));
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FctBundle\Entity\Profesor'
        ));
    }
}
