<?php

namespace Enesdayanc\MasterpassRefund\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfChequeList ArrayType
 * @subpackage Arrays
 */
class ArrayOfChequeList extends AbstractStructArrayBase
{
    /**
     * The cheque_list
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Enesdayanc\MasterpassRefund\StructType\ChequeList[]
     */
    public $cheque_list;
    /**
     * Constructor method for ArrayOfChequeList
     * @uses ArrayOfChequeList::setCheque_list()
     * @param \Enesdayanc\MasterpassRefund\StructType\ChequeList[] $cheque_list
     */
    public function __construct(array $cheque_list = array())
    {
        $this
            ->setCheque_list($cheque_list);
    }
    /**
     * Get cheque_list value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Enesdayanc\MasterpassRefund\StructType\ChequeList[]|null
     */
    public function getCheque_list()
    {
        return isset($this->cheque_list) ? $this->cheque_list : null;
    }
    /**
     * Set cheque_list value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Enesdayanc\MasterpassRefund\StructType\ChequeList[] $cheque_list
     * @return \Enesdayanc\MasterpassRefund\ArrayType\ArrayOfChequeList
     */
    public function setCheque_list(array $cheque_list = array())
    {
        foreach ($cheque_list as $arrayOfChequeListCheque_listItem) {
            // validation for constraint: itemType
            if (!$arrayOfChequeListCheque_listItem instanceof \Enesdayanc\MasterpassRefund\StructType\ChequeList) {
                throw new \InvalidArgumentException(sprintf('The cheque_list property can only contain items of \Enesdayanc\MasterpassRefund\StructType\ChequeList, "%s" given', is_object($arrayOfChequeListCheque_listItem) ? get_class($arrayOfChequeListCheque_listItem) : gettype($arrayOfChequeListCheque_listItem)), __LINE__);
            }
        }
        if (is_null($cheque_list) || (is_array($cheque_list) && empty($cheque_list))) {
            unset($this->cheque_list);
        } else {
            $this->cheque_list = $cheque_list;
        }
        return $this;
    }
    /**
     * Add item to cheque_list value
     * @throws \InvalidArgumentException
     * @param \Enesdayanc\MasterpassRefund\StructType\ChequeList $item
     * @return \Enesdayanc\MasterpassRefund\ArrayType\ArrayOfChequeList
     */
    public function addToCheque_list(\Enesdayanc\MasterpassRefund\StructType\ChequeList $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Enesdayanc\MasterpassRefund\StructType\ChequeList) {
            throw new \InvalidArgumentException(sprintf('The cheque_list property can only contain items of \Enesdayanc\MasterpassRefund\StructType\ChequeList, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->cheque_list[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Enesdayanc\MasterpassRefund\StructType\ChequeList|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Enesdayanc\MasterpassRefund\StructType\ChequeList|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Enesdayanc\MasterpassRefund\StructType\ChequeList|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Enesdayanc\MasterpassRefund\StructType\ChequeList|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Enesdayanc\MasterpassRefund\StructType\ChequeList|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string cheque_list
     */
    public function getAttributeName()
    {
        return 'cheque_list';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassRefund\ArrayType\ArrayOfChequeList
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
