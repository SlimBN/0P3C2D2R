<?php

namespace WuCore\StatsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Device
 *
 * @ORM\Table(name="device")
 * @ORM\Entity
 */
class Device
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
     * @ORM\Column(name="type", type="string", nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=64, nullable=true)
     */
    private $model;

    /**
     * @var string
     *
     * @ORM\Column(name="browser", type="string", length=64, nullable=true)
     */
    private $browser;

    /**
     * @var string
     *
     * @ORM\Column(name="model_slug", type="string", length=64, nullable=true)
     */
    private $modelSlug;

    /**
     * @var string
     *
     * @ORM\Column(name="browser_slug", type="string", length=64, nullable=true)
     */
    private $browserSlug;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="vists_count", type="integer", nullable=true)
     */
    private $vistsCount;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="WuCore\FrontBundle\Entity\User", inversedBy="device")
     * @ORM\JoinTable(name="device_has_user",
     *   joinColumns={
     *     @ORM\JoinColumn(name="device_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     *   }
     * )
     */
    private $user;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set type
     *
     * @param string $type
     * @return Device
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set model
     *
     * @param string $model
     * @return Device
     */
    public function setModel($model)
    {
        $this->model = $model;
    
        return $this;
    }

    /**
     * Get model
     *
     * @return string 
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set browser
     *
     * @param string $browser
     * @return Device
     */
    public function setBrowser($browser)
    {
        $this->browser = $browser;
    
        return $this;
    }

    /**
     * Get browser
     *
     * @return string 
     */
    public function getBrowser()
    {
        return $this->browser;
    }

    /**
     * Set modelSlug
     *
     * @param string $modelSlug
     * @return Device
     */
    public function setModelSlug($modelSlug)
    {
        $this->modelSlug = $modelSlug;
    
        return $this;
    }

    /**
     * Get modelSlug
     *
     * @return string 
     */
    public function getModelSlug()
    {
        return $this->modelSlug;
    }

    /**
     * Set browserSlug
     *
     * @param string $browserSlug
     * @return Device
     */
    public function setBrowserSlug($browserSlug)
    {
        $this->browserSlug = $browserSlug;
    
        return $this;
    }

    /**
     * Get browserSlug
     *
     * @return string 
     */
    public function getBrowserSlug()
    {
        return $this->browserSlug;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Device
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
     * @return Device
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
     * Set vistsCount
     *
     * @param integer $vistsCount
     * @return Device
     */
    public function setVistsCount($vistsCount)
    {
        $this->vistsCount = $vistsCount;
    
        return $this;
    }

    /**
     * Get vistsCount
     *
     * @return integer 
     */
    public function getVistsCount()
    {
        return $this->vistsCount;
    }

    /**
     * Add user
     *
     * @param \WuCore\StatsBundle\Entity\User $user
     * @return Device
     */
    public function addUser(\WuCore\StatsBundle\Entity\User $user)
    {
        $this->user[] = $user;
    
        return $this;
    }

    /**
     * Remove user
     *
     * @param \WuCore\StatsBundle\Entity\User $user
     */
    public function removeUser(\WuCore\StatsBundle\Entity\User $user)
    {
        $this->user->removeElement($user);
    }

    /**
     * Get user
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUser()
    {
        return $this->user;
    }
}