<?php

class Sample_Contact_Model_Clider extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('sample_contact/clider');
    }
}