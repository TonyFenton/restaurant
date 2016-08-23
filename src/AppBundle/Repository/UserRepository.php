<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * UserRepository
 *
 */
class UserRepository extends EntityRepository
{
	public function findUsers() 
	{
		return $this->getEntityManager()
			->createQuery(
				"SELECT u
				FROM AppBundle:User u
				WHERE NOT u.roles LIKE '%ROLE_SUPER_ADMIN%'
					AND NOT u.roles LIKE '%ROLE_ADMIN%'"
			)
			->getResult();
	}
}



















