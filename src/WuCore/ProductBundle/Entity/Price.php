<?php

namespace WuCore\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use WuCore\ProductBundle\Entity\Manufacturer;
use WuCore\FrontBundle\Entity\Currency;
use WuCore\ProductBundle\Entity\Product;

/**
 * Price
 *
 * @ORM\Table(name="price")
 * @ORM\Entity
 */
class Price
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
     * @var float
     *
     * @ORM\Column(name="amount", type="decimal", nullable=true)
     */
    private $amount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="available_until", type="date", nullable=true)
     */
    private $availableUntil;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_limited", type="boolean", nullable=true)
     */
    private $isLimited;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Product", mappedBy="price")
     */
    private $product;

    /**
     * @var \Manufacturer
     *
     * @ORM\ManyToOne(targetEntity="Manufacturer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="manufacturer_id", referencedColumnName="id")
     * })
     */
    private $manufacturer;

    /**
     * @var \Currency
     *
     * @ORM\ManyToOne(targetEntity="Currency")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="currency_id", referencedColumnName="id")
     * })
     */
    private $currency;

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
     * Set amount
     *
     * @param float $amount
     * @return Price
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    
        return $this;
    }

    /**
     * Get amount
     *
     * @return float 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Price
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    
        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set availableUntil
     *
     * @param \DateTime $availableUntil
     * @return Price
     */
    public function setAvailableUntil($availableUntil)
    {
        $this->availableUntil = $availableUntil;
    
        return $this;
    }

    /**
     * Get availableUntil
     *
     * @return \DateTime 
     */
    public function getAvailableUntil()
    {
        return $this->availableUntil;
    }

    /**
     * Set isLimited
     *
     * @param boolean $isLimited
     * @return Price
     */
    public function setIsLimited($isLimited)
    {
        $this->isLimited = $isLimited;
    
        return $this;
    }

    /**
     * Get isLimited
     *
     * @return boolean 
     */
    public function getIsLimited()
    {
        return $this->isLimited;
    }

    /**
     * Add product
     *
     * @param \WuCore\ProductBundle\Entity\Product $product
     * @return Price
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
     * Set manufacturer
     *
     * @param \WuCore\ProductBundle\Entity\Manufacturer $manufacturer
     * @return Price
     */
    public function setManufacturer(\WuCore\ProductBundle\Entity\Manufacturer $manufacturer = null)
    {
        $this->manufacturer = $manufacturer;
    
        return $this;
    }

    /**
     * Get manufacturer
     *
     * @return \WuCore\ProductBundle\Entity\Manufacturer 
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Set currency
     *
     * @param \WuCore\ProductBundle\Entity\Currency $currency
     * @return Price
     */
    public function setCurrency(\WuCore\ProductBundle\Entity\Currency $currency = null)
    {
        $this->currency = $currency;
    
        return $this;
    }

    /**
     * Get currency
     *
     * @return \WuCore\ProductBundle\Entity\Currency 
     */
    public function getCurrency()
    {
        return $this->currency;
    }
}