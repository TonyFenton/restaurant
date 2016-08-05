<?php

namespace AppBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Doctrine\ORM\EntityManager;

class UniqueUrlValidator extends ConstraintValidator
{   
	private $em;

    public function __construct(EntityManager $entityManager) {
        $this->em = $entityManager;
    }

    public function validate($page, Constraint $constraint)
    {
		if ($page->getParent()) {
			$parent = $page->getParent()->getId();
		}else{
			$parent = null;
		}
		
		$url = $this->em->getRepository('AppBundle:Page')->findOneBy(array(
			'slug' => $page->getSlug(),
			'parent' => $parent,
		));
		
        if ($url) {
            $this->context->buildViolation($constraint->message)
                ->addViolation();
        }
    }
}