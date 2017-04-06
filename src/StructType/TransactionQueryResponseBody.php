<?php

namespace Enesdayanc\MasterpassRefund\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransactionQueryResponseBody StructType
 * @subpackage Structs
 */
class TransactionQueryResponseBody extends ResponseBody
{
    /**
     * The orders
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Enesdayanc\MasterpassRefund\ArrayType\ArrayOfOrderItem
     */
    public $orders;
    /**
     * Constructor method for TransactionQueryResponseBody
     * @uses TransactionQueryResponseBody::setOrders()
     * @param \Enesdayanc\MasterpassRefund\ArrayType\ArrayOfOrderItem $orders
     */
    public function __construct(\Enesdayanc\MasterpassRefund\ArrayType\ArrayOfOrderItem $orders = null)
    {
        $this
            ->setOrders($orders);
    }
    /**
     * Get orders value
     * @return \Enesdayanc\MasterpassRefund\ArrayType\ArrayOfOrderItem|null
     */
    public function getOrders()
    {
        return $this->orders;
    }
    /**
     * Set orders value
     * @param \Enesdayanc\MasterpassRefund\ArrayType\ArrayOfOrderItem $orders
     * @return \Enesdayanc\MasterpassRefund\StructType\TransactionQueryResponseBody
     */
    public function setOrders(\Enesdayanc\MasterpassRefund\ArrayType\ArrayOfOrderItem $orders = null)
    {
        $this->orders = $orders;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassRefund\StructType\TransactionQueryResponseBody
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
