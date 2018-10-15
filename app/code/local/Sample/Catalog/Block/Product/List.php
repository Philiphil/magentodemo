<?php

class Sample_Catalog_Block_Product_List extends Mage_Catalog_Block_Product_List
{
    protected function _getProductCollection(){
        die("argh");
    }
}