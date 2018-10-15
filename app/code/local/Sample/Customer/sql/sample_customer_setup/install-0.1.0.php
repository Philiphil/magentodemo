<?php

$this->startSetup();

$this->removeAttribute("customer","nouvel_attribut_client");

$entityTypeId = $this->getEntityTypeId("customer");
$attributeSetId = $this->getDefaultAttributeSetId($entityTypeId);
$attributeGroupId = $this->getDefaultAttributeGroupId($entityTypeId, $attributeSetId);

$this->addAttribute('customer', 'nouvel_attribut_client',array(
    "type" => 'varchar',
    'label' => 'Nouvel Attribut Client',
    'input' => 'text',
    'source'=>'',
    'backend'=>'',
    'frontend'=>'',
    'is_global'=>Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'required' => false,
    'default' => '0',
    'apply_to' => "simple",
    "note" => "",
    "visible" => "1",
    "is_searchable" => "1",
    "is_filtrable_in_search" => "0",
    "used_in_product_listing" => "1",
));

$this->addAttributeToGroup(
    $entityTypeId,
    $attributeSetId,
    $attributeGroupId,
    'nouvel_attribut_client',
    '999'
);

$used = array();
$used[] = "adminhtml_customer";
$attribute = Mage::getSingleton("eav/config")->getAttribute("customer", "nouvel_attribut_client");
$attribute->setData("used_in_forms",$used)
    ->setData("is_used_for_customer_segment","1")
    ->setData("is_system","0")
    ->setData("is_user_defined","1")
    ->setData("is_visible", "1")
    ->setData("sort_order",100)
    ->save();
$this->endSetup();