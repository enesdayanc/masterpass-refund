<?php

namespace Enesdayanc\MasterpassRefund\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransactionRefundRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * @subpackage Structs
 */
class TransactionRefundRequest extends AbstractStructBase
{
    /**
     * The additional_fields
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Enesdayanc\MasterpassRefund\StructType\AdditionalFields
     */
    public $additional_fields;
    /**
     * The transaction_header
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Enesdayanc\MasterpassRefund\StructType\RequestHeader
     */
    public $transaction_header;
    /**
     * The transaction_body
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Enesdayanc\MasterpassRefund\StructType\TransactionRefundRequestBody
     */
    public $transaction_body;
    /**
     * Constructor method for TransactionRefundRequest
     * @uses TransactionRefundRequest::setAdditional_fields()
     * @uses TransactionRefundRequest::setTransaction_header()
     * @uses TransactionRefundRequest::setTransaction_body()
     * @param \Enesdayanc\MasterpassRefund\StructType\AdditionalFields $additional_fields
     * @param \Enesdayanc\MasterpassRefund\StructType\RequestHeader $transaction_header
     * @param \Enesdayanc\MasterpassRefund\StructType\TransactionRefundRequestBody $transaction_body
     */
    public function __construct(\Enesdayanc\MasterpassRefund\StructType\AdditionalFields $additional_fields = null, \Enesdayanc\MasterpassRefund\StructType\RequestHeader $transaction_header = null, \Enesdayanc\MasterpassRefund\StructType\TransactionRefundRequestBody $transaction_body = null)
    {
        $this
            ->setAdditional_fields($additional_fields)
            ->setTransaction_header($transaction_header)
            ->setTransaction_body($transaction_body);
    }
    /**
     * Get additional_fields value
     * @return \Enesdayanc\MasterpassRefund\StructType\AdditionalFields
     */
    public function getAdditional_fields()
    {
        return $this->additional_fields;
    }
    /**
     * Set additional_fields value
     * @param \Enesdayanc\MasterpassRefund\StructType\AdditionalFields $additional_fields
     * @return \Enesdayanc\MasterpassRefund\StructType\TransactionRefundRequest
     */
    public function setAdditional_fields(\Enesdayanc\MasterpassRefund\StructType\AdditionalFields $additional_fields = null)
    {
        $this->additional_fields = $additional_fields;
        return $this;
    }
    /**
     * Get transaction_header value
     * @return \Enesdayanc\MasterpassRefund\StructType\RequestHeader|null
     */
    public function getTransaction_header()
    {
        return $this->transaction_header;
    }
    /**
     * Set transaction_header value
     * @param \Enesdayanc\MasterpassRefund\StructType\RequestHeader $transaction_header
     * @return \Enesdayanc\MasterpassRefund\StructType\TransactionRefundRequest
     */
    public function setTransaction_header(\Enesdayanc\MasterpassRefund\StructType\RequestHeader $transaction_header = null)
    {
        $this->transaction_header = $transaction_header;
        return $this;
    }
    /**
     * Get transaction_body value
     * @return \Enesdayanc\MasterpassRefund\StructType\TransactionRefundRequestBody|null
     */
    public function getTransaction_body()
    {
        return $this->transaction_body;
    }
    /**
     * Set transaction_body value
     * @param \Enesdayanc\MasterpassRefund\StructType\TransactionRefundRequestBody $transaction_body
     * @return \Enesdayanc\MasterpassRefund\StructType\TransactionRefundRequest
     */
    public function setTransaction_body(\Enesdayanc\MasterpassRefund\StructType\TransactionRefundRequestBody $transaction_body = null)
    {
        $this->transaction_body = $transaction_body;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassRefund\StructType\TransactionRefundRequest
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
