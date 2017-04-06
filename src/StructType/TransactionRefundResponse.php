<?php

namespace Enesdayanc\MasterpassRefund\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransactionRefundResponse StructType
 * @subpackage Structs
 */
class TransactionRefundResponse extends AbstractStructBase
{
    /**
     * The TransactionRefundResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Enesdayanc\MasterpassRefund\StructType\TransactionRefundResult
     */
    public $TransactionRefundResult;
    /**
     * Constructor method for TransactionRefundResponse
     * @uses TransactionRefundResponse::setTransactionRefundResult()
     * @param \Enesdayanc\MasterpassRefund\StructType\TransactionRefundResult $transactionRefundResult
     */
    public function __construct(\Enesdayanc\MasterpassRefund\StructType\TransactionRefundResult $transactionRefundResult = null)
    {
        $this
            ->setTransactionRefundResult($transactionRefundResult);
    }
    /**
     * Get TransactionRefundResult value
     * @return \Enesdayanc\MasterpassRefund\StructType\TransactionRefundResult|null
     */
    public function getTransactionRefundResult()
    {
        return $this->TransactionRefundResult;
    }
    /**
     * Set TransactionRefundResult value
     * @param \Enesdayanc\MasterpassRefund\StructType\TransactionRefundResult $transactionRefundResult
     * @return \Enesdayanc\MasterpassRefund\StructType\TransactionRefundResponse
     */
    public function setTransactionRefundResult(\Enesdayanc\MasterpassRefund\StructType\TransactionRefundResult $transactionRefundResult = null)
    {
        $this->TransactionRefundResult = $transactionRefundResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassRefund\StructType\TransactionRefundResponse
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
