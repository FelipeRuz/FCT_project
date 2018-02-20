<?php

namespace FctBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function loginAction(Request $request)
    {
       $authenticationUtils = $this=>get("security.authentication_utils");
       $error = $authenticationUtils->getLastAuthenticationError();
       $lastUsername = $authenticationUtils->getLastUsername();
       
       return $this->render("FctBundle:profesor:login.html.twig",array(
            "error" => $error,
            "lastUsername" => $lastUsername
            ));
    }
}
