<?php

namespace WebIT\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for initiateTransactionResponseType StructType
 * @subpackage Structs
 * @author Fahad Yousaf Mahar
 * @url    https://github.com/FahadYousafMahar/EasyPaisaWSDL
 */
class InitiateTransactionResponseType extends BaseResponseType
{
    /**
     * The orderId
     * @var string
     */
    public $orderId;
    /**
     * The storeId
     * @var int
     */
    public $storeId;
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
     * The transactionRefNumber
     * @var string
     */
    public $transactionRefNumber;
    /**
     * Constructor method for initiateTransactionResponseType
     * @uses InitiateTransactionResponseType::setOrderId()
     * @uses InitiateTransactionResponseType::setStoreId()
     * @uses InitiateTransactionResponseType::setPaymentToken()
     * @uses InitiateTransactionResponseType::setTransactionId()
     * @uses InitiateTransactionResponseType::setTransactionDateTime()
     * @uses InitiateTransactionResponseType::setPaymentTokenExiryDateTime()
     * @uses InitiateTransactionResponseType::setTransactionRefNumber()
     * @param string $orderId
     * @param int $storeId
     * @param string $paymentToken
     * @param string $transactionId
     * @param string $transactionDateTime
     * @param string $paymentTokenExiryDateTime
     * @param string $transactionRefNumber
     */
    public function __construct($orderId = null, $storeId = null, $paymentToken = null, $transactionId = null, $transactionDateTime = null, $paymentTokenExiryDateTime = null, $transactionRefNumber = null)
    {
        $this
            ->setOrderId($orderId)
            ->setStoreId($storeId)
            ->setPaymentToken($paymentToken)
            ->setTransactionId($transactionId)
            ->setTransactionDateTime($transactionDateTime)
            ->setPaymentTokenExiryDateTime($paymentTokenExiryDateTime)
            ->setTransactionRefNumber($transactionRefNumber);
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
     * @return \WebIT\StructType\InitiateTransactionResponseType
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
     * @return int|null
     */
    public function getStoreId()
    {
        return $this->storeId;
    }
    /**
     * Set storeId value
     * @param int $storeId
     * @return \WebIT\StructType\InitiateTransactionResponseType
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
     * @return \WebIT\StructType\InitiateTransactionResponseType
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
     * @return \WebIT\StructType\InitiateTransactionResponseType
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
     * @return \WebIT\StructType\InitiateTransactionResponseType
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
     * @return \WebIT\StructType\InitiateTransactionResponseType
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
     * Get transactionRefNumber value
     * @return string|null
     */
    public function getTransactionRefNumber()
    {
        return $this->transactionRefNumber;
    }
    /**
     * Set transactionRefNumber value
     * @param string $transactionRefNumber
     * @return \WebIT\StructType\InitiateTransactionResponseType
     */
    public function setTransactionRefNumber($transactionRefNumber = null)
    {
        // validation for constraint: string
        if (!is_null($transactionRefNumber) && !is_string($transactionRefNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionRefNumber, true), gettype($transactionRefNumber)), __LINE__);
        }
        $this->transactionRefNumber = $transactionRefNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WebIT\StructType\InitiateTransactionResponseType
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
