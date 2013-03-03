<?php

namespace Gerhard\SnackbarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GerhardSnackbarBundle:Default:index.html.twig');
    }
}
