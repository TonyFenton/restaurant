<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use AppBundle\Tests\Controller\myTestHelper;


class FooterControllerTest extends WebTestCase
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
		$crawler = $this->my->checkStatusCodeUrl(200, 'GET', '/admin/footer/');
		$this->assertEquals('Stopki', $crawler->filter('body .container #heading h1')->text());
	}
	
	public function createNew($formData)
	{
		$crawler = $this->my->client->request('GET', '/admin/footer/');
		$crawler = $this->my->client->click($crawler->selectLink('Dodaj nową')->link());
		
		$this->assertRegExp('@/admin/footer/new$@', $this->my->client->getRequest()->getUri());
		
		$form = $crawler->selectButton('Utwórz')->form($formData);
		
		$this->my->client->submit($form);
		$crawler = $this->my->client->followRedirect();
		
		$this->assertEquals(1, $crawler->filter('html:contains("Stopka została utworzona")')->count());
	}
	
	public function testNew()
	{
		// view test
		$crawler = $this->my->checkStatusCodeUrl(200, 'GET', '/admin/footer/new');
		$this->assertEquals('Tworzenie stopki', $crawler->filter('body .container h1')->text());
		
		// creat a new footer test
		$this->createNew(array(
            'footer[name]'  => 'Test',
            'footer[footer]'  => 'Test',	
		));
	}
	
	public function edit($name, $formData)
	{
		$crawler = $this->my->client->request('GET', '/admin/footer/');
		
		$crawler = $this->my->client->click($crawler->selectLink($name)->link());
		
		$form = $crawler->selectButton('Zapisz')->form($formData);

        $this->my->client->submit($form);
        $crawler = $this->my->client->followRedirect();

		$this->assertEquals(1, $crawler->filter('html:contains("Zmiany zostały zapisane")')->count());
	}
	
	public function testEdit()
	{
		// view test
		$crawler = $this->my->checkStatusCodeUrlByClick(200, 'GET', '/admin/footer/', 'Test');
		$this->assertEquals('Edycja stopki', $crawler->filter('body .container h1')->text());
		
		// edit test
		$this->edit(
			'Test',
			array(
				'footer[name]'  => 'Test2',
				'footer[footer]'  => 'Test2',
			)
		);
	}
	
	public function deleteFooter($name)
	{	
		$crawler = $this->my->client->request('GET', '/admin/footer/');
		
		$crawler = $this->my->client->click($crawler->selectLink($name)->link());
		
		$this->my->client->submit($crawler->selectButton('Usuń')->form());
		$crawler = $this->my->client->followRedirect();
		
		$this->assertEquals(1, $crawler->filter('html:contains("Stopka została usunięta")')->count());
		$this->assertEquals(0, $crawler->filter('html:contains("Test2")')->count());
	}
	
	public function testDelete()
	{
		$this->deleteFooter('Test2');
	}
}











