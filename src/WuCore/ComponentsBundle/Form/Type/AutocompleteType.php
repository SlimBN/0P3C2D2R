<?php

namespace WuCore\ComponentsBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use WuCore\ComponentsBundle\Form\DataTransformer\autoCompleteTransformer;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

/**
 * Creates an auto complete form field
 *
 * @author     Mohamed Racem Zouaghi <mohamedracem.zouaghi@proxym-it.com>
 */
class AutocompleteType extends AbstractType {

    private $om;

    public function __construct(ObjectManager $om) {
        $this->om = $om;
    }

    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options) {
        parent::buildForm($builder, $options);
        $transformer = new autoCompleteTransformer($this->om, $options['class'], $options['multiple'], $options['property']);
        $builder->resetClientTransformers();
        $builder->appendClientTransformer($transformer);
        /* var_dump($builder->getClientTransformers());
          var_dump(get_class_methods($builder));
          die; */
        $builder->setAttribute('callback_route', $options['callback_route']);
        $builder->setAttribute('token_limit', $options['token_limit']);
        $builder->setAttribute('min_char', $options['min_char']);
        $builder->setAttribute('multiple', $options['multiple']);
        $builder->setAttribute('class', $options['class']);
    }

    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options) {
        parent::buildView($view, $form, $options);
        $view->set('callback_route', $form->getAttribute('callback_route'));
        $view->set('token_limit', $form->getAttribute('multiple') ? ($form->getAttribute('token_limit') > 1 ? $form->getAttribute('token_limit') : false ) : 1);
        $view->set('min_char', $form->getAttribute('min_char'));
        $view->set('multiple', $form->getAttribute('multiple'));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'callback_route' => '_welcome',
            'token_limit' => false,
            'min_char' => 3,
            'multiple' => false,
            'class' => false,
            'property' => 'name'
        ));
    }

    public function getParent() {
        return 'text';
    }

    public function getName() {
        return 'autocomplete';
    }

}

?>
