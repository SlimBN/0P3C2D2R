<?php

namespace WuCore\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comparaison
 *
 * @ORM\Table(name="comparaison")
 * @ORM\Entity
 */
class Comparaison
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
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=128, nullable=false)
     */
    private $slug;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Comment", inversedBy="comparaison")
     * @ORM\JoinTable(name="comparaison_has_comment",
     *   joinColumns={
     *     @ORM\JoinColumn(name="comparaison_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="comment_id", referencedColumnName="id")
     *   }
     * )
     */
    private $comment;

    /**
     * @var \Category
     *
     * @ORM\ManyToOne(targetEntity="Category")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     * })
     */
    private $category;

    /**
     * @var \Product
     *
     * @ORM\ManyToOne(targetEntity="Product")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="first_product_id", referencedColumnName="id")
     * })
     */
    private $firstProduct;

    /**
     * @var \Product
     *
     * @ORM\ManyToOne(targetEntity="Product")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="second_product_id", referencedColumnName="id")
     * })
     */
    private $secondProduct;

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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Comparaison
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
     * Set slug
     *
     * @param string $slug
     * @return Comparaison
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
     * Add comment
     *
     * @param \WuCore\ProductBundle\Entity\Comment $comment
     * @return Comparaison
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
     * Set category
     *
     * @param \WuCore\ProductBundle\Entity\Category $category
     * @return Comparaison
     */
    public function setCategory(\WuCore\ProductBundle\Entity\Category $category = null)
    {
        $this->category = $category;
    
        return $this;
    }

    /**
     * Get category
     *
     * @return \WuCore\ProductBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set firstProduct
     *
     * @param \WuCore\ProductBundle\Entity\Product $firstProduct
     * @return Comparaison
     */
    public function setFirstProduct(\WuCore\ProductBundle\Entity\Product $firstProduct = null)
    {
        $this->firstProduct = $firstProduct;
    
        return $this;
    }

    /**
     * Get firstProduct
     *
     * @return \WuCore\ProductBundle\Entity\Product 
     */
    public function getFirstProduct()
    {
        return $this->firstProduct;
    }

    /**
     * Set secondProduct
     *
     * @param \WuCore\ProductBundle\Entity\Product $secondProduct
     * @return Comparaison
     */
    public function setSecondProduct(\WuCore\ProductBundle\Entity\Product $secondProduct = null)
    {
        $this->secondProduct = $secondProduct;
    
        return $this;
    }

    /**
     * Get secondProduct
     *
     * @return \WuCore\ProductBundle\Entity\Product 
     */
    public function getSecondProduct()
    {
        return $this->secondProduct;
    }

    /**
     * Set user
     *
     * @param \WuCore\ProductBundle\Entity\User $user
     * @return Comparaison
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