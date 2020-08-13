# EasyPaisaWSDL
PHP library to facilitate use of Easypaisa's Easypay WSDL

![GitHub top language](https://img.shields.io/github/languages/top/fahadyousafmahar/easypaisawsdl)
![Contributors](https://img.shields.io/github/contributors/fahadyousafmahar/easypaisawsdl)
![License](https://img.shields.io/github/license/fahadyousafmahar/easypaisawsdl)
![Repo Size](https://img.shields.io/github/repo-size/fahadyousafmahar/easypaisawsdl)

```php
require_once __DIR__ . '/vendor/autoload.php';
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://easypay.easypaisa.com.pk/easypay-service/PartnerBusinessService/META-INF/wsdl/partner/transaction/PartnerBusinessService.wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \WebIT\ClassMap::get(),
);
$initiate = new \WebIT\ServiceType\Initiate($options);

/**
 * Sample call for initiateTransaction operation/method
 * Send InitiateTransactionRequestType with your own parameters. Given below with empty constructor is for demo only
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
if ($initiate->initiateTransaction() !== false) {
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
```
