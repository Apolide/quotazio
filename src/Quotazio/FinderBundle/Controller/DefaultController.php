<?php

namespace Quotazio\FinderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('QuotazioFinderBundle:Default:index.html.twig', array('name' => $name));
    }
}
