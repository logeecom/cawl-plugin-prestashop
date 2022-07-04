<?php
/*
 * This class was auto-generated from the API references found at
 * https://support.direct.ingenico.com/documentation/api/reference
 */
namespace Ingenico\Direct\Sdk\Domain;

use Ingenico\Direct\Sdk\DataObject;
use UnexpectedValueException;

/**
 * @package Ingenico\Direct\Sdk\Domain
 */
class CardEssentials extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $bin;

    /**
     * @var string
     */
    private $cardNumber;

    /**
     * @var string
     */
    private $expiryDate;

    // Methods
    /**
     * @return string
     */
    public function getBin()
    {
        return $this->bin;
    }
    /**
     * @var string
     */
    public function setBin($value)
    {
        $this->bin = $value;
    }

    /**
     * @return string
     */
    public function getCardNumber()
    {
        return $this->cardNumber;
    }
    /**
     * @var string
     */
    public function setCardNumber($value)
    {
        $this->cardNumber = $value;
    }

    /**
     * @return string
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }
    /**
     * @var string
     */
    public function setExpiryDate($value)
    {
        $this->expiryDate = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->bin !== null) {
            $object->bin = $this->bin;
        }
        if ($this->cardNumber !== null) {
            $object->cardNumber = $this->cardNumber;
        }
        if ($this->expiryDate !== null) {
            $object->expiryDate = $this->expiryDate;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject($object)
    {
        parent::fromObject($object);
        if (property_exists($object, 'bin')) {
            $this->bin = $object->bin;
        }
        if (property_exists($object, 'cardNumber')) {
            $this->cardNumber = $object->cardNumber;
        }
        if (property_exists($object, 'expiryDate')) {
            $this->expiryDate = $object->expiryDate;
        }
        return $this;
    }
}
