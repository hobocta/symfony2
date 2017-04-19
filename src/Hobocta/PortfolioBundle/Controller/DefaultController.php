<?php

namespace Hobocta\PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('HoboctaPortfolioBundle:Default:index.html.twig');
    }
}
