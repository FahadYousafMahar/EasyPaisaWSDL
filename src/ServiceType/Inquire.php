<?php

namespace WebIT\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Inquire ServiceType
 * @subpackage Services
 * @author Fahad Yousaf Mahar
 * @url    https://github.com/FahadYousafMahar/EasyPaisaWSDL
 */
class Inquire extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named inquireTransaction
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WebIT\StructType\InquireTransactionRequestType $parameters1
     * @return \WebIT\StructType\InquireTransactionResponseType|bool
     */
    public function inquireTransaction(\WebIT\StructType\InquireTransactionRequestType $parameters1)
    {
        try {
            $this->setResult($this->getSoapClient()->inquireTransaction($parameters1));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \WebIT\StructType\InquireTransactionResponseType
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
