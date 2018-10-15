<?php
/**
* Sample Contact Model Resource Contact
*
* @category   Sample
* @package    Sample_Contact
* @author    Nicolas Verhoye <nicolas.verhoye@gmail.com>
*/
class Sample_Contact_Model_Resource_Contact extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('sample_contact/contact', 'id');
    }
}