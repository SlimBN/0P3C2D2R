<?php

namespace WuCore\StatsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use WuCore\FrontBundle\Entity\User;
use WuCore\StatsBundle\Entity\Device;

/**
 * ResearchQuery
 *
 * @ORM\Table(name="research_query")
 * @ORM\Entity
 */
class ResearchQuery
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
     * @ORM\Column(name="key_word", type="string", length=64, nullable=false)
     */
    private $keyWord;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=64, nullable=false)
     */
    private $slug;

    /**
     * @var integer
     *
     * @ORM\Column(name="search_count", type="integer", nullable=false)
     */
    private $searchCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="search_success", type="integer", nullable=false)
     */
    private $searchSuccess;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="User", inversedBy="researchQuery")
     * @ORM\JoinTable(name="research_query_has_user",
     *   joinColumns={
     *     @ORM\JoinColumn(name="research_query_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     *   }
     * )
     */
    private $user;

    /**
     * @var \Device
     *
     * @ORM\ManyToOne(targetEntity="Device")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="device_id", referencedColumnName="id")
     * })
     */
    private $device;

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
     * Set keyWord
     *
     * @param string $keyWord
     * @return ResearchQuery
     */
    public function setKeyWord($keyWord)
    {
        $this->keyWord = $keyWord;
    
        return $this;
    }

    /**
     * Get keyWord
     *
     * @return string 
     */
    public function getKeyWord()
    {
        return $this->keyWord;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return ResearchQuery
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
     * Set searchCount
     *
     * @param integer $searchCount
     * @return ResearchQuery
     */
    public function setSearchCount($searchCount)
    {
        $this->searchCount = $searchCount;
    
        return $this;
    }

    /**
     * Get searchCount
     *
     * @return integer 
     */
    public function getSearchCount()
    {
        return $this->searchCount;
    }

    /**
     * Set searchSuccess
     *
     * @param integer $searchSuccess
     * @return ResearchQuery
     */
    public function setSearchSuccess($searchSuccess)
    {
        $this->searchSuccess = $searchSuccess;
    
        return $this;
    }

    /**
     * Get searchSuccess
     *
     * @return integer 
     */
    public function getSearchSuccess()
    {
        return $this->searchSuccess;
    }

    /**
     * Add user
     *
     * @param \WuCore\StatsBundle\Entity\User $user
     * @return ResearchQuery
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

    /**
     * Set device
     *
     * @param \WuCore\StatsBundle\Entity\Device $device
     * @return ResearchQuery
     */
    public function setDevice(\WuCore\StatsBundle\Entity\Device $device = null)
    {
        $this->device = $device;
    
        return $this;
    }

    /**
     * Get device
     *
     * @return \WuCore\StatsBundle\Entity\Device 
     */
    public function getDevice()
    {
        return $this->device;
    }
}