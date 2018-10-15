<?php

$installer = $this;
$installer->startSetup();

$installer->removeAttribute("customer_address","digital_code");
$installer->addAttribute("customer_address","digital_code",
    array(
        'label' => 'Code digital',
        'visible' => true,
        'required' => false,
        'type' => 'varchar',
        'input' => 'text'
    )
);

$attribute = Mage::getSingleton('eav/config')->getAttribute('customer_address','digital_code');
$attribute->setData('used_in_forms', 
    array(
        'adminhtml_checkout',
        'adminhtml_customer',
        'adminhtml_customer_address',
        'checkout_account_create',
        'checkout_register',
        'customer_account_create',
        'customer_account_edit',
        'customer_address_edit',
        'customer_register_address'
    )
)->setData('sort_order',250);
$attribute->save();


$installer->getConnection()
->addColumn($installer->getTable('sales_flat_order_address'),'digital_code',array(
'type'=>'text',
'nullable'=>false,
'length'=>255,
'comment'=>'Digital code'
));

$installer->getConnection()
->addColumn($installer->getTable('sales_flat_quote_address'),'digital_code',array(
'type'=>'text',
'nullable'=>false,
'length'=>255,
'comment'=>'Digital code'
));


$installer->endSetup();