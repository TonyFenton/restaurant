<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use AppBundle\Tests\Controller\myTestHelper;

class PageControllerTest extends WebTestCase
{
	public $my;
	
	function __construct()
	{
		parent::__construct();
		$this->my = new myTestHelper();
		// login as a user
		$this->my->login($this->my->getUser());
	}
	
	public function testIndex()
    {
		// view test
		$crawler = $this->my->checkStatusCodeUrl(200, 'GET', '/admin/page/');
		$this->assertEquals('Strony', $crawler->filter('body .container #heading h1')->text());	
	}
	
	public function createNew($formData)
	{
		$crawler = $this->my->client->request('GET', '/admin/page/');
		$crawler = $this->my->client->click($crawler->selectLink('Dodaj nową')->link());
		
		$this->assertRegExp('@/admin/page/new$@', $this->my->client->getRequest()->getUri());
		
		$form = $crawler->selectButton('Utwórz')->form($formData);
		
		$this->my->client->submit($form);
		$crawler = $this->my->client->followRedirect();
		
		$this->assertEquals(1, $crawler->filter('html:contains("Strona została utworzona")')->count());
	}
	
	public function testNew()
	{
		// view test
		$crawler = $this->my->checkStatusCodeUrl(200, 'GET', '/admin/page/new');
		$this->assertEquals('Tworzenie strony', $crawler->filter('body .container h1')->text());
		
		// creat a new page test
		$formData = array(
            'page[slug]'  => 'test',
            'page[name]'  => 'Test',
            'page[title]'  => 'Test',
            'page[description][description]'  => 'Test',
            'page[picture]'  => 'Test',
            'page[content]'  => 'Test',	
		);
		$this->createNew($formData);
		
		// unique url
		$crawler = $this->my->client->request('GET', '/admin/page/');
		$crawler = $this->my->client->click($crawler->selectLink('Dodaj nową')->link());
				
		$form = $crawler->selectButton('Utwórz')->form($formData);
		
		$crawler = $this->my->client->submit($form);
		
		$this->assertEquals(1, $crawler->filter('html:contains("Strona o podanym adresie już istnieje")')->count());
	}
	
	public function edit($name, $formData)
	{
		$crawler = $this->my->client->request('GET', '/admin/page/');
		
		$crawler = $this->my->client->click($crawler->selectLink($name)->link());
		
		$form = $crawler->selectButton('Zapisz')->form($formData);

        $this->my->client->submit($form);
        $crawler = $this->my->client->followRedirect();

		$this->assertEquals(1, $crawler->filter('html:contains("Zmiany zostały zapisane")')->count());
	}
	
	public function testEdit()
	{
		// view test
		$crawler = $this->my->checkStatusCodeUrlByClick(200, 'GET', '/admin/page/', 'Test');
		$this->assertEquals('Edycja strony', $crawler->filter('body .container h1')->text());
		
		// edit test
		$this->edit(
			'Test',
			array(
				'page[slug]'  => 'test2',
				'page[name]'  => 'Test2',
				'page[title]'  => 'Test2',
				'page[description][description]'  => '',
				'page[picture]'  => 'Test2',
				'page[content]'  => 'Test2',
			)
		);
		
		// check out the page 
		$crawler = $this->my->client->request('GET', '/test');
		
		$this->assertGreaterThan(0, $crawler->filter('#content:contains("Test2")')->count());
	}
    
	public function deletePage($name)
	{	
		$crawler = $this->my->client->request('GET', '/admin/page/');
		
		$crawler = $this->my->client->click($crawler->selectLink($name)->link());
		
		$this->my->client->submit($crawler->selectButton('Usuń')->form());
		$crawler = $this->my->client->followRedirect();
		
		$this->assertEquals(1, $crawler->filter('html:contains("Strona została usunięta")')->count());
		$this->assertEquals(0, $crawler->filter('html:contains("Test2")')->count());
	}
	
	public function testDelete()
	{
		$this->deletePage('Test2');
	}
}
