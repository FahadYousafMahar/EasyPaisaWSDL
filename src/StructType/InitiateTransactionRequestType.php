<?php

namespace WebIT\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for initiateTransactionRequestType StructType
 * @subpackage Structs
 * @author Fahad Yousaf Mahar
 * @url    https://github.com/FahadYousafMahar/EasyPaisaWSDL
 */
class InitiateTransactionRequestType extends BaseRequestType
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
     * The mobileAccountNo
     * @var string
     */
    public $mobileAccountNo;
    /**
     * The emailAddress
     * @var string
     */
    public $emailAddress;
    /**
     * Constructor method for initiateTransactionRequestType
     * @uses InitiateTransactionRequestType::setOrderId()
     * @uses InitiateTransactionRequestType::setStoreId()
     * @uses InitiateTransactionRequestType::setTransactionAmount()
     * @uses InitiateTransactionRequestType::setTransactionType()
     * @uses InitiateTransactionRequestType::setMsisdn()
     * @uses InitiateTransactionRequestType::setMobileAccountNo()
     * @uses InitiateTransactionRequestType::setEmailAddress()
     * @param string $orderId
     * @param int $storeId
     * @param float $transactionAmount
     * @param string $transactionType
     * @param string $msisdn
     * @param string $mobileAccountNo
     * @param string $emailAddress
     */
    public function __construct($orderId = null, $storeId = null, $transactionAmount = null, $transactionType = null, $msisdn = null, $mobileAccountNo = null, $emailAddress = null)
    {
        $this
            ->setOrderId($orderId)
            ->setStoreId($storeId)
            ->setTransactionAmount($transactionAmount)
            ->setTransactionType($transactionType)
            ->setMsisdn($msisdn)
            ->setMobileAccountNo($mobileAccountNo)
            ->setEmailAddress($emailAddress);
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
     * @return \WebIT\StructType\InitiateTransactionRequestType
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
     * @return \WebIT\StructType\InitiateTransactionRequestType
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
     * @return \WebIT\StructType\InitiateTransactionRequestType
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
     * @return \WebIT\StructType\InitiateTransactionRequestType
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
     * @return \WebIT\StructType\InitiateTransactionRequestType
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
     * Get mobileAccountNo value
     * @return string|null
     */
    public function getMobileAccountNo()
    {
        return $this->mobileAccountNo;
    }
    /**
     * Set mobileAccountNo value
     * @param string $mobileAccountNo
     * @return \WebIT\StructType\InitiateTransactionRequestType
     */
    public function setMobileAccountNo($mobileAccountNo = null)
    {
        // validation for constraint: string
        if (!is_null($mobileAccountNo) && !is_string($mobileAccountNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mobileAccountNo, true), gettype($mobileAccountNo)), __LINE__);
        }
        $this->mobileAccountNo = $mobileAccountNo;
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
     * @return \WebIT\StructType\InitiateTransactionRequestType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WebIT\StructType\InitiateTransactionRequestType
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
