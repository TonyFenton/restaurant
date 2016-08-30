<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Page;

class LoadPageData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
		$pages = array(
			array(
				'name' => 'strony główna',
				'parent' => null,
				'slug' => 'homepage',
				'footer' => 'główna',
				'title' => 'start',
				'picture' => 'p1.jpg',
				'sequence' => 1,
				'content' => '<div class="row">
				<div class="col-xs-12">
				<p>Mauris suscipit justo non varius v<em> velit arcu, vestibulum nec semp </em>ehicula. Etiam velit arcu, vestibulum nec semper vitae, porta ac nibh. Donec egestas pulvinar tempus. Quisque semper est non orci molestie, sed ullamcorper metus viverra. Etiam a euismod libero. Praesent al<strong>iquet consectetur quam at acc</strong>umsan. Curabitur est orci, scelerisque ut sollicitudin et, porta non nibh. Duis et tortor diam. Duis accumsan lorem eu accumsan sollicitudin.</p>
				<p>uis posuere scelerisque condimentum. Ut eu eros quam. Nullam sodales justo vitae<strong> est dapibu</strong>s vehicula. Aliquam quis rhoncus ligula, efficitur congue nunc. Nam vestibulum tortor at varius consectetur. Nunc vestibulum, leo vitae pretium vehicul</p>
				</div>
				</div>
				<div class="row">
				<div class="col-xs-12 col-sm-6">
				<h2><a href="/menu/obiad">Nasze obiady</a></h2><img class="img-responsive" style="margin-bottom: 10px;" src="/images/p2.jpg" alt="" /><p>Morbi et tellus ut dolor sollicitudin mollis. Nunc ac tellus iaculis, interdum dolor vitae, faucibus nibh. Sed ultrices metus ac diam feugiat, ac mollis justo pretium. Curabitur purus dui, ullamcorper in risus sit amet, imperdiet faucibus est. Nullam congue, nisi id rhoncus viverra, turpis eros commodo mauris, in pulvinar lorem nibh</p></div><div class="col-xs-12 col-sm-6"><h2><a href="/menu/kolacja">Nasze kolacje</a></h2><img class="img-responsive" style="margin-bottom: 10px;" src="/images/p4.jpg" alt="" /><p>Morbi et tellus ut dolor sollicitudin mollis. Nunc ac tellus iaculis, interdum dolor vitae, faucibus nibh. Sed ultrices metus ac diam feugiat, ac mollis justo pretium. Curabitur purus dui, ullamcorper in risus sit amet, imperdiet faucibus est. Nullam congue, nisi id rhoncus viverra, turpis eros commodo mauris, in pulvinar lorem nibh</p></div></div>'
			),
			array(
				'name' => 'Menu',
				'parent' => null,
				'slug' => 'menu',
				'footer' => 'strony',
				'title' => 'Nasze menu',
				'picture' => 'p2.jpg',
				'sequence' => 2,
				'content' => '<p>nsive meta components that serve as navigation headers for your application or site. They begin collapsed (and are toggleable) in mobile views and become horizontal as the available viewport width increases. Justified navbar nav links are currently not supported. Overflowing content Since Boots<strong>trap doesnt know how</strong> much space the content in your navba</p><p>estas pulvinar tempus. Quisque semper est non orci molestie, sed ullamcorper metus viverra. Etiam a euismod libero. Praesent al<strong>iquet consectetur quam at acc</strong>umsan. Curabitur est orci, scelerisque ut sollicitudin et, porta non niiam a euismod libero. Praesent al<strong>iquet consectetur quam at acc</strong>umsan. Curabitur est orci, scelerisque ut sollicitudin et, porta non ni</p>'
			),
			array(
				'name' => 'Obiad',
				'parent' => 'Menu',
				'slug' => 'obiad',
				'footer' => 'strony',
				'title' => 'Obiaddffekd',
				'picture' => 'p3.jpg',
				'sequence' => 99,
				'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis ante tristique, rhoncus purus eget, bibendum sem. Donec eu arcu velit. Vestibulum pellentesque, nisl ut ullamcorper elementum, nulla sapien pellentesque tellus, sed sodales elit nisl ac nulla. Sed sagittis eget libero et convallis. Etiam s<strong>uscip</strong>it ante aliquet, dictum enim non, sagittis tortor. Curabitur maximus vitae augue ut vestibulum. Nullam sit amet malesuada risus. Quisque ut leo auctor, viverra sem non, semper massa. Proin non dictum li<strong>gula, sit amet ornare est. Vivamus venenatis dolor eu sem venenatis condimentum. Aliquam placerat tempor fermentum. Phasellus justo enim, ele</strong>ifend at nibh at, blandit fermentum tellus. Mauris a lectus id elit rutrum porta in id neque.</p><p>Mauris suscipit justo non varius vehicula. Etiam velit arcu, vestibulum nec semper vitae, porta ac nibh. Donec egestas pulvinar tempus. Quisque sempe<strong>r est non or</strong>ci molestie, sed ullamcorper metus viverra. Etiam a euismod libero. Praesent aliquet consectetur quam at accumsan. Curabitur est orci, scelerisque ut sollicitudin et, porta non nibh. Duis et tortor diam. Duis accumsan lorem eu accumsan sollicitudin.</p>'
			),
			array(
				'name' => 'Kolacja',
				'parent' => 'Menu',
				'slug' => 'kolacja',
				'footer' => 'strony',
				'title' => 'Kolacja',
				'picture' => 'p4.jpg',
				'sequence' => 99,
				'content' => '<p>Duis posuere scelerisque condimentum. Ut eu eros quam. Nullam sodales justo vitae est dapibus vehicula. Aliquam quiectus id elit rutrum porta in id neque.</p><p>Mauris suscipit justo non varius vehicula. Etiam velit arcu, vestibulum nes rhoncus ligula, efficitur congue nunc. Nam vestibulum tortor at varius consectetur. Nunc vestibulum, leo vitae pretium vehicula, felis elit sollicitudin augue, vitae euismod dui nisl non felis.</p>'
			),
			array(
				'name' => 'Lokalizacja',
				'parent' => null,
				'slug' => 'lokalizacja',
				'footer' => 'strony',
				'title' => 'Nasza lokalizacja',
				'picture' => 'p2.jpg',
				'sequence' => 100,
				'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus luctus elementum. Ut volutpat pretium arcu at vehicula. Morbi congue facilisis elementum. Morbi dapibus maximus est, at interdnsectetur lacus. Pellentesque blandit, massa eget dapibus placerat, sem libero venenatis nunc, at luctus nisl justo quis mi. Curabitur libero sem, rutrum in interdum id, efficitur ut felis. Ut sed sodales velit.</p>
				<p>Donec bibendum dolor a nibh mollis, non bibendum lorem commodo. Nulla facilisi. Nulla imperdiet, enim eu sollicitudin vulputate, lectus ipsum sagittis nulla, quis aliquet mauris ante ac risus. Phasellus nec odio a nisi iaculis commodo eget non felis. Proin fringilla tortor non quam eleifend volutpat. Nunc convallis ac lectus ac vestibulum. Nullam est est, volutpat sit amet gravida at, malesuada ut est. Quisque magna arcu, aliquet at sodales ac, fringilla ut metus. Sed id quam eget leo maximus pulvinar.</p>
				<ul>
				<li>ac risus</li>
				<li>a egplac</li>
				<li>t. Nunc convallis a</li>
				</ul>
				<p>Praesent vel ex odio. Quisque eu volutpat neque, hendrerit placerat justo. Etiam vehicula dignissim mauris. Sed non mi porta, varius nibh ut, commodo leo. Aenean sit aed ex non ornare. Phasellus vehicula mauris vel sollicitudin bibendum. Integer arcu massa, rutrum a nunc eget,</p>
				<div class="text-center"><iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d201880.51115438552!2d-122.57768437848272!3d37.75761709727139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+Kalifornia%2C+Stany+Zjednoczone!5e0!3m2!1spl!2spl!4v1472243899042" width="600" height="450" frameborder="0" allowfullscreen=""></iframe></div>'
			),
		);
				
		foreach ($pages as $page) {
			$data = new Page();
			
			$data
				->setName($page['name'])
				->setSlug($page['slug'])
				->setTitle($page['title'])
				->setPicture($page['picture'])
				->setSequence($page['sequence'])
				->setContent($page['content'])
			;
		
			if ($page['footer'] == null) {
				$data->setFooter(null);
			} else {
				$data->setFooter($this->getReference($page['footer']));
			}
			
			if ($page['parent'] == null) {
				$data->setParent(null);
			} else {
				$data->setParent($this->getReference($page['parent']));
			}
		
			$manager->persist($data);
			
			$this->addReference($page['name'], $data);
		}
		
        $manager->flush();
    }
	
	public function getOrder()
    {
        return 2;
    }
}