<?php

namespace WuCore\ProductBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('refname')
            ->add('createdAt')
            ->add('updatedAt')
            ->add('releasedAt')
            ->add('longDesc')
            ->add('manufacturerId')
            ->add('slug')
            ->add('category')
            ->add('comment')
            ->add('picture')
            ->add('price')
            ->add('specification')
            ->add('originalProduct')
            ->add('brag')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'WuCore\ProductBundle\Entity\Product'
        ));
    }

    public function getName()
    {
        return 'wucore_productbundle_producttype';
    }
}
