<?php

class Sample_Contact_Model_Contact extends Mage_Core_Model_Abstract
{
    public function _construct()
        {
        parent::_construct();
        $this->_init('sample_contact/contact');
    }
    public function getEscapedMessage() 
    {
        return strip_tags($this->getData('message'));
    }
}