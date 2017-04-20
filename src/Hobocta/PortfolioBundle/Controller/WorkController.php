<?php

namespace Hobocta\PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WorkController extends Controller
{
    public function indexAction($code)
    {
        return $this->render('HoboctaPortfolioBundle:Work:index.html.twig');
    }
}
