<?php

namespace AppBundle\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class DefaultController extends Controller
{
    /**
     * @Route("/admin", name="admin_default_dashboard")
     * @Method("GET")
     */
    public function dashboardAction()
    {	
        return $this->render('admin/default/index.html.twig', array());
    }
}
