<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Form\Type\DescriptionType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;

class PageType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

		if ($options['data']->getId()) {
			$id = $options['data']->getId();
			$slug = $options['data']->getSlug();
			$withoutChildren = $options['data']->getChildren()->isEmpty();
		}else{
			$id = 0;
			$slug = null;
			$withoutChildren = true;
		}
		
	
		if ($slug != 'homepage') {
			if ($withoutChildren) {
				$builder
					->add('parent', EntityType::class, array(
						'class' => 'AppBundle:Page',
						'query_builder' => function (EntityRepository $er) use($id) {	
							return $er->createQueryBuilder('p')
								->where('p.id != ?1')
								->andwhere('p.parent is null')
								->andwhere("p.slug != 'homepage'")
								->setParameter(1, $id)
							;
						},
						'placeholder' => '',
						'required' => false,
						'label' => 'Rodzic',
					))
				;
			}
			
			$builder
				->add('slug', null, array(
					'label' => 'Adres',
				))
			;
		}
			
		$builder
            ->add('name', null, array(
				'label' => 'Nazwa',
			))
            ->add('title', null, array(
				'label' => 'Tytuł',
			))
			->add('description', DescriptionType::class, array(
				'label' => false,
			))
            ->add('picture', null, array(
				'label' => 'Zdjęcie',
			))
            ->add('content', null, array(
				'attr' => array('class' => 'tinymce'), 
				'required' => false,
				'label' => 'Treść',
			))
            ->add('footer', null, array(
				'label' => 'Stopka',
			))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Page'
        ));
    }
}
