<?php

namespace Enesdayanc\MasterpassRefund\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransactionRefund StructType
 * @subpackage Structs
 */
class TransactionRefund extends AbstractStructBase
{
    /**
     * The TransactionRefundRequest
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: s1:TransactionRefundRequest
     * @var \Enesdayanc\MasterpassRefund\StructType\TransactionRefundRequest
     */
    public $TransactionRefundRequest;
    /**
     * Constructor method for TransactionRefund
     * @uses TransactionRefund::setTransactionRefundRequest()
     * @param \Enesdayanc\MasterpassRefund\StructType\TransactionRefundRequest $transactionRefundRequest
     */
    public function __construct(\Enesdayanc\MasterpassRefund\StructType\TransactionRefundRequest $transactionRefundRequest = null)
    {
        $this
            ->setTransactionRefundRequest($transactionRefundRequest);
    }
    /**
     * Get TransactionRefundRequest value
     * @return \Enesdayanc\MasterpassRefund\StructType\TransactionRefundRequest
     */
    public function getTransactionRefundRequest()
    {
        return $this->TransactionRefundRequest;
    }
    /**
     * Set TransactionRefundRequest value
     * @param \Enesdayanc\MasterpassRefund\StructType\TransactionRefundRequest $transactionRefundRequest
     * @return \Enesdayanc\MasterpassRefund\StructType\TransactionRefund
     */
    public function setTransactionRefundRequest(\Enesdayanc\MasterpassRefund\StructType\TransactionRefundRequest $transactionRefundRequest = null)
    {
        $this->TransactionRefundRequest = $transactionRefundRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassRefund\StructType\TransactionRefund
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
