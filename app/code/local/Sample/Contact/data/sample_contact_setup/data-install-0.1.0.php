<?php
$installer=$this;
$installer->startSetup();
$newBLock= Mage::getModel('cms/page')
->setTitle('Test CMS Page Title')
->setContent('IM A PAGE')
->setIdentifier('page-url')
->setIsActive(true)
->save();
$installer->endSetup();