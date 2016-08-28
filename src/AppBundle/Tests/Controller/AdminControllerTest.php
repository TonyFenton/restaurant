<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use AppBundle\Tests\Controller\myTestHelper;

class AdminControllerTest extends WebTestCase
{
	public $my;
	
	function __construct()
	{
		parent::__construct();
		$this->my = new myTestHelper();
		// login as a user
		$this->my->login($this->my->getUser());
	}
	
    public function testDashboard()
    {
		// view test
		$crawler = $this->my->checkStatusCodeUrl(200, 'GET', '/admin');
		$this->assertEquals('Panel administracyjny', $crawler->filter('body .container h1')->text());
    }
}