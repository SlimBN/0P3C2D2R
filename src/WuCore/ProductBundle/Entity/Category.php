<?php

namespace WuCore\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use WuCore\ProductBundle\Entity\Category;
use WuCore\ProductBundle\Entity\Shop;
use WuCore\ProductBundle\Entity\Product;
use WuCore\ProductBundle\Entity\Manufacturer;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity
 */
class Category
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
     * @ORM\Column(name="name", type="string", length=64, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=64, nullable=false)
     */
    private $slug;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Manufacturer", mappedBy="category")
     */
    private $manufacturer;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Product", mappedBy="category")
     */
    private $product;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Shop", mappedBy="category")
     */
    private $shop;

    /**
     * @var \Category
     *
     * @ORM\ManyToOne(targetEntity="Category")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     * })
     */
    private $parent;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->manufacturer = new \Doctrine\Common\Collections\ArrayCollection();
        $this->product = new \Doctrine\Common\Collections\ArrayCollection();
        $this->shop = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Category
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    
        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Add manufacturer
     *
     * @param \WuCore\ProductBundle\Entity\Manufacturer $manufacturer
     * @return Category
     */
    public function addManufacturer(\WuCore\ProductBundle\Entity\Manufacturer $manufacturer)
    {
        $this->manufacturer[] = $manufacturer;
    
        return $this;
    }

    /**
     * Remove manufacturer
     *
     * @param \WuCore\ProductBundle\Entity\Manufacturer $manufacturer
     */
    public function removeManufacturer(\WuCore\ProductBundle\Entity\Manufacturer $manufacturer)
    {
        $this->manufacturer->removeElement($manufacturer);
    }

    /**
     * Get manufacturer
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Add product
     *
     * @param \WuCore\ProductBundle\Entity\Product $product
     * @return Category
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
     * Add shop
     *
     * @param \WuCore\ProductBundle\Entity\Shop $shop
     * @return Category
     */
    public function addShop(\WuCore\ProductBundle\Entity\Shop $shop)
    {
        $this->shop[] = $shop;
    
        return $this;
    }

    /**
     * Remove shop
     *
     * @param \WuCore\ProductBundle\Entity\Shop $shop
     */
    public function removeShop(\WuCore\ProductBundle\Entity\Shop $shop)
    {
        $this->shop->removeElement($shop);
    }

    /**
     * Get shop
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getShop()
    {
        return $this->shop;
    }

    /**
     * Set parent
     *
     * @param \WuCore\ProductBundle\Entity\Category $parent
     * @return Category
     */
    public function setParent(\WuCore\ProductBundle\Entity\Category $parent = null)
    {
        $this->parent = $parent;
    
        return $this;
    }

    /**
     * Get parent
     *
     * @return \WuCore\ProductBundle\Entity\Category 
     */
    public function getParent()
    {
        return $this->parent;
    }
}