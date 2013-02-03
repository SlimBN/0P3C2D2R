<?php

namespace WuCore\CentralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdminContact
 *
 * @ORM\Table(name="admin_contact")
 * @ORM\Entity(repositoryClass="WuCore\CentralBundle\Repository\AdminContactRepository")
 * @ORM\Entity
 */
class AdminContact
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
     * @ORM\Column(name="is_closed", type="boolean", nullable=false)
     */
    private $isClosed;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Message", inversedBy="adminContact")
     * @ORM\JoinTable(name="admin_contact_has_message",
     *   joinColumns={
     *     @ORM\JoinColumn(name="admin_contact_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="message_id", referencedColumnName="id")
     *   }
     * )
     */
    private $message;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="handler_id", referencedColumnName="id")
     * })
     */
    private $handler;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->message = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set isClosed
     *
     * @param boolean $isClosed
     * @return AdminContact
     */
    public function setIsClosed($isClosed)
    {
        $this->isClosed = $isClosed;
    
        return $this;
    }

    /**
     * Get isClosed
     *
     * @return boolean 
     */
    public function getIsClosed()
    {
        return $this->isClosed;
    }

    /**
     * Add message
     *
     * @param \WuCore\CentralBundle\Entity\Message $message
     * @return AdminContact
     */
    public function addMessage(\WuCore\CentralBundle\Entity\Message $message)
    {
        $this->message[] = $message;
    
        return $this;
    }

    /**
     * Remove message
     *
     * @param \WuCore\CentralBundle\Entity\Message $message
     */
    public function removeMessage(\WuCore\CentralBundle\Entity\Message $message)
    {
        $this->message->removeElement($message);
    }

    /**
     * Get message
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set handler
     *
     * @param \WuCore\CentralBundle\Entity\User $handler
     * @return AdminContact
     */
    public function setHandler(\WuCore\CentralBundle\Entity\User $handler = null)
    {
        $this->handler = $handler;
    
        return $this;
    }

    /**
     * Get handler
     *
     * @return \WuCore\CentralBundle\Entity\User 
     */
    public function getHandler()
    {
        return $this->handler;
    }
}