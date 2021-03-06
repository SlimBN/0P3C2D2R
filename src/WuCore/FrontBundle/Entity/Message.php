<?php

namespace WuCore\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use WuCore\FrontBundle\Entity\User;
use WuCore\FrontBundle\Entity\AdminContact;
use WuCore\FrontBundle\Entity\Message;

/**
 * Message
 *
 * @ORM\Table(name="message")
 * @ORM\Entity
 */
class Message
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
     * @ORM\Column(name="subject", type="string", length=145, nullable=true)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=true)
     */
    private $content;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_seen", type="boolean", nullable=true)
     */
    private $isSeen;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AdminContact", mappedBy="message")
     */
    private $adminContact;

    /**
     * @var \Message
     *
     * @ORM\ManyToOne(targetEntity="Message")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     * })
     */
    private $parent;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sender_id", referencedColumnName="id")
     * })
     */
    private $sender;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reciever_id", referencedColumnName="id")
     * })
     */
    private $reciever;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="first_delete_id", referencedColumnName="id")
     * })
     */
    private $firstDelete;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="second_delete_id", referencedColumnName="id")
     * })
     */
    private $secondDelete;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->adminContact = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set subject
     *
     * @param string $subject
     * @return Message
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    
        return $this;
    }

    /**
     * Get subject
     *
     * @return string 
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Message
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
     * Set isSeen
     *
     * @param boolean $isSeen
     * @return Message
     */
    public function setIsSeen($isSeen)
    {
        $this->isSeen = $isSeen;
    
        return $this;
    }

    /**
     * Get isSeen
     *
     * @return boolean 
     */
    public function getIsSeen()
    {
        return $this->isSeen;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Message
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
     * Add adminContact
     *
     * @param \WuCore\FrontBundle\Entity\AdminContact $adminContact
     * @return Message
     */
    public function addAdminContact(\WuCore\FrontBundle\Entity\AdminContact $adminContact)
    {
        $this->adminContact[] = $adminContact;
    
        return $this;
    }

    /**
     * Remove adminContact
     *
     * @param \WuCore\FrontBundle\Entity\AdminContact $adminContact
     */
    public function removeAdminContact(\WuCore\FrontBundle\Entity\AdminContact $adminContact)
    {
        $this->adminContact->removeElement($adminContact);
    }

    /**
     * Get adminContact
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAdminContact()
    {
        return $this->adminContact;
    }

    /**
     * Set parent
     *
     * @param \WuCore\FrontBundle\Entity\Message $parent
     * @return Message
     */
    public function setParent(\WuCore\FrontBundle\Entity\Message $parent = null)
    {
        $this->parent = $parent;
    
        return $this;
    }

    /**
     * Get parent
     *
     * @return \WuCore\FrontBundle\Entity\Message 
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set sender
     *
     * @param \WuCore\FrontBundle\Entity\User $sender
     * @return Message
     */
    public function setSender(\WuCore\FrontBundle\Entity\User $sender = null)
    {
        $this->sender = $sender;
    
        return $this;
    }

    /**
     * Get sender
     *
     * @return \WuCore\FrontBundle\Entity\User 
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Set reciever
     *
     * @param \WuCore\FrontBundle\Entity\User $reciever
     * @return Message
     */
    public function setReciever(\WuCore\FrontBundle\Entity\User $reciever = null)
    {
        $this->reciever = $reciever;
    
        return $this;
    }

    /**
     * Get reciever
     *
     * @return \WuCore\FrontBundle\Entity\User 
     */
    public function getReciever()
    {
        return $this->reciever;
    }

    /**
     * Set firstDelete
     *
     * @param \WuCore\FrontBundle\Entity\User $firstDelete
     * @return Message
     */
    public function setFirstDelete(\WuCore\FrontBundle\Entity\User $firstDelete = null)
    {
        $this->firstDelete = $firstDelete;
    
        return $this;
    }

    /**
     * Get firstDelete
     *
     * @return \WuCore\FrontBundle\Entity\User 
     */
    public function getFirstDelete()
    {
        return $this->firstDelete;
    }

    /**
     * Set secondDelete
     *
     * @param \WuCore\FrontBundle\Entity\User $secondDelete
     * @return Message
     */
    public function setSecondDelete(\WuCore\FrontBundle\Entity\User $secondDelete = null)
    {
        $this->secondDelete = $secondDelete;
    
        return $this;
    }

    /**
     * Get secondDelete
     *
     * @return \WuCore\FrontBundle\Entity\User 
     */
    public function getSecondDelete()
    {
        return $this->secondDelete;
    }
}