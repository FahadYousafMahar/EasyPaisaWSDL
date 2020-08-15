<?php

namespace WebIT\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for inquireTransactionRequestType StructType
 * @subpackage Structs
 * @author Fahad Yousaf Mahar
 * @url    https://github.com/FahadYousafMahar/EasyPaisaWSDL
 */
class InquireTransactionRequestType extends BaseRequestType
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
     * The accountNum
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    public $accountNum;
    /**
     * Constructor method for inquireTransactionRequestType
     * @uses InquireTransactionRequestType::setOrderId()
     * @uses InquireTransactionRequestType::setAccountNum()
     * @param string $orderId
     * @param string $accountNum
     * @param string $username
     * @param string $password
     */
    public function __construct($orderId = null, $accountNum = null, $username = null, $password = null)
    {
        $this
            ->setOrderId($orderId)
            ->setAccountNum($accountNum)
            ->setUsername($username)
            ->setPassword($password);
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
     * @return \WebIT\StructType\InquireTransactionRequestType
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
     * @return string
     */
    public function getAccountNum()
    {
        return $this->accountNum;
    }
    /**
     * Set accountNum value
     * @param string $accountNum
     * @return \WebIT\StructType\InquireTransactionRequestType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WebIT\StructType\InquireTransactionRequestType
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
