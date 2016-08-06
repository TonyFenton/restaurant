<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Form\DescriptionType;
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
		}else{
			$id = 0;
			$slug = 'not empty';
		}
		
		if (!empty($slug)) {
			$builder
				->add('parent', EntityType::class, array(
					'class' => 'AppBundle:Page',
					'query_builder' => function (EntityRepository $er) use($id) {	
						return $er->createQueryBuilder('p')
							->where('p.id != ?1')
							->andwhere('p.parent is null')
							->andwhere("p.slug != ''")
							->setParameter(1, $id)
						;
					},
					'empty_value' => '',
					'required' => false,
				))
				->add('slug')
			;
		}
			
		$builder
            ->add('name')
            ->add('title')
			->add('description', DescriptionType::class, array(
				'label' => false,
			))
            ->add('picture')
            ->add('content')
            ->add('footer')
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
