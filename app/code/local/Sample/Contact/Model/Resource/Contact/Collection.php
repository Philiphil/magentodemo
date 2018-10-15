<?php

class Sample_Contact_Model_Resource_Contact_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{

   /**
    * Resource initialization
    */
    protected function _construct()
    {
        $this->_init('sample_contact/contact');
    }
}