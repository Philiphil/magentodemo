<?php

    class Sample_Contact_Model_Observer extends Varien_Event_Observer{
        public function handler(Varien_Event_Observer $observer){

            $contact = Mage::getModel('sample_contact/contact');
            $contact->setData('mail',$observer->getEvent()->getEmail());
            $contact->setData('message',$observer->getEvent()->getMessage());
            $contact->save();

            return $this;
        }
    }