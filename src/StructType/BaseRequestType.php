<?php

namespace WebIT\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseRequestType StructType
 * @subpackage Structs
 * @author Fahad Yousaf Mahar
 * @url    https://github.com/FahadYousafMahar/EasyPaisaWSDL
 */
class BaseRequestType extends AbstractStructBase
{
    /**
     * The username
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $username;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $password;
    /**
     * Constructor method for BaseRequestType
     * @uses BaseRequestType::setUsername()
     * @uses BaseRequestType::setPassword()
     * @param string $username
     * @param string $password
     */
    public function __construct($username = null, $password = null)
    {
        $this
            ->setUsername($username)
            ->setPassword($password);
    }
    /**
     * Get username value
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }
    /**
     * Set username value
     * @param string $username
     * @return \WebIT\StructType\BaseRequestType
     */
    public function setUsername($username = null)
    {
        // validation for constraint: string
        if (!is_null($username) && !is_string($username)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($username, true), gettype($username)), __LINE__);
        }
        $this->username = $username;
        return $this;
    }
    /**
     * Get password value
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \WebIT\StructType\BaseRequestType
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WebIT\StructType\BaseRequestType
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
