<?php

class Sample_Preniumshipment_Model_Carrier    extends Mage_Shipping_Model_Carrier_Abstract    implements Mage_Shipping_Model_Carrier_Interface
{
    protected $_code = "sample_preniumshipment";

    public function collectRates(Mage_Shipping_Model_Rate_Request $request){
        $result = Mage::getModel('shipping/rate_result');
        $result->append($this->_getStandardShippingRate());
        return $result;
    }

    protected function _getStandardShippingRate(){
        $rate = Mage::getModel('shipping/rate_result_method');
        $rate->setCarrier($this->_code);
        $rate->setCarrierTitle($this->getConfigData('title'));
        $rate->setMetheod('sample_preniumshipment');
        $rate->setMethodTitle('livraison prenium');
        $rate-setPrice(40.00);
        return $rate;
    }

    public function getAllowedMethods(){
        return array("sample_preniumshipment"=>"livraison prenium");
    }

}