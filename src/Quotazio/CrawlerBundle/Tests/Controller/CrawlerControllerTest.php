<?php

namespace Quotazio\CrawlerBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CrawlerControllerTest extends WebTestCase
{
    public function testCrawlerIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/crawler/guest');

        $this->assertTrue($crawler->filter('html:contains("Hello guest!")')->count() > 0);
    }
}
