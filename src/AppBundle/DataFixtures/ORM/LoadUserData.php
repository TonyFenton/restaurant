<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use AppBundle\Entity\User;

class LoadUserData implements FixtureInterface, ContainerAwareInterface
{
	/**
     * @var ContainerInterface
     */
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
	
    public function load(ObjectManager $manager)
    {
		$users = array(
			array(
				'name' => 'krzysztof',
				'password' => 'jarzyna',
				'email' => 'krzysztof@example.com',
				'enabled' => true,
				'role' => array('ROLE_ADMIN')
			),
			array(
				'name' => 'kuba',
				'password' => 'brenner',
				'email' => 'kuba@example.com',
				'enabled' => true,
				'role' => array('ROLE_USER')
			),
			array(
				'name' => 'user',
				'password' => 'user',
				'email' => 'user@example.com',
				'enabled' => false,
				'role' => array('ROLE_USER')
			),
			array(
				'name' => 'user2',
				'password' => 'user2',
				'email' => 'user2@example.com',
				'enabled' => true,
				'role' => array('ROLE_USER')
			),
			array(
				'name' => 'user3',
				'password' => 'user3',
				'email' => 'user3@example.com',
				'enabled' => true,
				'role' => array('ROLE_USER')
			)
		);
				
		foreach ($users as $user) {
			$data = new User();
			
			$encoder = $this->container->get('security.password_encoder');
			$password = $encoder->encodePassword($data, $user['password']);
			$data->setPassword($password);
			
			$data
				->setUsername($user['name'])
				->setEmail($user['email'])
				->setEnabled($user['enabled'])
				->setRoles($user['role']);
		
			$manager->persist($data);
		}
		
        $manager->flush();
    }
}