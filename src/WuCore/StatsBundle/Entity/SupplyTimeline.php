<?php

namespace WuCore\StatsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SupplyTimeline
 *
 * @ORM\Table(name="supply_timeline")
 * @ORM\Entity
 */
class SupplyTimeline
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
     * @ORM\Column(name="supply_count", type="integer", nullable=true)
     */
    private $supplyCount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \Supply
     *
     * @ORM\ManyToOne(targetEntity="Supply")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="supply_id", referencedColumnName="id")
     * })
     */
    private $supply;



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
     * Set supplyCount
     *
     * @param integer $supplyCount
     * @return SupplyTimeline
     */
    public function setSupplyCount($supplyCount)
    {
        $this->supplyCount = $supplyCount;
    
        return $this;
    }

    /**
     * Get supplyCount
     *
     * @return integer 
     */
    public function getSupplyCount()
    {
        return $this->supplyCount;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return SupplyTimeline
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
     * Set supply
     *
     * @param \WuCore\StatsBundle\Entity\Supply $supply
     * @return SupplyTimeline
     */
    public function setSupply(\WuCore\StatsBundle\Entity\Supply $supply = null)
    {
        $this->supply = $supply;
    
        return $this;
    }

    /**
     * Get supply
     *
     * @return \WuCore\StatsBundle\Entity\Supply 
     */
    public function getSupply()
    {
        return $this->supply;
    }
}