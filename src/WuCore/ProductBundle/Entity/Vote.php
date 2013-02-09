<?php

namespace WuCore\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vote
 *
 * @ORM\Table(name="vote")
 * @ORM\Entity
 */
class Vote
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
     * @var integer
     *
     * @ORM\Column(name="value", type="integer", nullable=false)
     */
    private $value;

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
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \Post
     *
     * @ORM\ManyToOne(targetEntity="Post")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="post_id", referencedColumnName="id")
     * })
     */
    private $post;

    /**
     * @var \Comparaison
     *
     * @ORM\ManyToOne(targetEntity="Comparaison")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="comparaison_id", referencedColumnName="id")
     * })
     */
    private $comparaison;

    /**
     * @var \Product
     *
     * @ORM\ManyToOne(targetEntity="Product")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     * })
     */
    private $product;

    /**
     * @var \Specification
     *
     * @ORM\ManyToOne(targetEntity="Specification")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="specification_id", referencedColumnName="id")
     * })
     */
    private $specification;



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
     * Set value
     *
     * @param integer $value
     * @return Vote
     */
    public function setValue($value)
    {
        $this->value = $value;
    
        return $this;
    }

    /**
     * Get value
     *
     * @return integer 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Vote
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
     * @return Vote
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
     * Set user
     *
     * @param \WuCore\ProductBundle\Entity\User $user
     * @return Vote
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
     * Set post
     *
     * @param \WuCore\ProductBundle\Entity\Post $post
     * @return Vote
     */
    public function setPost(\WuCore\ProductBundle\Entity\Post $post = null)
    {
        $this->post = $post;
    
        return $this;
    }

    /**
     * Get post
     *
     * @return \WuCore\ProductBundle\Entity\Post 
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * Set comparaison
     *
     * @param \WuCore\ProductBundle\Entity\Comparaison $comparaison
     * @return Vote
     */
    public function setComparaison(\WuCore\ProductBundle\Entity\Comparaison $comparaison = null)
    {
        $this->comparaison = $comparaison;
    
        return $this;
    }

    /**
     * Get comparaison
     *
     * @return \WuCore\ProductBundle\Entity\Comparaison 
     */
    public function getComparaison()
    {
        return $this->comparaison;
    }

    /**
     * Set product
     *
     * @param \WuCore\ProductBundle\Entity\Product $product
     * @return Vote
     */
    public function setProduct(\WuCore\ProductBundle\Entity\Product $product = null)
    {
        $this->product = $product;
    
        return $this;
    }

    /**
     * Get product
     *
     * @return \WuCore\ProductBundle\Entity\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set specification
     *
     * @param \WuCore\ProductBundle\Entity\Specification $specification
     * @return Vote
     */
    public function setSpecification(\WuCore\ProductBundle\Entity\Specification $specification = null)
    {
        $this->specification = $specification;
    
        return $this;
    }

    /**
     * Get specification
     *
     * @return \WuCore\ProductBundle\Entity\Specification 
     */
    public function getSpecification()
    {
        return $this->specification;
    }
}