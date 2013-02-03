<?php

namespace WuCore\CentralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WishItem
 *
 * @ORM\Table(name="wish_item")
 * @ORM\Entity(repositoryClass="WuCore\CentralBundle\Repository\WishItemRepository")
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
     * @param \WuCore\CentralBundle\Entity\BoardFolder $boardFolder
     * @return WishItem
     */
    public function setBoardFolder(\WuCore\CentralBundle\Entity\BoardFolder $boardFolder = null)
    {
        $this->boardFolder = $boardFolder;
    
        return $this;
    }

    /**
     * Get boardFolder
     *
     * @return \WuCore\CentralBundle\Entity\BoardFolder 
     */
    public function getBoardFolder()
    {
        return $this->boardFolder;
    }

    /**
     * Set product
     *
     * @param \WuCore\CentralBundle\Entity\Product $product
     * @return WishItem
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
     * Set user
     *
     * @param \WuCore\CentralBundle\Entity\User $user
     * @return WishItem
     */
    public function setUser(\WuCore\CentralBundle\Entity\User $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \WuCore\CentralBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}