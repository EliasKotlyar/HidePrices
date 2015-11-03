<?php
/**
 * Created by PhpStorm.
 * User: Eko
 * Date: 15.02.2015
 * Time: 16:50
 */
class Twinsen_HidePrices_Model_Observer
{
    public function catalog_product_is_salable_after($observer)
    {

        $salable = $observer->getSalable();
        $loggedIn = Mage::getSingleton('customer/session')->isLoggedIn();
        if(! $loggedIn){
            $salable->setIsSalable(false);
        }

        return $this;
    }
}
