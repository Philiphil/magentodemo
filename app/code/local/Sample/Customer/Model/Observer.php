<?php

class Sample_Customer_Model_Observer extends Mage_Customer_Model_Observer
{
    public function addColumn(Varien_Event_Observer $observer){
        $grid = $observer->getBlock();
        if ($grid instanceof Mage_Adminhtml_Block_Customer_Grid){
            $grid->addColumnAfter(
                "nouvel_attribut_client",
                array("header"=>mage::helper('customer')->__("nouvel attribut client"),
                "index" => "nouvel_attribut_client"
                ), "nouvel_attribut_client"
            );
        }
    }

    public function beforeActionLoad(Varien_Event_Observer $observer){
        $collection = $observer->getCollection();
        if(!isset($collection)){
            return;
        }
        if($collection instanceof Mage_Customer_Model_Ressource_Customer_Collection){
            $collection->addAttributeToSelect("nouvel_attribut_client");
        }
    }
}