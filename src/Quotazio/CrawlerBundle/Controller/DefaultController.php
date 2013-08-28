<?php

namespace Quotazio\CrawlerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('QuotazioCrawlerBundle:Default:index.html.twig', array('name' => $name));
    }
}
