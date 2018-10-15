<?php
/* app/code/local/Sample/Contact/controllers/IndexController.php */
class Sample_Contact_IndexController extends Mage_Core_Controller_Front_Action
{

    public function indexAction ()
    {
        $this->loadLayout();
        Mage::helper('sample_contact/data')->fnord();
        
        if ($this->getRequest()->isPost()) {
            
            $postData = $this->getRequest()->getParams();
            $email = $postData['email'];
            $message = $postData['message'];
            $subject = "Nouveau message de la part de $email !";
            $to = 'tsorriaux@atecna.fr';
            
            if (/*mail($to, $subject, $message)*/true) {
                Mage::dispatchEvent("add_contact_done", ["email"=>$email,"message"=>$message]);
                
                $this->_redirectUrl('/contact/index/confirm');
            }
        }
        $this->renderLayout();
    }

    public function confirmAction ()
    {
        $this->loadLayout();
        $contacts = Mage::getModel('sample_contact/contact')
        ->getCollection();
        foreach ($contacts as $contact) {
            echo $contact->getData('mail') . '<br/>';
        }


        $this->renderLayout();
    }
}