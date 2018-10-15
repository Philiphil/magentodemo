<?php 
$installer = $this;
$installer->startSetup();
$installer->run("
CREATE TABLE `contact` (
`id` int(11) NOT NULL auto_increment,
`mail` text,
`message` text,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
");
$installer->endSetup();