<?php

namespace WebIT\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for inquireTransactionResponseType StructType
 * @subpackage Structs
 * @author Fahad Yousaf Mahar
 * @url    https://github.com/FahadYousafMahar/EasyPaisaWSDL
 */
class InquireTransactionResponseType extends BaseResponseType
{
    /**
     * The orderId
     * @var string
     */
    public $orderId;
    /**
     * The accountNum
     * @var string
     */
    public $accountNum;
    /**
     * The storeId
     * @var int
     */
    public $storeId;
    /**
     * The storeName
     * @var string
     */
    public $storeName;
    /**
     * The paymentToken
     * @var string
     */
    public $paymentToken;
    /**
     * The transactionId
     * @var string
     */
    public $transactionId;
    /**
     * The transactionStatus
     * @var string
     */
    public $transactionStatus;
    /**
     * The transactionAmount
     * @var float
     */
    public $transactionAmount;
    /**
     * The transactionDateTime
     * @var string
     */
    public $transactionDateTime;
    /**
     * The paymentTokenExiryDateTime
     * @var string
     */
    public $paymentTokenExiryDateTime;
    /**
     * The transactionPaidDateTime
     * @var string
     */
    public $transactionPaidDateTime;
    /**
     * The msisdn
     * @var string
     */
    public $msisdn;
    /**
     * The paymentMode
     * @var string
     */
    public $paymentMode;
    /**
     * Constructor method for inquireTransactionResponseType
     * @uses InquireTransactionResponseType::setOrderId()
     * @uses InquireTransactionResponseType::setAccountNum()
     * @uses InquireTransactionResponseType::setStoreId()
     * @uses InquireTransactionResponseType::setStoreName()
     * @uses InquireTransactionResponseType::setPaymentToken()
     * @uses InquireTransactionResponseType::setTransactionId()
     * @uses InquireTransactionResponseType::setTransactionStatus()
     * @uses InquireTransactionResponseType::setTransactionAmount()
     * @uses InquireTransactionResponseType::setTransactionDateTime()
     * @uses InquireTransactionResponseType::setPaymentTokenExiryDateTime()
     * @uses InquireTransactionResponseType::setTransactionPaidDateTime()
     * @uses InquireTransactionResponseType::setMsisdn()
     * @uses InquireTransactionResponseType::setPaymentMode()
     * @param string $orderId
     * @param string $accountNum
     * @param int $storeId
     * @param string $storeName
     * @param string $paymentToken
     * @param string $transactionId
     * @param string $transactionStatus
     * @param float $transactionAmount
     * @param string $transactionDateTime
     * @param string $paymentTokenExiryDateTime
     * @param string $transactionPaidDateTime
     * @param string $msisdn
     * @param string $paymentMode
     */
    public function __construct($orderId = null, $accountNum = null, $storeId = null, $storeName = null, $paymentToken = null, $transactionId = null, $transactionStatus = null, $transactionAmount = null, $transactionDateTime = null, $paymentTokenExiryDateTime = null, $transactionPaidDateTime = null, $msisdn = null, $paymentMode = null)
    {
        $this
            ->setOrderId($orderId)
            ->setAccountNum($accountNum)
            ->setStoreId($storeId)
            ->setStoreName($storeName)
            ->setPaymentToken($paymentToken)
            ->setTransactionId($transactionId)
            ->setTransactionStatus($transactionStatus)
            ->setTransactionAmount($transactionAmount)
            ->setTransactionDateTime($transactionDateTime)
            ->setPaymentTokenExiryDateTime($paymentTokenExiryDateTime)
            ->setTransactionPaidDateTime($transactionPaidDateTime)
            ->setMsisdn($msisdn)
            ->setPaymentMode($paymentMode);
    }
    /**
     * Get orderId value
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param string $orderId
     * @return \WebIT\StructType\InquireTransactionResponseType
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
     * Get accountNum value
     * @return string|null
     */
    public function getAccountNum()
    {
        return $this->accountNum;
    }
    /**
     * Set accountNum value
     * @param string $accountNum
     * @return \WebIT\StructType\InquireTransactionResponseType
     */
    public function setAccountNum($accountNum = null)
    {
        // validation for constraint: string
        if (!is_null($accountNum) && !is_string($accountNum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountNum, true), gettype($accountNum)), __LINE__);
        }
        $this->accountNum = $accountNum;
        return $this;
    }
    /**
     * Get storeId value
     * @return int|null
     */
    public function getStoreId()
    {
        return $this->storeId;
    }
    /**
     * Set storeId value
     * @param int $storeId
     * @return \WebIT\StructType\InquireTransactionResponseType
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
     * Get storeName value
     * @return string|null
     */
    public function getStoreName()
    {
        return $this->storeName;
    }
    /**
     * Set storeName value
     * @param string $storeName
     * @return \WebIT\StructType\InquireTransactionResponseType
     */
    public function setStoreName($storeName = null)
    {
        // validation for constraint: string
        if (!is_null($storeName) && !is_string($storeName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($storeName, true), gettype($storeName)), __LINE__);
        }
        $this->storeName = $storeName;
        return $this;
    }
    /**
     * Get paymentToken value
     * @return string|null
     */
    public function getPaymentToken()
    {
        return $this->paymentToken;
    }
    /**
     * Set paymentToken value
     * @param string $paymentToken
     * @return \WebIT\StructType\InquireTransactionResponseType
     */
    public function setPaymentToken($paymentToken = null)
    {
        // validation for constraint: string
        if (!is_null($paymentToken) && !is_string($paymentToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentToken, true), gettype($paymentToken)), __LINE__);
        }
        $this->paymentToken = $paymentToken;
        return $this;
    }
    /**
     * Get transactionId value
     * @return string|null
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }
    /**
     * Set transactionId value
     * @param string $transactionId
     * @return \WebIT\StructType\InquireTransactionResponseType
     */
    public function setTransactionId($transactionId = null)
    {
        // validation for constraint: string
        if (!is_null($transactionId) && !is_string($transactionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionId, true), gettype($transactionId)), __LINE__);
        }
        $this->transactionId = $transactionId;
        return $this;
    }
    /**
     * Get transactionStatus value
     * @return string|null
     */
    public function getTransactionStatus()
    {
        return $this->transactionStatus;
    }
    /**
     * Set transactionStatus value
     * @param string $transactionStatus
     * @return \WebIT\StructType\InquireTransactionResponseType
     */
    public function setTransactionStatus($transactionStatus = null)
    {
        // validation for constraint: string
        if (!is_null($transactionStatus) && !is_string($transactionStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionStatus, true), gettype($transactionStatus)), __LINE__);
        }
        $this->transactionStatus = $transactionStatus;
        return $this;
    }
    /**
     * Get transactionAmount value
     * @return float|null
     */
    public function getTransactionAmount()
    {
        return $this->transactionAmount;
    }
    /**
     * Set transactionAmount value
     * @param float $transactionAmount
     * @return \WebIT\StructType\InquireTransactionResponseType
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
     * Get transactionDateTime value
     * @return string|null
     */
    public function getTransactionDateTime()
    {
        return $this->transactionDateTime;
    }
    /**
     * Set transactionDateTime value
     * @param string $transactionDateTime
     * @return \WebIT\StructType\InquireTransactionResponseType
     */
    public function setTransactionDateTime($transactionDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($transactionDateTime) && !is_string($transactionDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionDateTime, true), gettype($transactionDateTime)), __LINE__);
        }
        $this->transactionDateTime = $transactionDateTime;
        return $this;
    }
    /**
     * Get paymentTokenExiryDateTime value
     * @return string|null
     */
    public function getPaymentTokenExiryDateTime()
    {
        return $this->paymentTokenExiryDateTime;
    }
    /**
     * Set paymentTokenExiryDateTime value
     * @param string $paymentTokenExiryDateTime
     * @return \WebIT\StructType\InquireTransactionResponseType
     */
    public function setPaymentTokenExiryDateTime($paymentTokenExiryDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($paymentTokenExiryDateTime) && !is_string($paymentTokenExiryDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentTokenExiryDateTime, true), gettype($paymentTokenExiryDateTime)), __LINE__);
        }
        $this->paymentTokenExiryDateTime = $paymentTokenExiryDateTime;
        return $this;
    }
    /**
     * Get transactionPaidDateTime value
     * @return string|null
     */
    public function getTransactionPaidDateTime()
    {
        return $this->transactionPaidDateTime;
    }
    /**
     * Set transactionPaidDateTime value
     * @param string $transactionPaidDateTime
     * @return \WebIT\StructType\InquireTransactionResponseType
     */
    public function setTransactionPaidDateTime($transactionPaidDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($transactionPaidDateTime) && !is_string($transactionPaidDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionPaidDateTime, true), gettype($transactionPaidDateTime)), __LINE__);
        }
        $this->transactionPaidDateTime = $transactionPaidDateTime;
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
     * @return \WebIT\StructType\InquireTransactionResponseType
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
     * Get paymentMode value
     * @return string|null
     */
    public function getPaymentMode()
    {
        return $this->paymentMode;
    }
    /**
     * Set paymentMode value
     * @uses \WebIT\EnumType\TransactionType::valueIsValid()
     * @uses \WebIT\EnumType\TransactionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentMode
     * @return \WebIT\StructType\InquireTransactionResponseType
     */
    public function setPaymentMode($paymentMode = null)
    {
        // validation for constraint: enumeration
        if (!\WebIT\EnumType\TransactionType::valueIsValid($paymentMode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \WebIT\EnumType\TransactionType', is_array($paymentMode) ? implode(', ', $paymentMode) : var_export($paymentMode, true), implode(', ', \WebIT\EnumType\TransactionType::getValidValues())), __LINE__);
        }
        $this->paymentMode = $paymentMode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WebIT\StructType\InquireTransactionResponseType
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
