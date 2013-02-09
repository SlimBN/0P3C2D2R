<?php

namespace WuCore\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Specification
 *
 * @ORM\Table(name="specification")
 * @ORM\Entity
 */
class Specification
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="value_name", type="string", length=64, nullable=false)
     */
    private $valueName;

    /**
     * @var string
     *
     * @ORM\Column(name="shown_value", type="string", length=64, nullable=false)
     */
    private $shownValue;

    /**
     * @var integer
     *
     * @ORM\Column(name="ref_value", type="integer", nullable=false)
     */
    private $refValue;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="model_date", type="date", nullable=true)
     */
    private $modelDate;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Product", mappedBy="specification")
     */
    private $product;

    /**
     * @var \Product
     *
     * @ORM\ManyToOne(targetEntity="Product")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="component_id", referencedColumnName="id")
     * })
     */
    private $component;

    /**
     * @var \Specification
     *
     * @ORM\ManyToOne(targetEntity="Specification")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="predecessor_id", referencedColumnName="id")
     * })
     */
    private $predecessor;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->product = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set valueName
     *
     * @param string $valueName
     * @return Specification
     */
    public function setValueName($valueName)
    {
        $this->valueName = $valueName;
    
        return $this;
    }

    /**
     * Get valueName
     *
     * @return string 
     */
    public function getValueName()
    {
        return $this->valueName;
    }

    /**
     * Set shownValue
     *
     * @param string $shownValue
     * @return Specification
     */
    public function setShownValue($shownValue)
    {
        $this->shownValue = $shownValue;
    
        return $this;
    }

    /**
     * Get shownValue
     *
     * @return string 
     */
    public function getShownValue()
    {
        return $this->shownValue;
    }

    /**
     * Set refValue
     *
     * @param integer $refValue
     * @return Specification
     */
    public function setRefValue($refValue)
    {
        $this->refValue = $refValue;
    
        return $this;
    }

    /**
     * Get refValue
     *
     * @return integer 
     */
    public function getRefValue()
    {
        return $this->refValue;
    }

    /**
     * Set modelDate
     *
     * @param \DateTime $modelDate
     * @return Specification
     */
    public function setModelDate($modelDate)
    {
        $this->modelDate = $modelDate;
    
        return $this;
    }

    /**
     * Get modelDate
     *
     * @return \DateTime 
     */
    public function getModelDate()
    {
        return $this->modelDate;
    }

    /**
     * Add product
     *
     * @param \WuCore\ProductBundle\Entity\Product $product
     * @return Specification
     */
    public function addProduct(\WuCore\ProductBundle\Entity\Product $product)
    {
        $this->product[] = $product;
    
        return $this;
    }

    /**
     * Remove product
     *
     * @param \WuCore\ProductBundle\Entity\Product $product
     */
    public function removeProduct(\WuCore\ProductBundle\Entity\Product $product)
    {
        $this->product->removeElement($product);
    }

    /**
     * Get product
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set component
     *
     * @param \WuCore\ProductBundle\Entity\Product $component
     * @return Specification
     */
    public function setComponent(\WuCore\ProductBundle\Entity\Product $component = null)
    {
        $this->component = $component;
    
        return $this;
    }

    /**
     * Get component
     *
     * @return \WuCore\ProductBundle\Entity\Product 
     */
    public function getComponent()
    {
        return $this->component;
    }

    /**
     * Set predecessor
     *
     * @param \WuCore\ProductBundle\Entity\Specification $predecessor
     * @return Specification
     */
    public function setPredecessor(\WuCore\ProductBundle\Entity\Specification $predecessor = null)
    {
        $this->predecessor = $predecessor;
    
        return $this;
    }

    /**
     * Get predecessor
     *
     * @return \WuCore\ProductBundle\Entity\Specification 
     */
    public function getPredecessor()
    {
        return $this->predecessor;
    }
}