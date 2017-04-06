<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://masterpassturkiye.com:8082/MMIUIMasterPass_V2/MerchantServices/MPGMerchantTransactionRefundService.asmx?WSDL',
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
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://masterpassturkiye.com:8082/MMIUIMasterPass_V2/MerchantServices/MPGMerchantTransactionRefundService.asmx?WSDL',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Enesdayanc\MasterpassRefund\ClassMap::get(),
);
/**
 * Samples for Transaction ServiceType
 */
$transaction = new \Enesdayanc\MasterpassRefund\ServiceType\Transaction($options);
/**
 * Sample call for TransactionRefund operation/method
 */
if ($transaction->TransactionRefund(new \Enesdayanc\MasterpassRefund\StructType\TransactionRefund()) !== false) {
    print_r($transaction->getResult());
} else {
    print_r($transaction->getLastError());
}
