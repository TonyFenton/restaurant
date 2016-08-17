<?php

namespace AppBundle\Tests\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testDashboard()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admin');
    }

}
