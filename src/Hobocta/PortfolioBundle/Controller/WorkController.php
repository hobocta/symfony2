<?php

namespace Hobocta\PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WorkController extends Controller
{
    public function showAction($code)
    {
        $em = $this->getDoctrine()->getManager();

        $work = $em->getRepository('HoboctaPortfolioBundle:Work')->findOneBy(array('code' => $code));

        if (!$work) {
            throw $this->createNotFoundException('Unable to find work');
        }

        return $this->render('HoboctaPortfolioBundle:Work:show.html.twig', array('work' => $work));
    }
}
