<?php

namespace Site\VisitingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class VisitingController extends Controller
{
    public function indexAction()
    {

        return $this->render('SiteVisitingBundle:Visiting:index.html.twig');
    }
}
