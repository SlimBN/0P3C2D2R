<?php

namespace WuCore\CentralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Country
 *
 * @ORM\Table(name="country")
 * @ORM\Entity(repositoryClass="WuCore\CentralBundle\Repository\CountryRepository")
 * @ORM\Entity
 */
class Country
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
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="languages", type="text", nullable=true)
     */
    private $languages;

    /**
     * @var string
     *
     * @ORM\Column(name="ref", type="string", length=45, nullable=true)
     */
    private $ref;

    /**
     * @var float
     *
     * @ORM\Column(name="coord_lat", type="decimal", nullable=true)
     */
    private $coordLat;

    /**
     * @var float
     *
     * @ORM\Column(name="coord_long", type="decimal", nullable=true)
     */
    private $coordLong;

    /**
     * @var integer
     *
     * @ORM\Column(name="phone_prefix", type="integer", nullable=true)
     */
    private $phonePrefix;

    /**
     * @var \Currency
     *
     * @ORM\ManyToOne(targetEntity="Currency")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="default_currency_id", referencedColumnName="id")
     * })
     */
    private $defaultCurrency;



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
     * Set name
     *
     * @param string $name
     * @return Country
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set languages
     *
     * @param string $languages
     * @return Country
     */
    public function setLanguages($languages)
    {
        $this->languages = $languages;
    
        return $this;
    }

    /**
     * Get languages
     *
     * @return string 
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * Set ref
     *
     * @param string $ref
     * @return Country
     */
    public function setRef($ref)
    {
        $this->ref = $ref;
    
        return $this;
    }

    /**
     * Get ref
     *
     * @return string 
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * Set coordLat
     *
     * @param float $coordLat
     * @return Country
     */
    public function setCoordLat($coordLat)
    {
        $this->coordLat = $coordLat;
    
        return $this;
    }

    /**
     * Get coordLat
     *
     * @return float 
     */
    public function getCoordLat()
    {
        return $this->coordLat;
    }

    /**
     * Set coordLong
     *
     * @param float $coordLong
     * @return Country
     */
    public function setCoordLong($coordLong)
    {
        $this->coordLong = $coordLong;
    
        return $this;
    }

    /**
     * Get coordLong
     *
     * @return float 
     */
    public function getCoordLong()
    {
        return $this->coordLong;
    }

    /**
     * Set phonePrefix
     *
     * @param integer $phonePrefix
     * @return Country
     */
    public function setPhonePrefix($phonePrefix)
    {
        $this->phonePrefix = $phonePrefix;
    
        return $this;
    }

    /**
     * Get phonePrefix
     *
     * @return integer 
     */
    public function getPhonePrefix()
    {
        return $this->phonePrefix;
    }

    /**
     * Set defaultCurrency
     *
     * @param \WuCore\CentralBundle\Entity\Currency $defaultCurrency
     * @return Country
     */
    public function setDefaultCurrency(\WuCore\CentralBundle\Entity\Currency $defaultCurrency = null)
    {
        $this->defaultCurrency = $defaultCurrency;
    
        return $this;
    }

    /**
     * Get defaultCurrency
     *
     * @return \WuCore\CentralBundle\Entity\Currency 
     */
    public function getDefaultCurrency()
    {
        return $this->defaultCurrency;
    }
}