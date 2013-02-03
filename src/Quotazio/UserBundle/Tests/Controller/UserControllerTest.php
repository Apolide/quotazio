<?php

namespace Quotazio\UserBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/user/hello/Fabien');

        $this->assertGreaterThan(0, $crawler->filter('html:contains("Hello Fabien")')->count());
    }
}
