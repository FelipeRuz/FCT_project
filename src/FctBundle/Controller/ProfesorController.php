<?php

namespace FctBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FctBundle\Entity\Profesor;

class ProfesorController extends Controller
{
    public function loginAction(Request $request)
    {
       $authenticationUtils = $this ->get("security.authentication_utils");
       $error = $authenticationUtils->getLastAuthenticationError();
       $lastUsername = $authenticationUtils->getLastUsername();
       
       return $this->render("FctBundle:Profesor:login.html.twig",array(
            "error" => $error,
            "lastUsername" => $lastUsername
            ));
    }
}
