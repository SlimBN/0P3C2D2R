<?php

namespace WuCore\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Manufacturer
 *
 * @ORM\Table(name="manufacturer")
 * @ORM\Entity
 */
class Manufacturer
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
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="adress", type="string", length=64, nullable=true)
     */
    private $adress;

    /**
     * @var float
     *
     * @ORM\Column(name="hq_lat", type="decimal", nullable=true)
     */
    private $hqLat;

    /**
     * @var float
     *
     * @ORM\Column(name="hq_long", type="decimal", nullable=true)
     */
    private $hqLong;

    /**
     * @var string
     *
     * @ORM\Column(name="web", type="string", length=64, nullable=true)
     */
    private $web;

    /**
     * @var string
     *
     * @ORM\Column(name="long_desc", type="text", nullable=true)
     */
    private $longDesc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="founded_at", type="date", nullable=true)
     */
    private $foundedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="closed_at", type="date", nullable=true)
     */
    private $closedAt;

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
     * @var string
     *
     * @ORM\Column(name="stock_ref", type="string", length=16, nullable=true)
     */
    private $stockRef;

    /**
     * @var float
     *
     * @ORM\Column(name="stock_value", type="float", nullable=true)
     */
    private $stockValue;

    /**
     * @var string
     *
     * @ORM\Column(name="stock_dir", type="string", nullable=true)
     */
    private $stockDir;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Category", inversedBy="manufacturer")
     * @ORM\JoinTable(name="manufacturer_has_category",
     *   joinColumns={
     *     @ORM\JoinColumn(name="manufacturer_id", referencedColumnName="id")
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
     * @ORM\ManyToMany(targetEntity="Comment", inversedBy="manufacturer")
     * @ORM\JoinTable(name="manufacturer_has_comment",
     *   joinColumns={
     *     @ORM\JoinColumn(name="manufacturer_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="comment_id", referencedColumnName="id")
     *   }
     * )
     */
    private $comment;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="WuCore\FrontBundle\Entity\Picture", inversedBy="manufacturer")
     * @ORM\JoinTable(name="manufacturer_has_picture",
     *   joinColumns={
     *     @ORM\JoinColumn(name="manufacturer_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="picture_id", referencedColumnName="id")
     *   }
     * )
     */
    private $picture;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="WuCore\StatsBundle\Entity\StockTimeline", inversedBy="manufacturer")
     * @ORM\JoinTable(name="manufacturer_has_stock_timeline",
     *   joinColumns={
     *     @ORM\JoinColumn(name="manufacturer_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="stock_timeline_id", referencedColumnName="id")
     *   }
     * )
     */
    private $stockTimeline;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="WuCore\FrontBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \Country
     *
     * @ORM\ManyToOne(targetEntity="WuCore\FrontBundle\Entity\Country")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     * })
     */
    private $country;

    /**
     * @var \City
     *
     * @ORM\ManyToOne(targetEntity="WuCore\FrontBundle\Entity\City")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="city_id", referencedColumnName="id")
     * })
     */
    private $city;

    /**
     * @var \Manufacturer
     *
     * @ORM\ManyToOne(targetEntity="Manufacturer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="owner_id", referencedColumnName="id")
     * })
     */
    private $owner;

    /**
     * @var \Picture
     *
     * @ORM\ManyToOne(targetEntity="WuCore\FrontBundle\Entity\Picture")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cover_id", referencedColumnName="id")
     * })
     */
    private $cover;

    /**
     * @var \State
     *
     * @ORM\ManyToOne(targetEntity="WuCore\FrontBundle\Entity\State")
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
        $this->picture = new \Doctrine\Common\Collections\ArrayCollection();
        $this->stockTimeline = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Manufacturer
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
     * Set adress
     *
     * @param string $adress
     * @return Manufacturer
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;
    
        return $this;
    }

    /**
     * Get adress
     *
     * @return string 
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set hqLat
     *
     * @param float $hqLat
     * @return Manufacturer
     */
    public function setHqLat($hqLat)
    {
        $this->hqLat = $hqLat;
    
        return $this;
    }

    /**
     * Get hqLat
     *
     * @return float 
     */
    public function getHqLat()
    {
        return $this->hqLat;
    }

    /**
     * Set hqLong
     *
     * @param float $hqLong
     * @return Manufacturer
     */
    public function setHqLong($hqLong)
    {
        $this->hqLong = $hqLong;
    
        return $this;
    }

    /**
     * Get hqLong
     *
     * @return float 
     */
    public function getHqLong()
    {
        return $this->hqLong;
    }

    /**
     * Set web
     *
     * @param string $web
     * @return Manufacturer
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
     * Set longDesc
     *
     * @param string $longDesc
     * @return Manufacturer
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
     * Set foundedAt
     *
     * @param \DateTime $foundedAt
     * @return Manufacturer
     */
    public function setFoundedAt($foundedAt)
    {
        $this->foundedAt = $foundedAt;
    
        return $this;
    }

    /**
     * Get foundedAt
     *
     * @return \DateTime 
     */
    public function getFoundedAt()
    {
        return $this->foundedAt;
    }

    /**
     * Set closedAt
     *
     * @param \DateTime $closedAt
     * @return Manufacturer
     */
    public function setClosedAt($closedAt)
    {
        $this->closedAt = $closedAt;
    
        return $this;
    }

    /**
     * Get closedAt
     *
     * @return \DateTime 
     */
    public function getClosedAt()
    {
        return $this->closedAt;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Manufacturer
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
     * @return Manufacturer
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
     * Set contactPhone
     *
     * @param string $contactPhone
     * @return Manufacturer
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
     * @return Manufacturer
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
     * @return Manufacturer
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
     * @return Manufacturer
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
     * Set stockRef
     *
     * @param string $stockRef
     * @return Manufacturer
     */
    public function setStockRef($stockRef)
    {
        $this->stockRef = $stockRef;
    
        return $this;
    }

    /**
     * Get stockRef
     *
     * @return string 
     */
    public function getStockRef()
    {
        return $this->stockRef;
    }

    /**
     * Set stockValue
     *
     * @param float $stockValue
     * @return Manufacturer
     */
    public function setStockValue($stockValue)
    {
        $this->stockValue = $stockValue;
    
        return $this;
    }

    /**
     * Get stockValue
     *
     * @return float 
     */
    public function getStockValue()
    {
        return $this->stockValue;
    }

    /**
     * Set stockDir
     *
     * @param string $stockDir
     * @return Manufacturer
     */
    public function setStockDir($stockDir)
    {
        $this->stockDir = $stockDir;
    
        return $this;
    }

    /**
     * Get stockDir
     *
     * @return string 
     */
    public function getStockDir()
    {
        return $this->stockDir;
    }

    /**
     * Add category
     *
     * @param \WuCore\ProductBundle\Entity\Category $category
     * @return Manufacturer
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
     * @return Manufacturer
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
     * Add picture
     *
     * @param \WuCore\ProductBundle\Entity\Picture $picture
     * @return Manufacturer
     */
    public function addPicture(\WuCore\ProductBundle\Entity\Picture $picture)
    {
        $this->picture[] = $picture;
    
        return $this;
    }

    /**
     * Remove picture
     *
     * @param \WuCore\ProductBundle\Entity\Picture $picture
     */
    public function removePicture(\WuCore\ProductBundle\Entity\Picture $picture)
    {
        $this->picture->removeElement($picture);
    }

    /**
     * Get picture
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Add stockTimeline
     *
     * @param \WuCore\ProductBundle\Entity\StockTimeline $stockTimeline
     * @return Manufacturer
     */
    public function addStockTimeline(\WuCore\ProductBundle\Entity\StockTimeline $stockTimeline)
    {
        $this->stockTimeline[] = $stockTimeline;
    
        return $this;
    }

    /**
     * Remove stockTimeline
     *
     * @param \WuCore\ProductBundle\Entity\StockTimeline $stockTimeline
     */
    public function removeStockTimeline(\WuCore\ProductBundle\Entity\StockTimeline $stockTimeline)
    {
        $this->stockTimeline->removeElement($stockTimeline);
    }

    /**
     * Get stockTimeline
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getStockTimeline()
    {
        return $this->stockTimeline;
    }

    /**
     * Set user
     *
     * @param \WuCore\ProductBundle\Entity\User $user
     * @return Manufacturer
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
     * Set country
     *
     * @param \WuCore\ProductBundle\Entity\Country $country
     * @return Manufacturer
     */
    public function setCountry(\WuCore\ProductBundle\Entity\Country $country = null)
    {
        $this->country = $country;
    
        return $this;
    }

    /**
     * Get country
     *
     * @return \WuCore\ProductBundle\Entity\Country 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set city
     *
     * @param \WuCore\ProductBundle\Entity\City $city
     * @return Manufacturer
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
     * Set owner
     *
     * @param \WuCore\ProductBundle\Entity\Manufacturer $owner
     * @return Manufacturer
     */
    public function setOwner(\WuCore\ProductBundle\Entity\Manufacturer $owner = null)
    {
        $this->owner = $owner;
    
        return $this;
    }

    /**
     * Get owner
     *
     * @return \WuCore\ProductBundle\Entity\Manufacturer 
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set cover
     *
     * @param \WuCore\ProductBundle\Entity\Picture $cover
     * @return Manufacturer
     */
    public function setCover(\WuCore\ProductBundle\Entity\Picture $cover = null)
    {
        $this->cover = $cover;
    
        return $this;
    }

    /**
     * Get cover
     *
     * @return \WuCore\ProductBundle\Entity\Picture 
     */
    public function getCover()
    {
        return $this->cover;
    }

    /**
     * Set state
     *
     * @param \WuCore\ProductBundle\Entity\State $state
     * @return Manufacturer
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