<?php
class Twinsen_HidePrices_Block_Product_Price extends FireGento_MageSetup_Block_Catalog_Product_Price{
    /**
     * Add content of template block below price html if defined in config
     *
     * @return string Price HTML
     */
    public function _toHtml()
    {
        $loggedIn = Mage::getSingleton('customer/session')->isLoggedIn();
        if($loggedIn){
            return parent::_toHtml();
        }
        return "";
    }
}