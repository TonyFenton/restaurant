<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use AppBundle\Tests\Controller\myTestHelper;

class DefaultControllerTest extends WebTestCase
{
	
	public $my;
	
	function __construct()
	{
		parent::__construct();
		$this->my = new myTestHelper();
	}
	
	public function test404checkStatusCodeUrls() 
	{
		$this->my->checkStatusCodeUrls(
			404, 
			array(
				'/hdfmdfnxcf',
				'/obiad',
				'/kjhgskdj/sdfhgkjsfg',
				'/menu/sdfhgkjsfg',
				'/hgskdj/sdfhgkjsdh/ajrtnclje',
			)
		);
	}
	
	public function test200checkStatusCodeUrls() 
	{
		$this->my->checkStatusCodeUrls(
			200, 
			array(
				'/menu/obiad',
				'/menu/kolacja',
				'/lokalizacja',
			)
		);
	}
	
	public function testMainPage()
    {
		$crawler = $this->my->checkStatusCodeUrl(200, 'GET', '/');
		$this->assertNotEmpty($crawler->filter('body #content h1')->text());
		
		//parentPage
		$crawler = $this->my->checkStatusCodeUrl(200, 'GET', '/menu');
		$this->assertNotEmpty($crawler->filter('body #secondary_nav li a')->text());
	}
	
	public function testMainMenu()
    {
		$crawler = $this->my->client->request('GET', '/');

		$this->assertEquals(1, $crawler->filter('#main_nav li.active')->count());
		
		$this->assertNotEmpty($crawler->filter('#main_nav li a')->text());
	}	
	
	public function testChildPage()
    {
		$crawler = $this->my->checkStatusCodeUrl(200,'GET', '/menu/obiad');
		
		$this->assertNotEmpty($crawler->filter('body #secondary_nav li.active a')->text());
	}
}