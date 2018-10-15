<?php

class Sample_Contact_Block_Clider extends Mage_Core_Block_Template{

    public function getImages(){
        $cliders = Mage::getModel('sample_contact/clider')->getCollection()->addFieldToSelect('url');
        return $cliders;
    }

}