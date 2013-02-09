<?php

namespace WuCore\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WishItem
 *
 * @ORM\Table(name="wish_item")
 * @ORM\Entity
 */
class WishItem
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
     * @var boolean
     *
     * @ORM\Column(name="is_posessed", type="boolean", nullable=false)
     */
    private $isPosessed;

    /**
     * @var \BoardFolder
     *
     * @ORM\ManyToOne(targetEntity="BoardFolder")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="board_folder_id", referencedColumnName="id")
     * })
     */
    private $boardFolder;

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
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;



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
     * @return WishItem
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
     * Set isPosessed
     *
     * @param boolean $isPosessed
     * @return WishItem
     */
    public function setIsPosessed($isPosessed)
    {
        $this->isPosessed = $isPosessed;
    
        return $this;
    }

    /**
     * Get isPosessed
     *
     * @return boolean 
     */
    public function getIsPosessed()
    {
        return $this->isPosessed;
    }

    /**
     * Set boardFolder
     *
     * @param \WuCore\FrontBundle\Entity\BoardFolder $boardFolder
     * @return WishItem
     */
    public function setBoardFolder(\WuCore\FrontBundle\Entity\BoardFolder $boardFolder = null)
    {
        $this->boardFolder = $boardFolder;
    
        return $this;
    }

    /**
     * Get boardFolder
     *
     * @return \WuCore\FrontBundle\Entity\BoardFolder 
     */
    public function getBoardFolder()
    {
        return $this->boardFolder;
    }

    /**
     * Set product
     *
     * @param \WuCore\FrontBundle\Entity\Product $product
     * @return WishItem
     */
    public function setProduct(\WuCore\FrontBundle\Entity\Product $product = null)
    {
        $this->product = $product;
    
        return $this;
    }

    /**
     * Get product
     *
     * @return \WuCore\FrontBundle\Entity\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set user
     *
     * @param \WuCore\FrontBundle\Entity\User $user
     * @return WishItem
     */
    public function setUser(\WuCore\FrontBundle\Entity\User $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \WuCore\FrontBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}