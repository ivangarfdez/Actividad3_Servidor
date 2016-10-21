<?php

namespace PacoLocoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function indexAction()
    {
        return $this->render('PacoLocoBundle:Default:index.html.twig');
    }

    public function mensageAction()
    {
        return $this->render('PacoLocoBundle:Default:msg.html.twig');
    }

    public function mensageTextoAction($texto)
    {
        return $this->render('PacoLocoBundle:Default:msgTexto.html.twig',array('texto'=>$texto));
    }
}
