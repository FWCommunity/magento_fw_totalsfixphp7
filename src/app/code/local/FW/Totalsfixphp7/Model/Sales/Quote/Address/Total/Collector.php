<?php
class FW_Totalsfixphp7_Model_Sales_Quote_Address_Total_Collector extends Mage_Sales_Model_Quote_Address_Total_Collector {
    protected function _getSortedCollectorCodes() {
        return array(
            'nominal',
            'subtotal',
            'tax_subtotal',
            'tax_shipping',
            'msrp',
            'freeshipping',
            'weee',
            'shipping',
            'discount',          
            'offer',
            'tax',
            'offer_after_tax',
            'grand_total',
            'aw_giftcard2'
        );
    }
}
