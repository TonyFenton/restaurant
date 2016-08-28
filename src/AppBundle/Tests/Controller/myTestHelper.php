<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class myTestHelper extends WebTestCase
{
	public $client;
	
	function __construct()
	{
		$this->client = static::createClient();
	}
	
	public function getAdmin() 
	{
		$formData = array(
			'_username' => 'krzysztof',
			'_password' => 'jarzyna',
		);
		return $formData;
	}
	
	public function getUser() 
	{
		$formData = array(
			'_username' => 'kuba',
			'_password' => 'brenner',
		);
		return $formData;
	}
	
    public function login($formData)
    {
		$crawler = $this->client->request('GET', '/login');
		
		$form = $crawler->selectButton('Zaloguj')->form($formData);
		
		$this->client->submit($form);
    }
	
	public function checkStatusCodeUrl($statusCode, $method, $url) 
	{
		$crawler = $this->client->request($method ,$url);
		
		$this->assertEquals($statusCode, $this->client->getResponse()->getStatusCode(), "Unexpected HTTP status code for $method $url");
		
		return $crawler;
	}
	
	public function checkStatusCodeUrls($statusCode, $urls) 
	{
		foreach ($urls as $url) {
			$this->client->request('GET',$url);
			
			$this->assertEquals($statusCode, $this->client->getResponse()->getStatusCode(), "Unexpected HTTP status code for GET $url");
		}
	}
	
	public function checkStatusCodeUrlByClick($statusCode, $method, $url, $name)  
	{
		$crawler = $this->client->request($method, $url);
		
		$crawler = $this->client->click($crawler->selectLink($name)->link());
		
		$this->assertEquals($statusCode, $this->client->getResponse()->getStatusCode(), "Unexpected HTTP status code for $method $url");
		
		return $crawler;		
	}
}