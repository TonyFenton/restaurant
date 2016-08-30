<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Description;

class LoadDescriptionData extends AbstractFixture implements OrderedFixtureInterface
{
	
    public function load(ObjectManager $manager)
    {
		$descriptions = array(
			array(
				'page' => 'Menu',
				'description' => 'menu a czemu nie',
			),
			array(
				'page' => 'Obiad',
				'description' => 'Obiadek',
			),
			array(
				'page' => 'Lokalizacja',
				'description' => 'Zobacz gdzie nas się mieścimy',
			)
		);
				
		foreach ($descriptions as $description) {
			$data = new Description();
			
			$data
				->setDescription($description['description'])
				->setPage($this->getReference($description['page']));
		
			$manager->persist($data);
		}
		
        $manager->flush();
    }

    public function getOrder()
    {
        return 3;
    }
}