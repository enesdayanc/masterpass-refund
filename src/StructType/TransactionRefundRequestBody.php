<?php

namespace Enesdayanc\MasterpassRefund\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransactionRefundRequestBody StructType
 * @subpackage Structs
 */
class TransactionRefundRequestBody extends AbstractStructBase
{
    /**
     * The order_no
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $order_no;
    /**
     * The trans_date
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $trans_date;
    /**
     * The amount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $amount;
    /**
     * The pointAmount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $pointAmount;
    /**
     * The client_ip
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $client_ip;
    /**
     * Constructor method for TransactionRefundRequestBody
     * @uses TransactionRefundRequestBody::setOrder_no()
     * @uses TransactionRefundRequestBody::setTrans_date()
     * @uses TransactionRefundRequestBody::setAmount()
     * @uses TransactionRefundRequestBody::setPointAmount()
     * @uses TransactionRefundRequestBody::setClient_ip()
     * @param string $order_no
     * @param string $trans_date
     * @param int $amount
     * @param int $pointAmount
     * @param string $client_ip
     */
    public function __construct($order_no = null, $trans_date = null, $amount = null, $pointAmount = null, $client_ip = null)
    {
        $this
            ->setOrder_no($order_no)
            ->setTrans_date($trans_date)
            ->setAmount($amount)
            ->setPointAmount($pointAmount)
            ->setClient_ip($client_ip);
    }
    /**
     * Get order_no value
     * @return string|null
     */
    public function getOrder_no()
    {
        return $this->order_no;
    }
    /**
     * Set order_no value
     * @param string $order_no
     * @return \Enesdayanc\MasterpassRefund\StructType\TransactionRefundRequestBody
     */
    public function setOrder_no($order_no = null)
    {
        // validation for constraint: string
        if (!is_null($order_no) && !is_string($order_no)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($order_no)), __LINE__);
        }
        $this->order_no = $order_no;
        return $this;
    }
    /**
     * Get trans_date value
     * @return string|null
     */
    public function getTrans_date()
    {
        return $this->trans_date;
    }
    /**
     * Set trans_date value
     * @param string $trans_date
     * @return \Enesdayanc\MasterpassRefund\StructType\TransactionRefundRequestBody
     */
    public function setTrans_date($trans_date = null)
    {
        // validation for constraint: string
        if (!is_null($trans_date) && !is_string($trans_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($trans_date)), __LINE__);
        }
        $this->trans_date = $trans_date;
        return $this;
    }
    /**
     * Get amount value
     * @return int|null
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param int $amount
     * @return \Enesdayanc\MasterpassRefund\StructType\TransactionRefundRequestBody
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: int
        if (!is_null($amount) && !is_numeric($amount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        return $this;
    }
    /**
     * Get pointAmount value
     * @return int|null
     */
    public function getPointAmount()
    {
        return $this->pointAmount;
    }
    /**
     * Set pointAmount value
     * @param int $pointAmount
     * @return \Enesdayanc\MasterpassRefund\StructType\TransactionRefundRequestBody
     */
    public function setPointAmount($pointAmount = null)
    {
        // validation for constraint: int
        if (!is_null($pointAmount) && !is_numeric($pointAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pointAmount)), __LINE__);
        }
        $this->pointAmount = $pointAmount;
        return $this;
    }
    /**
     * Get client_ip value
     * @return string|null
     */
    public function getClient_ip()
    {
        return $this->client_ip;
    }
    /**
     * Set client_ip value
     * @param string $client_ip
     * @return \Enesdayanc\MasterpassRefund\StructType\TransactionRefundRequestBody
     */
    public function setClient_ip($client_ip = null)
    {
        // validation for constraint: string
        if (!is_null($client_ip) && !is_string($client_ip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($client_ip)), __LINE__);
        }
        $this->client_ip = $client_ip;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassRefund\StructType\TransactionRefundRequestBody
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
