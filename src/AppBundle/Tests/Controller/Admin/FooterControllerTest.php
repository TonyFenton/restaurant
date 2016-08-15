<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FooterControllerTest extends WebTestCase
{
	
	public function testCompleteScenario()
    {
		$client = static::createClient();
		
		// creat a footer
		$crawler = $client->request('GET', '/admin/footer/');
		
		$this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for GET /admin/footer/");
		
		$crawler = $client->click($crawler->selectLink('Dodaj nową')->link());
		
		$form = $crawler->selectButton('Utwórz')->form(array(
            'footer[name]'  => 'Test',
            'footer[footer]'  => 'Test',
		));
		
		$client->submit($form);
		$crawler = $client->followRedirect();
		
		$this->assertEquals(1, $crawler->filter('html:contains("Stopka została utworzona")')->count());
		
		// edit the footer
		$crawler = $client->request('GET', '/admin/footer/');
		
		$crawler = $client->click($crawler->selectLink('Test')->link());
		
		$form = $crawler->selectButton('Zapisz')->form(array(
            'footer[name]'  => 'Test2',
            'footer[footer]'  => 'Test2',
        ));

        $client->submit($form);
        $crawler = $client->followRedirect();

		$this->assertEquals(1, $crawler->filter('html:contains("Zmiany zostały zapisane")')->count());
		
		// delete the footer
		$crawler = $client->request('GET', '/admin/footer/');
		
		$crawler = $client->click($crawler->selectLink('Test2')->link());
		
		$client->submit($crawler->selectButton('Usuń')->form());
		$crawler = $client->followRedirect();
		
		$this->assertEquals(1, $crawler->filter('html:contains("Stopka została usunięta")')->count());
		$this->assertEquals(0, $crawler->filter('html:contains("Test2")')->count());
	}
}
