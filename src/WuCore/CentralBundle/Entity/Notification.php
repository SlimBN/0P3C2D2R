<?php

namespace WuCore\CentralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notification
 *
 * @ORM\Table(name="notification")
 * @ORM\Entity(repositoryClass="WuCore\CentralBundle\Repository\NotificationRepository")
 * @ORM\Entity
 */
class Notification
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
     * @ORM\Column(name="content", type="string", length=128, nullable=false)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=128, nullable=false)
     */
    private $link;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="view_at", type="datetime", nullable=true)
     */
    private $viewAt;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Subscription", mappedBy="notification")
     */
    private $subscription;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="User", mappedBy="notification")
     */
    private $user;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->subscription = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set content
     *
     * @param string $content
     * @return Notification
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
     * Set link
     *
     * @param string $link
     * @return Notification
     */
    public function setLink($link)
    {
        $this->link = $link;
    
        return $this;
    }

    /**
     * Get link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return Notification
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Notification
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
     * Set viewAt
     *
     * @param \DateTime $viewAt
     * @return Notification
     */
    public function setViewAt($viewAt)
    {
        $this->viewAt = $viewAt;
    
        return $this;
    }

    /**
     * Get viewAt
     *
     * @return \DateTime 
     */
    public function getViewAt()
    {
        return $this->viewAt;
    }

    /**
     * Add subscription
     *
     * @param \WuCore\CentralBundle\Entity\Subscription $subscription
     * @return Notification
     */
    public function addSubscription(\WuCore\CentralBundle\Entity\Subscription $subscription)
    {
        $this->subscription[] = $subscription;
    
        return $this;
    }

    /**
     * Remove subscription
     *
     * @param \WuCore\CentralBundle\Entity\Subscription $subscription
     */
    public function removeSubscription(\WuCore\CentralBundle\Entity\Subscription $subscription)
    {
        $this->subscription->removeElement($subscription);
    }

    /**
     * Get subscription
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * Add user
     *
     * @param \WuCore\CentralBundle\Entity\User $user
     * @return Notification
     */
    public function addUser(\WuCore\CentralBundle\Entity\User $user)
    {
        $this->user[] = $user;
    
        return $this;
    }

    /**
     * Remove user
     *
     * @param \WuCore\CentralBundle\Entity\User $user
     */
    public function removeUser(\WuCore\CentralBundle\Entity\User $user)
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