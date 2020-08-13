<?php

namespace WebIT;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'BaseRequestType' => '\\WebIT\\StructType\\BaseRequestType',
            'BaseResponseType' => '\\WebIT\\StructType\\BaseResponseType',
            'NameValueDto' => '\\WebIT\\StructType\\NameValueDto',
            'initiateTransactionRequestType' => '\\WebIT\\StructType\\InitiateTransactionRequestType',
            'initiateTransactionResponseType' => '\\WebIT\\StructType\\InitiateTransactionResponseType',
            'inquireTransactionRequestType' => '\\WebIT\\StructType\\InquireTransactionRequestType',
            'inquireTransactionResponseType' => '\\WebIT\\StructType\\InquireTransactionResponseType',
            'initiateCCTransactionRequestType' => '\\WebIT\\StructType\\InitiateCCTransactionRequestType',
            'initiateCCTransactionResponseType' => '\\WebIT\\StructType\\InitiateCCTransactionResponseType',
        );
    }
}
