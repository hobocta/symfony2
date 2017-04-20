<?php

namespace Hobocta\PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WorkController extends Controller
{
    public function showAction($code)
    {
        return $this->render('HoboctaPortfolioBundle:Work:show.html.twig');
    }
}
