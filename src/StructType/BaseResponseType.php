<?php

namespace WebIT\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseResponseType StructType
 * @subpackage Structs
 * @author Fahad Yousaf Mahar
 * @url    https://github.com/FahadYousafMahar/EasyPaisaWSDL
 */
class BaseResponseType extends AbstractStructBase
{
    /**
     * The responseCode
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $responseCode;
    /**
     * Constructor method for BaseResponseType
     * @uses BaseResponseType::setResponseCode()
     * @param string $responseCode
     */
    public function __construct($responseCode = null)
    {
        $this
            ->setResponseCode($responseCode);
    }
    /**
     * Get responseCode value
     * @return string
     */
    public function getResponseCode()
    {
        return $this->responseCode;
    }
    /**
     * Set responseCode value
     * @param string $responseCode
     * @return \WebIT\StructType\BaseResponseType
     */
    public function setResponseCode($responseCode = null)
    {
        // validation for constraint: string
        if (!is_null($responseCode) && !is_string($responseCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($responseCode, true), gettype($responseCode)), __LINE__);
        }
        $this->responseCode = $responseCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WebIT\StructType\BaseResponseType
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
