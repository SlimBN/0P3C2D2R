<?php

namespace WuCore\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use WuCore\FrontBundle\Entity\User;

/**
 * Feedback
 *
 * @ORM\Table(name="feedback")
 * @ORM\Entity
 */
class Feedback
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
     * @ORM\Column(name="label", type="string", length=64, nullable=true)
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=true)
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var string
     *
     * @ORM\Column(name="is_fixed", type="string", nullable=true)
     */
    private $isFixed;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fixed_at", type="datetime", nullable=true)
     */
    private $fixedAt;

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
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fixed_by_id", referencedColumnName="id")
     * })
     */
    private $fixedBy;



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
     * Set label
     *
     * @param string $label
     * @return Feedback
     */
    public function setLabel($label)
    {
        $this->label = $label;
    
        return $this;
    }

    /**
     * Get label
     *
     * @return string 
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Feedback
     */
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Feedback
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
     * Set isFixed
     *
     * @param string $isFixed
     * @return Feedback
     */
    public function setIsFixed($isFixed)
    {
        $this->isFixed = $isFixed;
    
        return $this;
    }

    /**
     * Get isFixed
     *
     * @return string 
     */
    public function getIsFixed()
    {
        return $this->isFixed;
    }

    /**
     * Set fixedAt
     *
     * @param \DateTime $fixedAt
     * @return Feedback
     */
    public function setFixedAt($fixedAt)
    {
        $this->fixedAt = $fixedAt;
    
        return $this;
    }

    /**
     * Get fixedAt
     *
     * @return \DateTime 
     */
    public function getFixedAt()
    {
        return $this->fixedAt;
    }

    /**
     * Set user
     *
     * @param \WuCore\FrontBundle\Entity\User $user
     * @return Feedback
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

    /**
     * Set fixedBy
     *
     * @param \WuCore\FrontBundle\Entity\User $fixedBy
     * @return Feedback
     */
    public function setFixedBy(\WuCore\FrontBundle\Entity\User $fixedBy = null)
    {
        $this->fixedBy = $fixedBy;
    
        return $this;
    }

    /**
     * Get fixedBy
     *
     * @return \WuCore\FrontBundle\Entity\User 
     */
    public function getFixedBy()
    {
        return $this->fixedBy;
    }
}