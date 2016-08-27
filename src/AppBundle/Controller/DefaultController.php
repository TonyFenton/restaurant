<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use AppBundle\Entity\Page;

class DefaultController extends Controller
{
    /**
     * @Route("/{slug}", Defaults={"slug": "homepage"}, name="mainPage")
	 * @Method({"GET"})
     */
    public function mainPageAction($slug)
    {
		$page = $this->getDoctrine()
			->getRepository(Page::class)
			->findOneBy(array(
				'slug' => $slug,
				'parent' => null,
		));
		
		if (!$page) {
			throw $this->createNotFoundException();
		}
		
		if (!$page->getChildren()->isEmpty()) {
			$viewFile = 'parent_page';
		}else{
			$viewFile = 'main_page';
		}
		
		return $this->render('default/'.$viewFile.'.html.twig', array('page' => $page));
    }

	
	/**
     * @Route("/{parent}/{slug}", name="childPage")
     */
    public function childPageAction($parent, $slug)
	{
		$page = $this->getDoctrine()
			->getRepository(Page::class)
			->findChildPage($parent, $slug);
		
		if (!$page) {
			throw $this->createNotFoundException();
		}
		
		return $this->render('default/child_page.html.twig', array('page' => $page ));
	}

	public function mainMenuAction($currentPage) 
	{
		$menu = $this->getDoctrine()
			->getRepository(Page::class)
			->findBy(
				array('parent' => null),
				array('sequence' => 'ASC')
		);
		
        return $this->render('default/_main_menu.html.twig', array(
			'menu' => $menu,
			'currentPage' => $currentPage
		));
    }
}

















