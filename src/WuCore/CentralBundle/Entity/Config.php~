<?php

namespace WuCore\CentralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Config
 *
 * @ORM\Table(name="config")
 * @ORM\Entity(repositoryClass="WuCore\CentralBundle\Repository\ConfigRepository")
 * @ORM\Entity
 */
class Config
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
     * @ORM\Column(name="value_name", type="string", length=64, nullable=true)
     */
    private $valueName;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="text", nullable=true)
     */
    private $value;

    /**
     * @var \ConfigType
     *
     * @ORM\ManyToOne(targetEntity="ConfigType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="config_type_id", referencedColumnName="id")
     * })
     */
    private $configType;



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
     * Set valueName
     *
     * @param string $valueName
     * @return Config
     */
    public function setValueName($valueName)
    {
        $this->valueName = $valueName;
    
        return $this;
    }

    /**
     * Get valueName
     *
     * @return string 
     */
    public function getValueName()
    {
        return $this->valueName;
    }

    /**
     * Set value
     *
     * @param string $value
     * @return Config
     */
    public function setValue($value)
    {
        $this->value = $value;
    
        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set configType
     *
     * @param \WuCore\CentralBundle\Entity\ConfigType $configType
     * @return Config
     */
    public function setConfigType(\WuCore\CentralBundle\Entity\ConfigType $configType = null)
    {
        $this->configType = $configType;
    
        return $this;
    }

    /**
     * Get configType
     *
     * @return \WuCore\CentralBundle\Entity\ConfigType 
     */
    public function getConfigType()
    {
        return $this->configType;
    }
}