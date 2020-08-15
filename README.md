# EasyPaisaWSDL
PHP library to facilitate use of Easypaisa's B2B WSDL Integration

[![PHP Version](https://img.shields.io/packagist/php-v/fahadyousafmahar/easypaisa-wsdl-php)](https://packagist.org/packages/fahadyousafmahar/easypaisa-wsdl-php)
![GitHub top language](https://img.shields.io/github/languages/top/fahadyousafmahar/easypaisawsdl)
![Contributors](https://img.shields.io/github/contributors/fahadyousafmahar/easypaisawsdl)
![License](https://img.shields.io/github/license/fahadyousafmahar/easypaisawsdl)
![Repo Size](https://img.shields.io/github/repo-size/fahadyousafmahar/easypaisawsdl)

## Installation

### With Composer

```
$ composer require fahadyousafmahar/easypaisa-wsdl-php
```

```json
{
    "require": {
        "fahadyousafmahar/easypaisa-wsdl-php": "^1.0.0"
    }
}
```

### Usage

```php
require_once __DIR__ . '/vendor/autoload.php';
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://easypay.easypaisa.com.pk/easypay-service/PartnerBusinessService/META-INF/wsdl/partner/transaction/PartnerBusinessService.wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \WebIT\ClassMap::get(),
);
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
    'example@example.com', //string $emailAddress (Customer’s Email) Optional
    'merchantUsername', //string $username (Merchant username) Mandatory
    'merchantPassword' //string $password (Merchant password) Mandatory
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
$parameters = new \WebIT\StructType\InitiateCCTransactionRequestType(
    '1234', // string $orderId (Merchant’s system generated Order Id)
    '1234', // int $storeId (Store ID generated during merchant registration in Easypay)
    '100.0', // float $transactionAmount (Total Transaction Amount)
    'CC', // string $transactionType ( Type of transaction. Possible values are: CC )
    '03431234567', // int $msisdn (Customer’s MSISDN) {Mandatory for OTC, Mandatory for CC,  Optional for MA}
    'example@example.com', //string $emailAddress (Customer’s Email) Optional
    'Mastercard', // string $cardType (Type of Credit Card in case of Credit Card Transaction)
    '5313581000123430', // int $pan (Personal Account Number of the customer) Mandatory
    '25', // int $expiryYear (Expiry Year) Mandatory
    '12', // int $expiryMonth (Expiry Month) Mandatory
    '123', // int $CVV (CVV) Mandatory
    'merchantUsername', //string $username (Merchant username) Mandatory
    'merchantPassword' //string $password (Merchant password) Mandatory

);
if ($initiate->initiateCCTransaction($parameters ) !== false) {
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
$parameters = new \WebIT\StructType\InquireTransactionRequestType(
    '1234', //string $orderId (Merchant’s system generated Order Id) Mandatory
    '9999999999999999', // $accountNum (Merchant Account No registered with Easypay) Mandatory
    'merchantUsername', //string $username (Merchant username) Mandatory
    'merchantPassword'//string $password (Merchant password) Mandatory

);
if ($inquire->inquireTransaction($parameters) !== false) {
    print_r($inquire->getResult());
} else {
    print_r($inquire->getLastError());
}
```
