<?php
class Sample_Contact_Adminhtml_ContactController extends Mage_Adminhtml_Controller_Action
{
  public function indexAction()
  {
        $this->loadLayout();
        $this->renderLayout();
        echo "we admin now";
       // $film = Mage::getModel('sample_contact/clider');
       // $film->setName($name);
       // $film->save();
  }
}