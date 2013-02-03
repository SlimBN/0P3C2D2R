<?php

namespace WuCore\CentralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Currency
 *
 * @ORM\Table(name="currency")
 * @ORM\Entity(repositoryClass="WuCore\CentralBundle\Repository\CurrencyRepository")
 * @ORM\Entity
 */
class Currency
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
     * @ORM\Column(name="ref", type="string", length=45, nullable=false)
     */
    private $ref;

    /**
     * @var float
     *
     * @ORM\Column(name="value_to_usd", type="float", nullable=false)
     */
    private $valueToUsd;



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
     * Set ref
     *
     * @param string $ref
     * @return Currency
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
     * Set valueToUsd
     *
     * @param float $valueToUsd
     * @return Currency
     */
    public function setValueToUsd($valueToUsd)
    {
        $this->valueToUsd = $valueToUsd;
    
        return $this;
    }

    /**
     * Get valueToUsd
     *
     * @return float 
     */
    public function getValueToUsd()
    {
        return $this->valueToUsd;
    }
}