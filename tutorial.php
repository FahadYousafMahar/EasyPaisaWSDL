<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://easypay.easypaisa.com.pk/easypay-service/PartnerBusinessService/META-INF/wsdl/partner/transaction/PartnerBusinessService.wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://easypay.easypaisa.com.pk/easypay-service/PartnerBusinessService/META-INF/wsdl/partner/transaction/PartnerBusinessService.wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \WebIT\ClassMap::get(),
);
/**
 * Samples for Initiate ServiceType
 */
$initiate = new \WebIT\ServiceType\Initiate($options);
/**
 * Sample call for initiateTransaction operation/method
 */
$parameters = new \WebIT\StructType\InitiateTransactionRequestType(
    '1234', //string $orderId (Merchant’s system generated Order Id)
    '1234', //int $storeId (Store ID generated during merchant registration in Easypay)
    '100.0', //float $transactionAmount (Total Transaction Amount)
    'OTC', //string $transactionType ( Type of transaction. Possible values are: OTC / MA / CC )
    '03431234567', //string $msisdn (Customer’s MSISDN) {Mandatory for OTC, Mandatory for CC,  Optional for MA}
    '03431234567', //string $mobileAccountNo (Customer’s Mobile Account #) {Mandatory for MA, Optional for OTC}
    'example@example.com' //string $emailAddress (Customer’s Email) Optional
);
if ($initiate->initiateTransaction($parameters) !== false) {
    print_r($initiate->getResult());
} else {
    print_r($initiate->getLastError());
}
/**
 * Sample call for initiateCCTransaction operation/method
 * Send InitiateCCTransactionRequestType with your own parameters. Given below with empty constructor is for demo only
 */
if ($initiate->initiateCCTransaction(new \WebIT\StructType\InitiateCCTransactionRequestType()) !== false) {
    print_r($initiate->getResult());
} else {
    print_r($initiate->getLastError());
}
/**
 * Samples for Inquire ServiceType
 * Send InquireTransactionRequestType with your own parameters. Given below with empty constructor is for demo only
 */
$inquire = new \WebIT\ServiceType\Inquire($options);
/**
 * Sample call for inquireTransaction operation/method
 */
if ($inquire->inquireTransaction(new \WebIT\StructType\InquireTransactionRequestType()) !== false) {
    print_r($inquire->getResult());
} else {
    print_r($inquire->getLastError());
}
