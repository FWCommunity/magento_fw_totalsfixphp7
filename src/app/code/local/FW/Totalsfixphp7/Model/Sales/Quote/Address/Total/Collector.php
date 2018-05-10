<?php
class FW_Totalsfixphp7_Model_Sales_Quote_Address_Total_Collector extends Mage_Sales_Model_Quote_Address_Total_Collector {
    protected function _getSortedCollectorCodes() {
        return array(
            'nominal',
            'subtotal',
            'freeshipping',
            'giftwrapping',
            'tax_subtotal',
            'msrp',
            'weee',
            'shipping',
            'tax_shipping',
            'discount',
            'tax',
            'tax_giftwrapping',
            'grand_total',
            'reward',
            'giftcardaccount',
            'customerbalance'
        );
    }
}
