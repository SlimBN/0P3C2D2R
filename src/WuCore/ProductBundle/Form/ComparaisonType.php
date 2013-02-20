<?php

namespace WuCore\ProductBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ComparaisonType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('firstProduct', 'autocomplete', array(
                    'callback_route' => '_product_search',
                    'required' => false,
                    'multiple' => false,
                    'class' => 'WuCoreProductBundle:Product',
                    'property' => 'name',
                ))
                ->add('secondProduct', 'autocomplete', array(
                    'callback_route' => '_product_search',
                    'required' => false,
                    'multiple' => false,
                    'class' => 'WuCoreProductBundle:Product',
                    'property' => 'name'
                ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'WuCore\ProductBundle\Entity\Comparaison'
        ));
    }

    public function getName() {
        return 'wucore_productbundle_comparaisontype';
    }

}
