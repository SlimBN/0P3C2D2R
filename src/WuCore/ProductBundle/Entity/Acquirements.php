<?php

namespace WuCore\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use WuCore\ProductBundle\Entity\Manufacturer;
use WuCore\ProductBundle\Entity\Shop;

/**
 * Acquirements
 *
 * @ORM\Table(name="acquirements")
 * @ORM\Entity
 */
class Acquirements
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
     * @var \DateTime
     *
     * @ORM\Column(name="purchased_at", type="date", nullable=false)
     */
    private $purchasedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt;

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
     * @var \Shop
     *
     * @ORM\ManyToOne(targetEntity="Shop")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="shop_id", referencedColumnName="id")
     * })
     */
    private $shop;



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
     * Set purchasedAt
     *
     * @param \DateTime $purchasedAt
     * @return Acquirements
     */
    public function setPurchasedAt($purchasedAt)
    {
        $this->purchasedAt = $purchasedAt;
    
        return $this;
    }

    /**
     * Get purchasedAt
     *
     * @return \DateTime 
     */
    public function getPurchasedAt()
    {
        return $this->purchasedAt;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Acquirements
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
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Acquirements
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    
        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set manufacturer
     *
     * @param \WuCore\ProductBundle\Entity\Manufacturer $manufacturer
     * @return Acquirements
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
     * Set shop
     *
     * @param \WuCore\ProductBundle\Entity\Shop $shop
     * @return Acquirements
     */
    public function setShop(\WuCore\ProductBundle\Entity\Shop $shop = null)
    {
        $this->shop = $shop;
    
        return $this;
    }

    /**
     * Get shop
     *
     * @return \WuCore\ProductBundle\Entity\Shop 
     */
    public function getShop()
    {
        return $this->shop;
    }
}