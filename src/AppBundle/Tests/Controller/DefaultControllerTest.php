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
				'/o-nas',
				'/menu/obiad',
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
	
	
	   /*

	public function test404Url($url)
	{
		$crawler = $this->my->client->request('GET', $url);
		
		$this->assertEquals(404, $crawler->getResponse()->getStatusCode());
	}
	
	// nie istniejące strony
	public function get404Urls()
    {
        return array(
            array('/hdfmdfnxcf'),
            array('/obiad'),
            array('/kjhgskdj/sdfhgkjsfg'),
            array('/menu/sdfhgkjsfg'),
            array('/hgskdj/sdfhgkjsdh/ajrtnclje'),
        );
    }
	

    public function testSuccessfulUrls($url)
	{
        $crawler = $this->my->client->request('GET', $url);

        $this->assertTrue($crawler->getResponse()->isSuccessful());
	}
	
	// istniejace strony
	public function getSuccessfulUrls()
    {
        return array(
            array('/'),
            array('/o-nas'),
            array('/menu'),
            array('/menu/obiad'),
        );
	}
	
	public function testMainPage()
    {
	    $client = self::createClient();
		$crawler = $client->request('GET', '/');
		
		$this->assertNotEmpty($crawler->filter('body #content h1')->text());
		
		//parentPage
		$crawler = $client->request('GET', '/menu');
		
		$this->assertNotEmpty($crawler->filter('#secondary_nav li a')->text());
	}
	
	public function testMainMenu()
    {
	    $client = self::createClient();
		$crawler = $client->request('GET', '/');
		
		$this->assertNotEmpty($crawler->filter('#main_nav li a')->text());
		
		$this->assertEquals(1, $crawler->filter('#main_nav li.active')->count());	
	}
	
	public function testChildPage()
    {
	    $client = self::createClient();
		$crawler = $client->request('GET', '/menu/obiad');
		
		$this->assertNotEmpty($crawler->filter('#secondary_nav li.active a')->text());
	}
	*/
}
















