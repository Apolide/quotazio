<?php

namespace Quotazio\FinderBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FinderControllerTest extends WebTestCase
{
    public function testFinderIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/finder/guest');

        $this->assertTrue($crawler->filter('html:contains("Hello guest!")')->count() > 0);
    }
}
