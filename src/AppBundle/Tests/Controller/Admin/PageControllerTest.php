<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PageControllerTest extends WebTestCase
{
    
	public function testCompleteScenario()
    {
	    $client = static::createClient();
		
		// creat a page
		$crawler = $client->request('GET', '/admin/page/');
		
		$this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for GET /admin/page/");
		
		$crawler = $client->click($crawler->selectLink('Dodaj nową')->link());
		
		$form = $crawler->selectButton('Utwórz')->form(array(
            'page[slug]'  => 'test',
            'page[name]'  => 'Test',
            'page[title]'  => 'Test',
            'page[description][description]'  => 'Test',
            'page[picture]'  => 'Test',
            'page[content]'  => 'Test',
		));
		
		$client->submit($form);
		$crawler = $client->followRedirect();
		
		$this->assertEquals(1, $crawler->filter('html:contains("Strona została utworzona")')->count());
		
		// not unique url
		$crawler = $client->request('GET', '/admin/page/');
		$crawler = $client->click($crawler->selectLink('Dodaj nową')->link());
		
		$form = $crawler->selectButton('Utwórz')->form(array(
            'page[slug]'  => 'test',
            'page[name]'  => 'Test',
            'page[title]'  => 'Test',
            'page[description][description]'  => 'test',
            'page[picture]'  => 'Test',
            'page[content]'  => 'Test',
		));
		
		$crawler = $client->submit($form);

		$this->assertEquals(1, $crawler->filter('html:contains("Strona o podanym adresie już istnieje")')->count());
		
		// edit the page
		$crawler = $client->request('GET', '/admin/page/');
		
		$crawler = $client->click($crawler->selectLink('Test')->link());
		
		$form = $crawler->selectButton('Zapisz')->form(array(
            'page[slug]'  => 'test2',
            'page[name]'  => 'Test2',
            'page[title]'  => 'Test2',
            'page[description][description]'  => '',
            'page[picture]'  => 'Test2',
            'page[content]'  => 'Test2',
        ));

        $client->submit($form);
        $crawler = $client->followRedirect();

		$this->assertEquals(1, $crawler->filter('html:contains("Zmiany zostały zapisane")')->count());
		
		// check out the page 
		$crawler = $client->request('GET', '/test');
		
		$this->assertGreaterThan(0, $crawler->filter('#content:contains("Test2")')->count());
		
		// delete the page
		$crawler = $client->request('GET', '/admin/page/');
		
		$crawler = $client->click($crawler->selectLink('Test2')->link());
		
		$client->submit($crawler->selectButton('Usuń')->form());
		$crawler = $client->followRedirect();
		
		$this->assertEquals(1, $crawler->filter('html:contains("Strona została usunięta")')->count());
		$this->assertEquals(0, $crawler->filter('html:contains("Test2")')->count());
	}
}
