<?php

namespace Enesdayanc\MasterpassRefund\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Transaction ServiceType
 * @subpackage Services
 */
class Transaction extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named TransactionRefund
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Enesdayanc\MasterpassRefund\StructType\TransactionRefund $parameters
     * @return \Enesdayanc\MasterpassRefund\StructType\TransactionRefundResponse|bool
     */
    public function TransactionRefund(\Enesdayanc\MasterpassRefund\StructType\TransactionRefund $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->TransactionRefund($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Enesdayanc\MasterpassRefund\StructType\TransactionRefundResponse
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
