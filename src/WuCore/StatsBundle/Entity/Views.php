<?php

namespace WuCore\StatsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use WuCore\FrontBundle\Entity\User;
use WuCore\ProductBundle\Entity\Product;
use WuCore\ProductBundle\Entity\Manufacturer;
use WuCore\ProductBundle\Entity\Shop;
use WuCore\ProductBundle\Entity\Supply;
use WuCore\ProductBundle\Entity\Comparaison;
use WuCore\StatsBundle\Entity\Device;
use WuCore\FrontBundle\Entity\Post;

/**
 * Views
 *
 * @ORM\Table(name="views")
 * @ORM\Entity
 */
class Views
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
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \User
     *
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \Product
     *
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     * })
     */
    private $product;

    /**
     * @var \Manufacturer
     *
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="manufacturer_id", referencedColumnName="id")
     * })
     */
    private $manufacturer;

    /**
     * @var \Shop
     *
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="shop_id", referencedColumnName="id")
     * })
     */
    private $shop;

    /**
     * @var \Supply
     *
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="supply_id", referencedColumnName="id")
     * })
     */
    private $supply;

    /**
     * @var \Comparaison
     *
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="comparaison_id", referencedColumnName="id")
     * })
     */
    private $comparaison;

    /**
     * @var \Device
     *
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="device_id", referencedColumnName="id")
     * })
     */
    private $device;

    /**
     * @var \Post
     *
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="post_id", referencedColumnName="id")
     * })
     */
    private $post;



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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Views
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
     * Set user
     *
     * @param \WuCore\StatsBundle\Entity\User $user
     * @return Views
     */
    public function setUser(\WuCore\StatsBundle\Entity\User $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \WuCore\StatsBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set product
     *
     * @param \WuCore\StatsBundle\Entity\Product $product
     * @return Views
     */
    public function setProduct(\WuCore\StatsBundle\Entity\Product $product = null)
    {
        $this->product = $product;
    
        return $this;
    }

    /**
     * Get product
     *
     * @return \WuCore\StatsBundle\Entity\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set manufacturer
     *
     * @param \WuCore\StatsBundle\Entity\Manufacturer $manufacturer
     * @return Views
     */
    public function setManufacturer(\WuCore\StatsBundle\Entity\Manufacturer $manufacturer = null)
    {
        $this->manufacturer = $manufacturer;
    
        return $this;
    }

    /**
     * Get manufacturer
     *
     * @return \WuCore\StatsBundle\Entity\Manufacturer 
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Set shop
     *
     * @param \WuCore\StatsBundle\Entity\Shop $shop
     * @return Views
     */
    public function setShop(\WuCore\StatsBundle\Entity\Shop $shop = null)
    {
        $this->shop = $shop;
    
        return $this;
    }

    /**
     * Get shop
     *
     * @return \WuCore\StatsBundle\Entity\Shop 
     */
    public function getShop()
    {
        return $this->shop;
    }

    /**
     * Set supply
     *
     * @param \WuCore\StatsBundle\Entity\Supply $supply
     * @return Views
     */
    public function setSupply(\WuCore\StatsBundle\Entity\Supply $supply = null)
    {
        $this->supply = $supply;
    
        return $this;
    }

    /**
     * Get supply
     *
     * @return \WuCore\StatsBundle\Entity\Supply 
     */
    public function getSupply()
    {
        return $this->supply;
    }

    /**
     * Set comparaison
     *
     * @param \WuCore\StatsBundle\Entity\Comparaison $comparaison
     * @return Views
     */
    public function setComparaison(\WuCore\StatsBundle\Entity\Comparaison $comparaison = null)
    {
        $this->comparaison = $comparaison;
    
        return $this;
    }

    /**
     * Get comparaison
     *
     * @return \WuCore\StatsBundle\Entity\Comparaison 
     */
    public function getComparaison()
    {
        return $this->comparaison;
    }

    /**
     * Set device
     *
     * @param \WuCore\StatsBundle\Entity\Device $device
     * @return Views
     */
    public function setDevice(\WuCore\StatsBundle\Entity\Device $device = null)
    {
        $this->device = $device;
    
        return $this;
    }

    /**
     * Get device
     *
     * @return \WuCore\StatsBundle\Entity\Device 
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * Set post
     *
     * @param \WuCore\StatsBundle\Entity\Post $post
     * @return Views
     */
    public function setPost(\WuCore\StatsBundle\Entity\Post $post = null)
    {
        $this->post = $post;
    
        return $this;
    }

    /**
     * Get post
     *
     * @return \WuCore\StatsBundle\Entity\Post 
     */
    public function getPost()
    {
        return $this->post;
    }
}