<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Footer;

class LoadFooterData implements FixtureInterface
{
	
    public function load(ObjectManager $manager)
    {
		$footers = array(
			array(
				'name' => 'strony',
				'footer' => '<p>Nulla facilisi. Aenean auctor egestas risus non consequat. In ligula quam, faucibus at lorem vel, egestas iaculis arcu. Nulla gravida rhoncus aliquet. Fusce sem odio, scelerisque sed velit ultrices, fermentum ultricies ante.</p>',
			),
			array(
				'name' => 'główna',
				'footer' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc scelerisque lacus a gravida volutpat. Duis vel velit in nulla cursus faucibus. Praesent eget aliquam mauris. Aenean sodales luctus turpis at pretium.</p>',
			)
		);
				
		foreach ($footers as $footer) {
			$data = new Footer();
			$data->setName($footer['name']);
			$data->setFooter($footer['footer']);
		
			$manager->persist($data);
		}
		
        $manager->flush();
    }
}