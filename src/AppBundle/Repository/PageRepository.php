<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * PageRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PageRepository extends EntityRepository
{
	public function findChildPage($parentSlug, $childSlug) 
	{
		return $this->getEntityManager()
			->createQuery(
				"SELECT childPage
				FROM AppBundle:Page parentPage
				LEFT JOIN AppBundle:Page childPage
					WITH childPage.parent = parentPage.id
				WHERE childPage.slug = :childSlug
					AND parentPage.slug = :parentSlug"
			)->setParameters(array(
				'childSlug' => $childSlug,
				'parentSlug' => $parentSlug))
			->getOneOrNullResult();
	}
	
	public function uniqueUrl($slug, $parent, $id) 
	{
		return $this->getEntityManager()
			->createQuery(
				"SELECT p
				FROM AppBundle:Page p
				WHERE p.slug = :slug
					AND p.parent $parent
					AND p.id != :id"
			)->setParameters(array(
				'slug' => $slug,
				'id' => $id,
			))
			->getResult();
	}
}