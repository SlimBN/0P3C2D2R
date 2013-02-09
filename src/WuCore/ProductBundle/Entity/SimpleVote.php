<?php

namespace WuCore\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SimpleVote
 *
 * @ORM\Table(name="simple_vote")
 * @ORM\Entity
 */
class SimpleVote
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
     * @var boolean
     *
     * @ORM\Column(name="is_in_favor", type="boolean", nullable=false)
     */
    private $isInFavor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

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
     * @var \Manufacturer
     *
     * @ORM\ManyToOne(targetEntity="Manufacturer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="manufacturer_id", referencedColumnName="id")
     * })
     */
    private $manufacturer;

    /**
     * @var \Answer
     *
     * @ORM\ManyToOne(targetEntity="Answer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="answer_id", referencedColumnName="id")
     * })
     */
    private $answer;

    /**
     * @var \Comment
     *
     * @ORM\ManyToOne(targetEntity="Comment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="comment_id", referencedColumnName="id")
     * })
     */
    private $comment;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set isInFavor
     *
     * @param boolean $isInFavor
     * @return SimpleVote
     */
    public function setIsInFavor($isInFavor)
    {
        $this->isInFavor = $isInFavor;
    
        return $this;
    }

    /**
     * Get isInFavor
     *
     * @return boolean 
     */
    public function getIsInFavor()
    {
        return $this->isInFavor;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return SimpleVote
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
     * Set shop
     *
     * @param \WuCore\ProductBundle\Entity\Shop $shop
     * @return SimpleVote
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

    /**
     * Set manufacturer
     *
     * @param \WuCore\ProductBundle\Entity\Manufacturer $manufacturer
     * @return SimpleVote
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
     * Set answer
     *
     * @param \WuCore\ProductBundle\Entity\Answer $answer
     * @return SimpleVote
     */
    public function setAnswer(\WuCore\ProductBundle\Entity\Answer $answer = null)
    {
        $this->answer = $answer;
    
        return $this;
    }

    /**
     * Get answer
     *
     * @return \WuCore\ProductBundle\Entity\Answer 
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Set comment
     *
     * @param \WuCore\ProductBundle\Entity\Comment $comment
     * @return SimpleVote
     */
    public function setComment(\WuCore\ProductBundle\Entity\Comment $comment = null)
    {
        $this->comment = $comment;
    
        return $this;
    }

    /**
     * Get comment
     *
     * @return \WuCore\ProductBundle\Entity\Comment 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set product
     *
     * @param \WuCore\ProductBundle\Entity\Product $product
     * @return SimpleVote
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
}