<?php

namespace WebIT\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Initiate ServiceType
 * @subpackage Services
 * @author Fahad Yousaf Mahar
 * @url    https://github.com/FahadYousafMahar/EasyPaisaWSDL
 */
class Initiate extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named initiateTransaction
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WebIT\StructType\InitiateTransactionRequestType $parameters1
     * @return \WebIT\StructType\InitiateTransactionResponseType|bool
     */
    public function initiateTransaction(\WebIT\StructType\InitiateTransactionRequestType $parameters1)
    {
        try {
            $this->setResult($this->getSoapClient()->initiateTransaction($parameters1));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named initiateCCTransaction
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WebIT\StructType\InitiateCCTransactionRequestType $parameters1
     * @return \WebIT\StructType\InitiateCCTransactionResponseType|bool
     */
    public function initiateCCTransaction(\WebIT\StructType\InitiateCCTransactionRequestType $parameters1)
    {
        try {
            $this->setResult($this->getSoapClient()->initiateCCTransaction($parameters1));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \WebIT\StructType\InitiateCCTransactionResponseType|\WebIT\StructType\InitiateTransactionResponseType
     */
    public function getResult()
    {
        return parent::getResult();
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
