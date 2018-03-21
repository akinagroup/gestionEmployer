<?php

namespace SNT\ServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SNTServiceBundle:Default:index.html.twig');
    }
}
