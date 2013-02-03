<?php

namespace WuCore\CentralBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="WuCore\CentralBundle\Repository\UserRepository")
 * @ORM\Entity
 */
class User extends BaseUser {

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Credibility", inversedBy="user")
     * @ORM\JoinTable(name="user_has_credibility",
     *   joinColumns={
     *     @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="credibility_id", referencedColumnName="id")
     *   }
     * )
     */
    private $credibility;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Notification", inversedBy="user")
     * @ORM\JoinTable(name="user_has_notification",
     *   joinColumns={
     *     @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="notification_id", referencedColumnName="id")
     *   }
     * )
     */
    private $notification;

    /**
     * @var \City
     *
     * @ORM\ManyToOne(targetEntity="City")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="city_id", referencedColumnName="id")
     * })
     */
    private $city;

    /**
     * @var \Country
     *
     * @ORM\ManyToOne(targetEntity="Country")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     * })
     */
    private $country;

    /**
     * @var \Currency
     *
     * @ORM\ManyToOne(targetEntity="Currency")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="currency_id", referencedColumnName="id")
     * })
     */
    private $currency;

    /**
     * @var \Picture
     *
     * @ORM\ManyToOne(targetEntity="Picture")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="avatar", referencedColumnName="id")
     * })
     */
    private $avatar;

    /**
     * @var \State
     *
     * @ORM\ManyToOne(targetEntity="State")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="state_id", referencedColumnName="id")
     * })
     */
    private $state;

    /**
     * Constructor
     */
    public function __construct() {
        $this->credibility = new \Doctrine\Common\Collections\ArrayCollection();
        $this->notification = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add credibility
     *
     * @param \WuCore\CentralBundle\Entity\Credibility $credibility
     * @return User
     */
    public function addCredibility(\WuCore\CentralBundle\Entity\Credibility $credibility) {
        $this->credibility[] = $credibility;

        return $this;
    }

    /**
     * Remove credibility
     *
     * @param \WuCore\CentralBundle\Entity\Credibility $credibility
     */
    public function removeCredibility(\WuCore\CentralBundle\Entity\Credibility $credibility) {
        $this->credibility->removeElement($credibility);
    }

    /**
     * Get credibility
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCredibility() {
        return $this->credibility;
    }

    /**
     * Add notification
     *
     * @param \WuCore\CentralBundle\Entity\Notification $notification
     * @return User
     */
    public function addNotification(\WuCore\CentralBundle\Entity\Notification $notification) {
        $this->notification[] = $notification;

        return $this;
    }

    /**
     * Remove notification
     *
     * @param \WuCore\CentralBundle\Entity\Notification $notification
     */
    public function removeNotification(\WuCore\CentralBundle\Entity\Notification $notification) {
        $this->notification->removeElement($notification);
    }

    /**
     * Get notification
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNotification() {
        return $this->notification;
    }

    /**
     * Set city
     *
     * @param \WuCore\CentralBundle\Entity\City $city
     * @return User
     */
    public function setCity(\WuCore\CentralBundle\Entity\City $city = null) {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return \WuCore\CentralBundle\Entity\City 
     */
    public function getCity() {
        return $this->city;
    }

    /**
     * Set country
     *
     * @param \WuCore\CentralBundle\Entity\Country $country
     * @return User
     */
    public function setCountry(\WuCore\CentralBundle\Entity\Country $country = null) {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \WuCore\CentralBundle\Entity\Country 
     */
    public function getCountry() {
        return $this->country;
    }

    /**
     * Set currency
     *
     * @param \WuCore\CentralBundle\Entity\Currency $currency
     * @return User
     */
    public function setCurrency(\WuCore\CentralBundle\Entity\Currency $currency = null) {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get currency
     *
     * @return \WuCore\CentralBundle\Entity\Currency 
     */
    public function getCurrency() {
        return $this->currency;
    }

    /**
     * Set avatar
     *
     * @param \WuCore\CentralBundle\Entity\Picture $avatar
     * @return User
     */
    public function setAvatar(\WuCore\CentralBundle\Entity\Picture $avatar = null) {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return \WuCore\CentralBundle\Entity\Picture 
     */
    public function getAvatar() {
        return $this->avatar;
    }

    /**
     * Set state
     *
     * @param \WuCore\CentralBundle\Entity\State $state
     * @return User
     */
    public function setState(\WuCore\CentralBundle\Entity\State $state = null) {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return \WuCore\CentralBundle\Entity\State 
     */
    public function getState() {
        return $this->state;
    }

}