<?php 
$installer = $this;
$installer->startSetup();
$installer->run("
CREATE TABLE `clider` (
`id` int(11) NOT NULL auto_increment,
`url` text,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
");

/*
$co = $installer->getConnection();
$co->beginTransaction
try{
        $table = $co->newTable("tablename")->addColumn("id",Varien_Db_Dbl_Table::TYPE_INTEGER,null,['nullable' => false]);
        $co->dropTable($table);
        $co->createTable($table);


    $installer->addAttributeSet("catalog_product", "Balais");

    $attrSetDefaultId = $installer->getAttributeSet("catalog_product", "Balais", "attribute_set_id");
    $attrSetId = $installer->getAttributeSet("catalog_product", "Balais", "attribute_set_id");
    $attrSet = Mage::getModel("eav/entity_attribute_set")->load($attrSetId);
    $attrSet->initFromSkeleton($attrSetDefaultId);
    $attrSet->save();

    $attrGroupName= "Balais group";

    $installer->addAttributeGroup("catalog_product", $attrSetIdn $attrGroupName);

    

        $co->commit();
}catch(Exception $e){
    $connection->rollBack;
}
*/


$installer->endSetup();