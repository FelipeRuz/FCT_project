<?php

namespace FctBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FctBundle\Entity\Profesor;
use FctBundle\Form\ProfesorType;

class ProfesorController extends Controller
{
    public function loginAction(Request $request)
    {
       $authenticationUtils = $this ->get("security.authentication_utils");
       $error = $authenticationUtils->getLastAuthenticationError();
       $lastUsername = $authenticationUtils->getLastUsername();
       
       $profesor = new Profesor();
       $form = $this->createForm(ProfesorType::class,$profesor);
       
       $form->handleRequest($request);
       
       if ($form->isValid()) {
           $profesor = new Profesor();
           
           $profesor ->setDni($form->get("dni")->getData());
           $profesor ->setNombre($form->get("nombre")->getData());
           $profesor ->setApe1($form->get("ape1")->getData());
           $profesor ->setApe2($form->get("ape2")->getData());
           $profesor ->setRol("PROFESOR");
           $profesor ->setNick($form->get("nick")->getData());
           
           //BLOQUE PARA LA CONTRASEÑA ENCRIPTADA
           $factory = $this->get("security.encoder_factory");
           $encoder = $factory->getEncoder($profesor);
           $password = $encoder->encodePassword($form->get("pass")->getData());
           $profesor->setPassword($password);
           //////////////////////////////////////
           
           $profesor ->setTlf($form->get("tlf")->getData());
           $profesor ->setEmail($form->get("email")->getData());
           $profesor ->setFoto(null);
           
           $em = $this->getDoctrine()->getManager();
           $em->persist($profesor);
           $flush = $em->flush();
           
           if ($flush == null) {
                $status = "El profesor se ha registrado correctamente"; 
           }
            else{
           $status= "Error: El profesor no se ha registrado correctamente";
            }    
       }
       else{
           $status = "Error: El profesor no se registro correctamente";
       }
   

       return $this->render("FctBundle:Profesor:login.html.twig",array(
            "error" => $error,
            "lastUsername" => $lastUsername,
            "form" => $form->createView()
            ));
    }
}
