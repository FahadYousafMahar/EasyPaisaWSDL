<?php

namespace WebIT\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for initiateCCTransactionRequestType StructType
 * @subpackage Structs
 * @author Fahad Yousaf Mahar
 * @url    https://github.com/FahadYousafMahar/EasyPaisaWSDL
 */
class InitiateCCTransactionRequestType extends BaseRequestType
{
    /**
     * The orderId
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    public $orderId;
    /**
     * The storeId
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * - nillable: false
     * @var int
     */
    public $storeId;
    /**
     * The transactionAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * - nillable: false
     * @var float
     */
    public $transactionAmount;
    /**
     * The transactionType
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    public $transactionType;
    /**
     * The msisdn
     * @var string
     */
    public $msisdn;
    /**
     * The emailAddress
     * @var string
     */
    public $emailAddress;
    /**
     * The cardType
     * @var string
     */
    public $cardType;
    /**
     * The pan
     * @var string
     */
    public $pan;
    /**
     * The expiryYear
     * @var string
     */
    public $expiryYear;
    /**
     * The expiryMonth
     * @var string
     */
    public $expiryMonth;
    /**
     * The cvv2
     * @var string
     */
    public $cvv2;
    /**
     * Constructor method for initiateCCTransactionRequestType
     * @uses InitiateCCTransactionRequestType::setOrderId()
     * @uses InitiateCCTransactionRequestType::setStoreId()
     * @uses InitiateCCTransactionRequestType::setTransactionAmount()
     * @uses InitiateCCTransactionRequestType::setTransactionType()
     * @uses InitiateCCTransactionRequestType::setMsisdn()
     * @uses InitiateCCTransactionRequestType::setEmailAddress()
     * @uses InitiateCCTransactionRequestType::setCardType()
     * @uses InitiateCCTransactionRequestType::setPan()
     * @uses InitiateCCTransactionRequestType::setExpiryYear()
     * @uses InitiateCCTransactionRequestType::setExpiryMonth()
     * @uses InitiateCCTransactionRequestType::setCvv2()
     * @param string $orderId
     * @param int $storeId
     * @param float $transactionAmount
     * @param string $transactionType
     * @param string $msisdn
     * @param string $emailAddress
     * @param string $cardType
     * @param string $pan
     * @param string $expiryYear
     * @param string $expiryMonth
     * @param string $cvv2
     */
    public function __construct($orderId = null, $storeId = null, $transactionAmount = null, $transactionType = null, $msisdn = null, $emailAddress = null, $cardType = null, $pan = null, $expiryYear = null, $expiryMonth = null, $cvv2 = null)
    {
        $this
            ->setOrderId($orderId)
            ->setStoreId($storeId)
            ->setTransactionAmount($transactionAmount)
            ->setTransactionType($transactionType)
            ->setMsisdn($msisdn)
            ->setEmailAddress($emailAddress)
            ->setCardType($cardType)
            ->setPan($pan)
            ->setExpiryYear($expiryYear)
            ->setExpiryMonth($expiryMonth)
            ->setCvv2($cvv2);
    }
    /**
     * Get orderId value
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param string $orderId
     * @return \WebIT\StructType\InitiateCCTransactionRequestType
     */
    public function setOrderId($orderId = null)
    {
        // validation for constraint: string
        if (!is_null($orderId) && !is_string($orderId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        return $this;
    }
    /**
     * Get storeId value
     * @return int
     */
    public function getStoreId()
    {
        return $this->storeId;
    }
    /**
     * Set storeId value
     * @param int $storeId
     * @return \WebIT\StructType\InitiateCCTransactionRequestType
     */
    public function setStoreId($storeId = null)
    {
        // validation for constraint: int
        if (!is_null($storeId) && !(is_int($storeId) || ctype_digit($storeId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($storeId, true), gettype($storeId)), __LINE__);
        }
        $this->storeId = $storeId;
        return $this;
    }
    /**
     * Get transactionAmount value
     * @return float
     */
    public function getTransactionAmount()
    {
        return $this->transactionAmount;
    }
    /**
     * Set transactionAmount value
     * @param float $transactionAmount
     * @return \WebIT\StructType\InitiateCCTransactionRequestType
     */
    public function setTransactionAmount($transactionAmount = null)
    {
        // validation for constraint: float
        if (!is_null($transactionAmount) && !(is_float($transactionAmount) || is_numeric($transactionAmount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($transactionAmount, true), gettype($transactionAmount)), __LINE__);
        }
        $this->transactionAmount = $transactionAmount;
        return $this;
    }
    /**
     * Get transactionType value
     * @return string
     */
    public function getTransactionType()
    {
        return $this->transactionType;
    }
    /**
     * Set transactionType value
     * @uses \WebIT\EnumType\TransactionType::valueIsValid()
     * @uses \WebIT\EnumType\TransactionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $transactionType
     * @return \WebIT\StructType\InitiateCCTransactionRequestType
     */
    public function setTransactionType($transactionType = null)
    {
        // validation for constraint: enumeration
        if (!\WebIT\EnumType\TransactionType::valueIsValid($transactionType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \WebIT\EnumType\TransactionType', is_array($transactionType) ? implode(', ', $transactionType) : var_export($transactionType, true), implode(', ', \WebIT\EnumType\TransactionType::getValidValues())), __LINE__);
        }
        $this->transactionType = $transactionType;
        return $this;
    }
    /**
     * Get msisdn value
     * @return string|null
     */
    public function getMsisdn()
    {
        return $this->msisdn;
    }
    /**
     * Set msisdn value
     * @param string $msisdn
     * @return \WebIT\StructType\InitiateCCTransactionRequestType
     */
    public function setMsisdn($msisdn = null)
    {
        // validation for constraint: string
        if (!is_null($msisdn) && !is_string($msisdn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($msisdn, true), gettype($msisdn)), __LINE__);
        }
        $this->msisdn = $msisdn;
        return $this;
    }
    /**
     * Get emailAddress value
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }
    /**
     * Set emailAddress value
     * @param string $emailAddress
     * @return \WebIT\StructType\InitiateCCTransactionRequestType
     */
    public function setEmailAddress($emailAddress = null)
    {
        // validation for constraint: string
        if (!is_null($emailAddress) && !is_string($emailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailAddress, true), gettype($emailAddress)), __LINE__);
        }
        $this->emailAddress = $emailAddress;
        return $this;
    }
    /**
     * Get cardType value
     * @return string|null
     */
    public function getCardType()
    {
        return $this->cardType;
    }
    /**
     * Set cardType value
     * @param string $cardType
     * @return \WebIT\StructType\InitiateCCTransactionRequestType
     */
    public function setCardType($cardType = null)
    {
        // validation for constraint: string
        if (!is_null($cardType) && !is_string($cardType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardType, true), gettype($cardType)), __LINE__);
        }
        $this->cardType = $cardType;
        return $this;
    }
    /**
     * Get pan value
     * @return string|null
     */
    public function getPan()
    {
        return $this->pan;
    }
    /**
     * Set pan value
     * @param string $pan
     * @return \WebIT\StructType\InitiateCCTransactionRequestType
     */
    public function setPan($pan = null)
    {
        // validation for constraint: string
        if (!is_null($pan) && !is_string($pan)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pan, true), gettype($pan)), __LINE__);
        }
        $this->pan = $pan;
        return $this;
    }
    /**
     * Get expiryYear value
     * @return string|null
     */
    public function getExpiryYear()
    {
        return $this->expiryYear;
    }
    /**
     * Set expiryYear value
     * @param string $expiryYear
     * @return \WebIT\StructType\InitiateCCTransactionRequestType
     */
    public function setExpiryYear($expiryYear = null)
    {
        // validation for constraint: string
        if (!is_null($expiryYear) && !is_string($expiryYear)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expiryYear, true), gettype($expiryYear)), __LINE__);
        }
        $this->expiryYear = $expiryYear;
        return $this;
    }
    /**
     * Get expiryMonth value
     * @return string|null
     */
    public function getExpiryMonth()
    {
        return $this->expiryMonth;
    }
    /**
     * Set expiryMonth value
     * @param string $expiryMonth
     * @return \WebIT\StructType\InitiateCCTransactionRequestType
     */
    public function setExpiryMonth($expiryMonth = null)
    {
        // validation for constraint: string
        if (!is_null($expiryMonth) && !is_string($expiryMonth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expiryMonth, true), gettype($expiryMonth)), __LINE__);
        }
        $this->expiryMonth = $expiryMonth;
        return $this;
    }
    /**
     * Get cvv2 value
     * @return string|null
     */
    public function getCvv2()
    {
        return $this->cvv2;
    }
    /**
     * Set cvv2 value
     * @param string $cvv2
     * @return \WebIT\StructType\InitiateCCTransactionRequestType
     */
    public function setCvv2($cvv2 = null)
    {
        // validation for constraint: string
        if (!is_null($cvv2) && !is_string($cvv2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cvv2, true), gettype($cvv2)), __LINE__);
        }
        $this->cvv2 = $cvv2;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WebIT\StructType\InitiateCCTransactionRequestType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
