<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use AppBundle\Tests\Controller\myTestHelper;

class UserControllerTest extends WebTestCase
{
	public $my;
	
	function __construct()
	{
		parent::__construct();
		$this->my = new myTestHelper();
		// login as a admin
		$this->my->login($this->my->getAdmin());
	}
	
	public function testIndex()
    {
		// view test
		$crawler = $this->my->checkStatusCodeUrl(200, 'GET', '/admin/user/');
		$this->assertEquals('Użytkownicy', $crawler->filter('body .container #heading h1')->text());	
		
		// access test
		$this->my->login($this->my->getUser());
		
		$this->my->checkStatusCodeUrl(403, 'GET', '/admin/user/');
	}
	
	public function createNew($formData)
	{
		$crawler = $this->my->client->request('GET', '/admin/user/');
		$crawler = $this->my->client->click($crawler->selectLink('Dodaj nowego')->link());
		
		$this->assertRegExp('@/admin/user/registration$@', $this->my->client->getRequest()->getUri());
		
		$form = $crawler->selectButton('Zarejestruj')->form($formData);
		
		$this->my->client->submit($form);
		$crawler = $this->my->client->followRedirect();
		
		$this->assertEquals(1, $crawler->filter('html:contains("Stworzono użytkownika")')->count());
	}
	
	public function testNew()
	{
		// view test
		$crawler = $this->my->checkStatusCodeUrl(200, 'GET', '/admin/user/registration');
		$this->assertEquals('Rejestrowanie', $crawler->filter('body .container h1')->text());
		
		// creat a new user test
		$formData = array(
            'fos_user_registration_form[username]'  => 'test',
            'fos_user_registration_form[email]'  => 'test@test.com',
            'fos_user_registration_form[plainPassword][first]'  => 'Test',
            'fos_user_registration_form[plainPassword][second]'  => 'Test',
		);
		$this->createNew($formData);
		
		// unique user
		$crawler = $this->my->client->request('GET', '/admin/user/');
		$crawler = $this->my->client->click($crawler->selectLink('Dodaj nowego')->link());
		
		$form = $crawler->selectButton('Zarejestruj')->form($formData);
		
		$crawler = $this->my->client->submit($form);
		
		$this->assertEquals(1, $crawler->filter('html:contains("Ta nazwa użytkownika jest już zajęta")')->count());
	}

	public function enabled($name, $button, $message)
	{
		$crawler = $this->my->client->request('GET', '/admin/user/');
		
		$crawler = $crawler->filter("tr:contains($name)");
		
		$this->my->client->submit($crawler->selectButton($button)->form());
		$crawler = $this->my->client->followRedirect();
		
		$this->assertEquals(1, $crawler->filter("html:contains($message)")->count());
	}
		
	public function testEnabled()
	{
		$this->Enabled('test', 'Dezaktywuj', 'Użytkownik został dezaktywowany');
		$this->Enabled('test', 'Aktywuj', 'Użytkownik został aktywowany');
	}
	
	public function deleteUser($name)
	{	
		$crawler = $this->my->client->request('GET', '/admin/user/');

		$crawler = $crawler->filter("tr:contains($name)");
		
		$this->my->client->submit($crawler->selectButton('Usuń')->form());
		$crawler = $this->my->client->followRedirect();
		
		$this->assertEquals(1, $crawler->filter('html:contains("Użytkownik został usunięty")')->count());
		$this->assertEquals(0, $crawler->filter("html:contains($name)")->count());

	}
	
	public function testDelete()
	{
		$this->deleteUser('test');
	}
}