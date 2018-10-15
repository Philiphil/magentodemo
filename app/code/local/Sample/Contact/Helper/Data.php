<?php 

class Sample_Contact_Helper_Data extends Mage_Core_Helper_Abstract{
    public function fnord(){
        var_dump(Mage::getStoreConfig('contact_section/contact_group/contact_field'));
    }
}