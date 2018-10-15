<?php

class Sample_Crouter_Controller_Router extends Mage_Core_Controller_Varien_Router_Abstract{
    public function initControllerRouters($observer){
        $front = $observer->getEvent()->getFront();
        $front->addRouter("sample_crouter", $this);
    }
    public function match(\Zend_Controller_Request_Http $request){
        $identifier = trim($request->getPathInfo(), "/");

        $condition = new Varien_Object(
            array(
                    "identifier" => $identifier,
                    "continue" => true,
            )
        );

        Mage::dispatchEvent("sample_crouter_controller_router_match_before", array(
            "router" => $this,
            "condition" => $condition,
        ));

        if ($condition->getRedirectUrl()){
            Mage::app()->getFrontController->getResponse()
            ->setRedirect($condition->getRedirectUrl())->sendResponse();
            $request->setDispatched(true);
        }

        if(!$condition->getContinue()) return false;
        
        preg_match("#^s/([\w\-]+\.html$#", $identifier, $brandName);
        if (!isset($brandName[1])) return false;
        
        $brand = Mage::helper("sample_crouter");
        $brandId = $brand->checkIdentifier($brandName[1], "title");
        if(!$brandId) return $false;

        $request->setModuleName("sample_crouter")->setControllerName("page")->setActionName('view')->setParam('title', $brandId);
        return true;

    }
}