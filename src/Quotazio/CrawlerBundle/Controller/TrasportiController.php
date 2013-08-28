<?php

namespace Quotazio\CrawlerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\DomCrawler\Crawler;
use Goutte\Client;

class TrasportiController extends Controller
{
    public function indexAction($name)
    {
        /* WORKS !!! */
        $client = new Client();
        
        // TODO Imposta UserAgent 
        //$firefox_agent = 'Mozilla/6.0 (Windows NT 6.2; WOW64; rv:16.0.1) Gecko/20121011 Firefox/16.0.1';
        //$client->setHeader('User-Agent', $firefox_agent);
        $crawler = $client->request('GET', 'http://symfony.com/');

        // TODO CHECK IF SITE IS ASKING FOR COOCKIES
        // https://github.com/Behat/Mink/issues/161
        // http://stackoverflow.com/questions/tagged/goutte?sort=active&pagesize=50
        // http://stackoverflow.com/questions/13210140/how-can-i-scrape-website-content-in-php-from-a-website-that-requires-a-cookie-lo
        // 

        
        // $crawler = $client->request('GET', 'http://quotazio.lo/app_dev.php/finder/trasporti');

        // FUnziona, ma NON in localhost
        $nodes = $crawler->filter('p');
        if ($nodes->count())
        {
            die(sprintf("Lista P: %s\n", $nodes->text()));
        }
        die;
        /* END WORKS!!! */

        //print $crawler->filterXPath('descendant-or-self::body/p')->text();
        /*
        $crawler = $crawler->filter('p');
        var_dump($crawler);die;
        foreach ($crawler as $domElement) {

            //print $crawler->filterXPath('descendant-or-self::body/p')->text();
            print "<br> - ".$domElement->text();
        }
        die("FINITO!");
        */
        
        
        /*
        // GOUTTE WORKING EXAMPLES
        // Click on links:
        $link = $crawler->selectLink('Plugins')->link();
        $crawler = $client->click($link);

        //Submit forms:
        $form = $crawler->selectButton('sign in')->form();
        $crawler = $client->submit($form, array('signin[username]' => 'fabien', 'signin[password]' => 'xxxxxx'));

        //Extract data:
        $nodes = $crawler->filter('.error_list');
        if ($nodes->count())
        {
          die(sprintf("Authentification error: %s\n", $nodes->text()));
        }

        printf("Nb tasks: %d\n", $crawler->filter('#nb_tasks')->text());
         */
        return $this->render('QuotazioCrawlerBundle:Trasporti:index.html.twig', array('name' => $name));
    }
}
