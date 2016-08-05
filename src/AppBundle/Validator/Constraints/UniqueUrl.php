<?php

namespace AppBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class UniqueUrl extends Constraint
{
	public $message = 'Strona o podanym adresie już istnieje';
	
	public function getTargets()
	{
		return self::CLASS_CONSTRAINT;
	}
}