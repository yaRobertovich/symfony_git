<?php

namespace YakoffkaBlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('YakoffkaBlogBundle:Default:index.html.twig');
    }
}
