<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
	
	/**
	 * @dataProvider get404Urls
	 */
	public function test404Urls($url)
	{
		$client = static::createClient();
		$crawler = $client->request('GET', $url);
		
		$this->assertEquals(404, $client->getResponse()->getStatusCode());
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
	
	/**
     * @dataProvider getSuccessfulUrls
     */
    public function testSuccessfulUrls($url)
	{
        $client = self::createClient();
        $client->request('GET', $url);

        $this->assertTrue($client->getResponse()->isSuccessful());
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
		
		$this->assertNotEmpty($crawler->filter('#secondaryNav li a')->text());
	}
	
	public function testMainMenu()
    {
	    $client = self::createClient();
		$crawler = $client->request('GET', '/');
		
		$this->assertNotEmpty($crawler->filter('#nav li a')->text());
		
		$this->assertEquals(1, $crawler->filter('#nav li.current')->count());	
	}
	
	public function testchildPage()
    {
	    $client = self::createClient();
		$crawler = $client->request('GET', '/menu/obiad');
		
		$this->assertNotEmpty($crawler->filter('#secondaryNav li.current a')->text());
	}
}
















