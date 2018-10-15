<?php
/**
* Sample Clider Model Resource Clider
*
* @category   Sample
* @package    Sample_Clider
* @author    Nicolas Verhoye <nicolas.verhoye@gmail.com>
*/
class Sample_Contact_Model_Resource_Clider extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('sample_contact/clider', 'id');
    }
}