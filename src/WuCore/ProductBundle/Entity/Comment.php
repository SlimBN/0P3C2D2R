<?php

namespace WuCore\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use WuCore\ProductBundle\Entity\Comparaison;
use WuCore\ProductBundle\Entity\Manufacturer;
use WuCore\ProductBundle\Entity\Product;
use WuCore\ProductBundle\Entity\Shop;
use WuCore\ProductBundle\Entity\Supply;
use WuCore\FrontBundle\Entity\User;
use WuCore\ProductBundle\Entity\Comment;

/**
 * Comment
 *
 * @ORM\Table(name="comment")
 * @ORM\Entity
 */
class Comment
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
     * @ORM\Column(name="content", type="text", nullable=true)
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var string
     *
     * @ORM\Column(name="is_in_favor", type="string", nullable=true)
     */
    private $isInFavor;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Comparaison", mappedBy="comment")
     */
    private $comparaison;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Manufacturer", mappedBy="comment")
     */
    private $manufacturer;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Product", mappedBy="comment")
     */
    private $product;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Shop", mappedBy="comment")
     */
    private $shop;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Supply", mappedBy="comment")
     */
    private $supply;

    /**
     * @var \Comment
     *
     * @ORM\ManyToOne(targetEntity="Comment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     * })
     */
    private $parent;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->comparaison = new \Doctrine\Common\Collections\ArrayCollection();
        $this->manufacturer = new \Doctrine\Common\Collections\ArrayCollection();
        $this->product = new \Doctrine\Common\Collections\ArrayCollection();
        $this->shop = new \Doctrine\Common\Collections\ArrayCollection();
        $this->supply = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set content
     *
     * @param string $content
     * @return Comment
     */
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Comment
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
     * Set isInFavor
     *
     * @param string $isInFavor
     * @return Comment
     */
    public function setIsInFavor($isInFavor)
    {
        $this->isInFavor = $isInFavor;
    
        return $this;
    }

    /**
     * Get isInFavor
     *
     * @return string 
     */
    public function getIsInFavor()
    {
        return $this->isInFavor;
    }

    /**
     * Add comparaison
     *
     * @param \WuCore\ProductBundle\Entity\Comparaison $comparaison
     * @return Comment
     */
    public function addComparaison(\WuCore\ProductBundle\Entity\Comparaison $comparaison)
    {
        $this->comparaison[] = $comparaison;
    
        return $this;
    }

    /**
     * Remove comparaison
     *
     * @param \WuCore\ProductBundle\Entity\Comparaison $comparaison
     */
    public function removeComparaison(\WuCore\ProductBundle\Entity\Comparaison $comparaison)
    {
        $this->comparaison->removeElement($comparaison);
    }

    /**
     * Get comparaison
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComparaison()
    {
        return $this->comparaison;
    }

    /**
     * Add manufacturer
     *
     * @param \WuCore\ProductBundle\Entity\Manufacturer $manufacturer
     * @return Comment
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
     * @return Comment
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
     * @return Comment
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
     * Add supply
     *
     * @param \WuCore\ProductBundle\Entity\Supply $supply
     * @return Comment
     */
    public function addSupply(\WuCore\ProductBundle\Entity\Supply $supply)
    {
        $this->supply[] = $supply;
    
        return $this;
    }

    /**
     * Remove supply
     *
     * @param \WuCore\ProductBundle\Entity\Supply $supply
     */
    public function removeSupply(\WuCore\ProductBundle\Entity\Supply $supply)
    {
        $this->supply->removeElement($supply);
    }

    /**
     * Get supply
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSupply()
    {
        return $this->supply;
    }

    /**
     * Set parent
     *
     * @param \WuCore\ProductBundle\Entity\Comment $parent
     * @return Comment
     */
    public function setParent(\WuCore\ProductBundle\Entity\Comment $parent = null)
    {
        $this->parent = $parent;
    
        return $this;
    }

    /**
     * Get parent
     *
     * @return \WuCore\ProductBundle\Entity\Comment 
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set user
     *
     * @param \WuCore\ProductBundle\Entity\User $user
     * @return Comment
     */
    public function setUser(\WuCore\ProductBundle\Entity\User $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \WuCore\ProductBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}