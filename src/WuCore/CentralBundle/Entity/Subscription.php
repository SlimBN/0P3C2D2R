<?php

namespace WuCore\CentralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use WuCore\ProductBundle\Entity\Product;
use WuCore\ProductBundle\Entity\Comparaison;
use WuCore\ProductBundle\Entity\Manufacturer;
use WuCore\ProductBundle\Entity\Shop;

/**
 * Subscription
 *
 * @ORM\Table(name="subscription")
 * @ORM\Entity(repositoryClass="WuCore\CentralBundle\Repository\SbuscriptionRepository")
 * @ORM\Entity
 */
class Subscription
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
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Notification", inversedBy="subscription")
     * @ORM\JoinTable(name="subscription_has_notification",
     *   joinColumns={
     *     @ORM\JoinColumn(name="subscription_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="notification_id", referencedColumnName="id")
     *   }
     * )
     */
    private $notification;

    /**
     * @var \Product
     *
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     * })
     */
    private $product;

    /**
     * @var \Comparaison
     *
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="comparaison_id", referencedColumnName="id")
     * })
     */
    private $comparaison;

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
     * Constructor
     */
    public function __construct()
    {
        $this->notification = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Subscription
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
     * @return Subscription
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
     * Add notification
     *
     * @param \WuCore\CentralBundle\Entity\Notification $notification
     * @return Subscription
     */
    public function addNotification(\WuCore\CentralBundle\Entity\Notification $notification)
    {
        $this->notification[] = $notification;
    
        return $this;
    }

    /**
     * Remove notification
     *
     * @param \WuCore\CentralBundle\Entity\Notification $notification
     */
    public function removeNotification(\WuCore\CentralBundle\Entity\Notification $notification)
    {
        $this->notification->removeElement($notification);
    }

    /**
     * Get notification
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNotification()
    {
        return $this->notification;
    }

    /**
     * Set product
     *
     * @param \WuCore\CentralBundle\Entity\Product $product
     * @return Subscription
     */
    public function setProduct(\WuCore\CentralBundle\Entity\Product $product = null)
    {
        $this->product = $product;
    
        return $this;
    }

    /**
     * Get product
     *
     * @return \WuCore\CentralBundle\Entity\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set comparaison
     *
     * @param \WuCore\CentralBundle\Entity\Comparaison $comparaison
     * @return Subscription
     */
    public function setComparaison(\WuCore\CentralBundle\Entity\Comparaison $comparaison = null)
    {
        $this->comparaison = $comparaison;
    
        return $this;
    }

    /**
     * Get comparaison
     *
     * @return \WuCore\CentralBundle\Entity\Comparaison 
     */
    public function getComparaison()
    {
        return $this->comparaison;
    }

    /**
     * Set manufacturer
     *
     * @param \WuCore\CentralBundle\Entity\Manufacturer $manufacturer
     * @return Subscription
     */
    public function setManufacturer(\WuCore\CentralBundle\Entity\Manufacturer $manufacturer = null)
    {
        $this->manufacturer = $manufacturer;
    
        return $this;
    }

    /**
     * Get manufacturer
     *
     * @return \WuCore\CentralBundle\Entity\Manufacturer 
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Set shop
     *
     * @param \WuCore\CentralBundle\Entity\Shop $shop
     * @return Subscription
     */
    public function setShop(\WuCore\CentralBundle\Entity\Shop $shop = null)
    {
        $this->shop = $shop;
    
        return $this;
    }

    /**
     * Get shop
     *
     * @return \WuCore\CentralBundle\Entity\Shop 
     */
    public function getShop()
    {
        return $this->shop;
    }
}