<?php

namespace WuCore\ComponentsBundle\Form\DataTransformer;

use Symfony\Component\Form\Exception\TransformationFailedException;
use Symfony\Component\Form\DataTransformerInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * autoCompleteTransformer
 *
 * @author     Mohamed Racem Zouaghi <mohamedracem.zouaghi@proxym-it.com>
 */
class autoCompleteTransformer implements DataTransformerInterface {

    private $om;
    private $class;
    private $is_multiple;
    private $property;

    public function __construct(ObjectManager $om, $class, $is_multiple, $property) {
        $this->om = $om;
        $this->class = $class;
        $this->is_multiple = $is_multiple;
        $this->property = $property;
    }

    // transforms the Issue object to an array
    public function transform($val) {
        if (null === $val) {
            return '';
        }
        $method = 'get' . $this->humanize($this->property);
        $values = array();
        if ($this->is_multiple):
            foreach ($val as $value):
                $values[] = array('id' => $value->getId(), 'name' => $value->$method());
            endforeach;
        else:
            $values[] = array('id' => $val->getId(), 'name' => $val->$method());
        endif;
        return $values;
    }

    // transforms the entity id into an actual entity
    public function reverseTransform($val) {
        if (!$val) {
            return null;
        }
        if ($this->is_multiple):
            $ids = explode(',', $val);
            $entity = $this->om->getRepository($this->class)->findBy(array('id' => $ids));
        else:
            $entity = $this->om->getRepository($this->class)->findOneBy(array('id' => $val));
        endif;

        if (null === $entity) {
            throw new TransformationFailedException(sprintf('A %s with id %s does not exist!', $this->class, $val));
        }

        return $entity;
    }

    public function humanize($text) {
        return preg_replace('/[_\s]+/', '', ucwords(trim(strtolower(preg_replace('/[_\s]+/', ' ', $text)))));
    }

}

?>
