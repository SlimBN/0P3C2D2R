<?php

namespace WuCore\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Shop
 *
 * @ORM\Table(name="shop")
 * @ORM\Entity
 */
class Shop
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
     * @ORM\Column(name="long_desc", type="text", nullable=true)
     */
    private $longDesc;

    /**
     * @var float
     *
     * @ORM\Column(name="coord_lat", type="decimal", nullable=true)
     */
    private $coordLat;

    /**
     * @var float
     *
     * @ORM\Column(name="coord_long", type="decimal", nullable=true)
     */
    private $coordLong;

    /**
     * @var string
     *
     * @ORM\Column(name="web", type="string", length=64, nullable=true)
     */
    private $web;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_phone", type="string", length=64, nullable=true)
     */
    private $contactPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_fax", type="string", length=64, nullable=true)
     */
    private $contactFax;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_email", type="string", length=64, nullable=true)
     */
    private $contactEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=64, nullable=false)
     */
    private $slug;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Category", inversedBy="shop")
     * @ORM\JoinTable(name="shop_has_category",
     *   joinColumns={
     *     @ORM\JoinColumn(name="shop_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     *   }
     * )
     */
    private $category;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Comment", inversedBy="shop")
     * @ORM\JoinTable(name="shop_has_comment",
     *   joinColumns={
     *     @ORM\JoinColumn(name="shop_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="comment_id", referencedColumnName="id")
     *   }
     * )
     */
    private $comment;

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
     * @var \City
     *
     * @ORM\ManyToOne(targetEntity="City")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="city_id", referencedColumnName="id")
     * })
     */
    private $city;

    /**
     * @var \Shop
     *
     * @ORM\ManyToOne(targetEntity="Shop")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="main_shop_id", referencedColumnName="id")
     * })
     */
    private $mainShop;

    /**
     * @var \State
     *
     * @ORM\ManyToOne(targetEntity="State")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="state_id", referencedColumnName="id")
     * })
     */
    private $state;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->category = new \Doctrine\Common\Collections\ArrayCollection();
        $this->comment = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Shop
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
     * Set longDesc
     *
     * @param string $longDesc
     * @return Shop
     */
    public function setLongDesc($longDesc)
    {
        $this->longDesc = $longDesc;
    
        return $this;
    }

    /**
     * Get longDesc
     *
     * @return string 
     */
    public function getLongDesc()
    {
        return $this->longDesc;
    }

    /**
     * Set coordLat
     *
     * @param float $coordLat
     * @return Shop
     */
    public function setCoordLat($coordLat)
    {
        $this->coordLat = $coordLat;
    
        return $this;
    }

    /**
     * Get coordLat
     *
     * @return float 
     */
    public function getCoordLat()
    {
        return $this->coordLat;
    }

    /**
     * Set coordLong
     *
     * @param float $coordLong
     * @return Shop
     */
    public function setCoordLong($coordLong)
    {
        $this->coordLong = $coordLong;
    
        return $this;
    }

    /**
     * Get coordLong
     *
     * @return float 
     */
    public function getCoordLong()
    {
        return $this->coordLong;
    }

    /**
     * Set web
     *
     * @param string $web
     * @return Shop
     */
    public function setWeb($web)
    {
        $this->web = $web;
    
        return $this;
    }

    /**
     * Get web
     *
     * @return string 
     */
    public function getWeb()
    {
        return $this->web;
    }

    /**
     * Set contactPhone
     *
     * @param string $contactPhone
     * @return Shop
     */
    public function setContactPhone($contactPhone)
    {
        $this->contactPhone = $contactPhone;
    
        return $this;
    }

    /**
     * Get contactPhone
     *
     * @return string 
     */
    public function getContactPhone()
    {
        return $this->contactPhone;
    }

    /**
     * Set contactFax
     *
     * @param string $contactFax
     * @return Shop
     */
    public function setContactFax($contactFax)
    {
        $this->contactFax = $contactFax;
    
        return $this;
    }

    /**
     * Get contactFax
     *
     * @return string 
     */
    public function getContactFax()
    {
        return $this->contactFax;
    }

    /**
     * Set contactEmail
     *
     * @param string $contactEmail
     * @return Shop
     */
    public function setContactEmail($contactEmail)
    {
        $this->contactEmail = $contactEmail;
    
        return $this;
    }

    /**
     * Get contactEmail
     *
     * @return string 
     */
    public function getContactEmail()
    {
        return $this->contactEmail;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Shop
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
     * Add category
     *
     * @param \WuCore\ProductBundle\Entity\Category $category
     * @return Shop
     */
    public function addCategory(\WuCore\ProductBundle\Entity\Category $category)
    {
        $this->category[] = $category;
    
        return $this;
    }

    /**
     * Remove category
     *
     * @param \WuCore\ProductBundle\Entity\Category $category
     */
    public function removeCategory(\WuCore\ProductBundle\Entity\Category $category)
    {
        $this->category->removeElement($category);
    }

    /**
     * Get category
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Add comment
     *
     * @param \WuCore\ProductBundle\Entity\Comment $comment
     * @return Shop
     */
    public function addComment(\WuCore\ProductBundle\Entity\Comment $comment)
    {
        $this->comment[] = $comment;
    
        return $this;
    }

    /**
     * Remove comment
     *
     * @param \WuCore\ProductBundle\Entity\Comment $comment
     */
    public function removeComment(\WuCore\ProductBundle\Entity\Comment $comment)
    {
        $this->comment->removeElement($comment);
    }

    /**
     * Get comment
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set user
     *
     * @param \WuCore\ProductBundle\Entity\User $user
     * @return Shop
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

    /**
     * Set city
     *
     * @param \WuCore\ProductBundle\Entity\City $city
     * @return Shop
     */
    public function setCity(\WuCore\ProductBundle\Entity\City $city = null)
    {
        $this->city = $city;
    
        return $this;
    }

    /**
     * Get city
     *
     * @return \WuCore\ProductBundle\Entity\City 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set mainShop
     *
     * @param \WuCore\ProductBundle\Entity\Shop $mainShop
     * @return Shop
     */
    public function setMainShop(\WuCore\ProductBundle\Entity\Shop $mainShop = null)
    {
        $this->mainShop = $mainShop;
    
        return $this;
    }

    /**
     * Get mainShop
     *
     * @return \WuCore\ProductBundle\Entity\Shop 
     */
    public function getMainShop()
    {
        return $this->mainShop;
    }

    /**
     * Set state
     *
     * @param \WuCore\ProductBundle\Entity\State $state
     * @return Shop
     */
    public function setState(\WuCore\ProductBundle\Entity\State $state = null)
    {
        $this->state = $state;
    
        return $this;
    }

    /**
     * Get state
     *
     * @return \WuCore\ProductBundle\Entity\State 
     */
    public function getState()
    {
        return $this->state;
    }
}