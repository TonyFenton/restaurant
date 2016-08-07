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
		
		$crawler = $client->click($crawler->selectLink('Dodaj stopkę')->link());
		
		$form = $crawler->selectButton('Create')->form(array(
            'footer[name]'  => 'Test',
            'footer[footer]'  => 'Test',
		));
		
		$client->submit($form);
		$crawler = $client->followRedirect();
		
		$this->assertEquals(1, $crawler->filter('html:contains("Stopka została utworzona")')->count());
		
		// edit the footer
		$crawler = $client->request('GET', '/admin/footer/');
		
		$crawler = $client->click($crawler->selectLink('Test')->link());
		
		$form = $crawler->selectButton('Edit')->form(array(
            'footer[name]'  => 'Test2',
            'footer[footer]'  => 'Test2',
        ));

        $client->submit($form);
        $crawler = $client->followRedirect();

		$this->assertEquals(1, $crawler->filter('html:contains("Zmiany zostały zapisane")')->count());
		
		// delete the footer
		$crawler = $client->request('GET', '/admin/footer/');
		
		$crawler = $client->click($crawler->selectLink('Test2')->link());
		
		$client->submit($crawler->selectButton('Delete')->form());
		$crawler = $client->followRedirect();
		
		$this->assertEquals(1, $crawler->filter('html:contains("Stopka została usunięta")')->count());
		$this->assertEquals(0, $crawler->filter('html:contains("Test2")')->count());
	}
	
	
     /*
    public function testCompleteScenario()
    {
        // Create a new client to browse the application
        $client = static::createClient();

        // Create a new entry in the database
        $crawler = $client->request('GET', '/admin/footer/');
        $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for GET /admin/footer/");
        $crawler = $client->click($crawler->selectLink('Create a new entry')->link());

        // Fill in the form and submit it
        $form = $crawler->selectButton('Create')->form(array(
            'appbundle_footer[field_name]'  => 'Test',
            // ... other fields to fill
        ));

        $client->submit($form);
        $crawler = $client->followRedirect();

        // Check data in the show view
        $this->assertGreaterThan(0, $crawler->filter('td:contains("Test")')->count(), 'Missing element td:contains("Test")');

        // Edit the entity
        $crawler = $client->click($crawler->selectLink('Edit')->link());

        $form = $crawler->selectButton('Update')->form(array(
            'appbundle_footer[field_name]'  => 'Foo',
            // ... other fields to fill
        ));

        $client->submit($form);
        $crawler = $client->followRedirect();

        // Check the element contains an attribute with value equals "Foo"
        $this->assertGreaterThan(0, $crawler->filter('[value="Foo"]')->count(), 'Missing element [value="Foo"]');

        // Delete the entity
        $client->submit($crawler->selectButton('Delete')->form());
        $crawler = $client->followRedirect();

        // Check the entity has been delete on the list
        $this->assertNotRegExp('/Foo/', $client->getResponse()->getContent());
    }

    */
}
