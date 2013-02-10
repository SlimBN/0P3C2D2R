<?php

namespace WuCore\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity
 */
class Product
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
     * @ORM\Column(name="refname", type="string", length=64, nullable=true)
     */
    private $refname;

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
     * @var \DateTime
     *
     * @ORM\Column(name="released_at", type="date", nullable=true)
     */
    private $releasedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="long_desc", type="text", nullable=true)
     */
    private $longDesc;

    /**
     * @var integer
     *
     * @ORM\Column(name="manufacturer_id", type="integer", nullable=false)
     */
    private $manufacturerId;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=64, nullable=false)
     */
    private $slug;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Category", inversedBy="product")
     * @ORM\JoinTable(name="product_has_category",
     *   joinColumns={
     *     @ORM\JoinColumn(name="product_id", referencedColumnName="id")
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
     * @ORM\ManyToMany(targetEntity="Comment", inversedBy="product")
     * @ORM\JoinTable(name="product_has_comment",
     *   joinColumns={
     *     @ORM\JoinColumn(name="product_id", referencedColumnName="id")
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
     * @ORM\ManyToMany(targetEntity="WuCore\FrontBundle\Entity\Picture", inversedBy="product")
     * @ORM\JoinTable(name="product_has_picture",
     *   joinColumns={
     *     @ORM\JoinColumn(name="product_id", referencedColumnName="id")
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
     * @ORM\ManyToMany(targetEntity="Price", inversedBy="product")
     * @ORM\JoinTable(name="product_has_price",
     *   joinColumns={
     *     @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="price_id", referencedColumnName="id")
     *   }
     * )
     */
    private $price;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Specification", inversedBy="product")
     * @ORM\JoinTable(name="product_has_specification",
     *   joinColumns={
     *     @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="specification_id", referencedColumnName="id")
     *   }
     * )
     */
    private $specification;

    /**
     * @var \Product
     *
     * @ORM\ManyToOne(targetEntity="Product")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="original_product_id", referencedColumnName="id")
     * })
     */
    private $originalProduct;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="WuCore\FrontBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="brag_id", referencedColumnName="id")
     * })
     */
    private $brag;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->category = new \Doctrine\Common\Collections\ArrayCollection();
        $this->comment = new \Doctrine\Common\Collections\ArrayCollection();
        $this->picture = new \Doctrine\Common\Collections\ArrayCollection();
        $this->price = new \Doctrine\Common\Collections\ArrayCollection();
        $this->specification = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Product
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
     * Set refname
     *
     * @param string $refname
     * @return Product
     */
    public function setRefname($refname)
    {
        $this->refname = $refname;
    
        return $this;
    }

    /**
     * Get refname
     *
     * @return string 
     */
    public function getRefname()
    {
        return $this->refname;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Product
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
     * @return Product
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
     * Set releasedAt
     *
     * @param \DateTime $releasedAt
     * @return Product
     */
    public function setReleasedAt($releasedAt)
    {
        $this->releasedAt = $releasedAt;
    
        return $this;
    }

    /**
     * Get releasedAt
     *
     * @return \DateTime 
     */
    public function getReleasedAt()
    {
        return $this->releasedAt;
    }

    /**
     * Set longDesc
     *
     * @param string $longDesc
     * @return Product
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
     * Set manufacturerId
     *
     * @param integer $manufacturerId
     * @return Product
     */
    public function setManufacturerId($manufacturerId)
    {
        $this->manufacturerId = $manufacturerId;
    
        return $this;
    }

    /**
     * Get manufacturerId
     *
     * @return integer 
     */
    public function getManufacturerId()
    {
        return $this->manufacturerId;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Product
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
     * @return Product
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
     * @return Product
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
     * @return Product
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
     * Add price
     *
     * @param \WuCore\ProductBundle\Entity\Price $price
     * @return Product
     */
    public function addPrice(\WuCore\ProductBundle\Entity\Price $price)
    {
        $this->price[] = $price;
    
        return $this;
    }

    /**
     * Remove price
     *
     * @param \WuCore\ProductBundle\Entity\Price $price
     */
    public function removePrice(\WuCore\ProductBundle\Entity\Price $price)
    {
        $this->price->removeElement($price);
    }

    /**
     * Get price
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Add specification
     *
     * @param \WuCore\ProductBundle\Entity\Specification $specification
     * @return Product
     */
    public function addSpecification(\WuCore\ProductBundle\Entity\Specification $specification)
    {
        $this->specification[] = $specification;
    
        return $this;
    }

    /**
     * Remove specification
     *
     * @param \WuCore\ProductBundle\Entity\Specification $specification
     */
    public function removeSpecification(\WuCore\ProductBundle\Entity\Specification $specification)
    {
        $this->specification->removeElement($specification);
    }

    /**
     * Get specification
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSpecification()
    {
        return $this->specification;
    }

    /**
     * Set originalProduct
     *
     * @param \WuCore\ProductBundle\Entity\Product $originalProduct
     * @return Product
     */
    public function setOriginalProduct(\WuCore\ProductBundle\Entity\Product $originalProduct = null)
    {
        $this->originalProduct = $originalProduct;
    
        return $this;
    }

    /**
     * Get originalProduct
     *
     * @return \WuCore\ProductBundle\Entity\Product 
     */
    public function getOriginalProduct()
    {
        return $this->originalProduct;
    }

    /**
     * Set brag
     *
     * @param \WuCore\ProductBundle\Entity\User $brag
     * @return Product
     */
    public function setBrag(\WuCore\ProductBundle\Entity\User $brag = null)
    {
        $this->brag = $brag;
    
        return $this;
    }

    /**
     * Get brag
     *
     * @return \WuCore\ProductBundle\Entity\User 
     */
    public function getBrag()
    {
        return $this->brag;
    }
}