<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use AppBundle\Entity\Page;
use Symfony\Component\HttpFoundation\JsonResponse;

class AjaxController extends Controller
{
	/**
     * @Route("/ajax/get-slug/{id}", name="get_slug")
	 * @Method({"GET"})
     */
	public function getSlugAction($id ) 
	{
		$em = $this->getDoctrine()->getManager();
		 
		$page = $em->getRepository(Page::class)->find($id);
		
		if (!$page) {
			$slug = null;
		}else {
			$slug = $page->getSlug();
		}
		
		return new JsonResponse(array('slug' => $slug));
	}
}