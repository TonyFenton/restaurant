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
		
        $builder
            ->add('slug')
            ->add('name')
            ->add('title')
            ->add('picture')
            ->add('content')
			->add('description', DescriptionType::class, array(
				'label' => false,
			))
            ->add('footer')
            ->add('parent', EntityType::class, array(
				'class' => 'AppBundle:Page',
				'query_builder' => function (EntityRepository $er) use($options) {
					return $er->createQueryBuilder('p')
						->where('p.id != ?1')
						->andwhere('p.parent is null')
						->setParameter(1, $options['data']->getId())
					;
				},
				'empty_value' => '',
				'required' => false,
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
