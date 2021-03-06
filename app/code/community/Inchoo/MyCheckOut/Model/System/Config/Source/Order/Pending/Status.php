<?php

class Inchoo_MyCheckOut_Model_System_Config_Source_Order_Pending_Status
{
    protected $_stateStatuses = array(
        Mage_Sales_Model_Order::STATE_NEW, /* fresh new order, "new" order state */
    );

    public function toOptionArray()
    {
        if ($this->_stateStatuses) {
            $statuses = Mage::getSingleton('sales/order_config')->getStateStatuses($this->_stateStatuses);
        } else {
            $statuses = Mage::getSingleton('sales/order_config')->getStatuses();
        }
        
        $options = array();
        
        foreach ($statuses as $code=>$label) {
            $options[] = array(
               'value' => $code,
               'label' => $label
            );
        }
        
        return $options;
    }
}
