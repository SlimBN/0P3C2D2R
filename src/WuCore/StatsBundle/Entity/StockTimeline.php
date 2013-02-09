<?php

namespace WuCore\StatsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StockTimeline
 *
 * @ORM\Table(name="stock_timeline")
 * @ORM\Entity
 */
class StockTimeline
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
     * @ORM\Column(name="stock_value", type="string", length=45, nullable=true)
     */
    private $stockValue;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;



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
     * Set stockValue
     *
     * @param string $stockValue
     * @return StockTimeline
     */
    public function setStockValue($stockValue)
    {
        $this->stockValue = $stockValue;
    
        return $this;
    }

    /**
     * Get stockValue
     *
     * @return string 
     */
    public function getStockValue()
    {
        return $this->stockValue;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return StockTimeline
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
}