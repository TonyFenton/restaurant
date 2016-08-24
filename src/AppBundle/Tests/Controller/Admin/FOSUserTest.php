<?php

namespace AppBundle\Tests\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use AppBundle\Tests\Controller\myTestHelper;

class FOSUserTest extends WebTestCase
{
	public $my;
	
	function __construct()
	{
		parent::__construct();
		$this->my = new myTestHelper();
		// login as a user
		$this->my->login($this->my->getUser());
	}

	public function testLogin() 
	{
		$crawler = $this->my->checkStatusCodeUrl(200, 'GET', '/login');
		$this->assertEquals('Logowanie', $crawler->filter('body #form-login h1')->text());
	}
	
	public function testMyAccountShow() 
	{
		$crawler = $this->my->checkStatusCodeUrl(200, 'GET', '/admin/profile/show');
		$this->assertEquals('Moje konto', $crawler->filter('body .container h1')->text());
	}
	
	public function myAccountEdit($formData) 
	{
		// view test
		$crawler = $this->my->checkStatusCodeUrl(200, 'GET', '/admin/profile/edit');
		$form = $crawler->selectButton('Edytuj użytkownika')->form($formData);
		
		$this->my->client->submit($form);
		$crawler = $this->my->client->followRedirect();
		
		$this->assertEquals(1, $crawler->filter('html:contains("Zapisano zmiany w profilu")')->count());
	}
	
	public function testMyAccountEdit() 
	{
		// view test
		$crawler = $this->my->checkStatusCodeUrl(200, 'GET', '/admin/profile/edit');
		$this->assertEquals('Edycja', $crawler->filter('body .container h1')->text());
		
		$user = $this->my->getUser();
		
		$this->myAccountEdit(array(
				'fos_user_profile_form[username]'  => 'test',
				'fos_user_profile_form[current_password]'  => $user['_password']
			)
		);
		
		$this->myAccountEdit(array(
				'fos_user_profile_form[username]'  => $user['_username'],
				'fos_user_profile_form[current_password]'  => $user['_password']
			)
		);
	}
	
	public function myAccountPasswordChange($formData) 
	{
		// view test
		$crawler = $this->my->checkStatusCodeUrl(200, 'GET', '/admin/profile/password-change');
		$form = $crawler->selectButton('Zmień hasło')->form($formData);
		
		$this->my->client->submit($form);
		$crawler = $this->my->client->followRedirect();
		
		$this->assertEquals(1, $crawler->filter('html:contains("Hasło zostało zmienione")')->count());
	}
	
	public function testMyAccountPasswordChange() 
	{
		// view test
		$crawler = $this->my->checkStatusCodeUrl(200, 'GET', '/admin/profile/edit');
		$this->assertEquals('Edycja', $crawler->filter('body .container h1')->text());
		
		$user = $this->my->getUser();
		
		$this->myAccountPasswordChange(array(
			'fos_user_change_password_form[current_password]'  => $user['_password'],
			'fos_user_change_password_form[new][first]'  => 'test',
			'fos_user_change_password_form[new][second]'  => 'test'
		));
		
		$this->myAccountPasswordChange(array(
			'fos_user_change_password_form[current_password]'  => 'test',
			'fos_user_change_password_form[new][first]'  => $user['_password'],
			'fos_user_change_password_form[new][second]'  => $user['_password'],
		));

	}
	
	public function testAuthenticatedAnonymouslyStatusCodeUrls() 
	{
		$this->my->client->request('GET', '/logout');
		
		$this->my->checkStatusCodeUrls(
			200, 
			array(
				'/password-reset',
			)
		);
		
		$this->my->checkStatusCodeUrls(
			302,
			array(
				'/admin/profile/password-change',
				'/admin/profile/show',
				'/admin/profile/edit',
				'/admin/user/registration',
			)
		);
	}
}





















