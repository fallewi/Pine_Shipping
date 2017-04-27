<?php

class Pine_Shipping_Model_Carrier extends Mage_Shipping_Model_Carrier_Abstract implements Mage_Shipping_Model_Carrier_Interface
{
    /**
     * Carrier's code, as defined in parent class
     *
     * @var string
     */
    protected $_code = 'pine_shipping';

    /**
     * Returns available shipping rates for Pine Shipping carrier
     *
     * @param Mage_Shipping_Model_Rate_Request $request
     * @return Mage_Shipping_Model_Rate_Result
     */
    public function collectRates(Mage_Shipping_Model_Rate_Request $request)
    {
        /** @var Mage_Shipping_Model_Rate_Result $result */
        $result = Mage::getModel('shipping/rate_result');

        /** @var Pine_Shipping_Helper_Data $ratesArray */
        $ratesArray = Mage::helper('pine_shipping')->getRatesArray();

        $totalWeight = 0;
        $isGefahrgut = FALSE;
        foreach ($request->getAllItems() as $item) {
            $product = Mage::getModel('catalog/product')->load($item->getProductId());
            if ($product->getGefahrgut() == 1) {
                $isGefahrgut = TRUE;
            }
            $totalWeight += $item->getRowWeight();
        }

        $destCountryId = $request->getDestCountryId();

        $currentMethod = 'pauschale';
        $currentPrice = 9;
        foreach ($ratesArray as $rate) {
            if ($destCountryId == $rate['country'] && $totalWeight >= $rate['weight']) {
                $currentMethod = $rate['method'];
                $currentPrice = $rate['price'];
            }
        }

        if ($destCountryId != 'DE' && $isGefahrgut) {
            $currentPrice = 75;
            $currentMethod = 'spedition';
        }

        $result->append($this->_getRate($currentMethod, $currentPrice));

        return $result;
    }

    /**
     * Returns Allowed shipping methods
     *
     * @return array
     */
    public function getAllowedMethods()
    {
        return array(
            'pauschale'    =>  'Versandkostenpauschale',
            'spedition'     =>  'Speditionsversand',
        );
    }

    /**
     * Get Standard rate object
     *
     * @return Mage_Shipping_Model_Rate_Result_Method
     */
    protected function _getRate($method, $price)
    {
        /** @var Mage_Shipping_Model_Rate_Result_Method $rate */
        $rate = Mage::getModel('shipping/rate_result_method');
        $rate->setCarrier($this->_code);
        $rate->setCarrierTitle($this->getConfigData('title'));
        $rate->setMethod($method);
        $rate->setMethodTitle($this->getAllowedMethods()[$method]);
        $rate->setPrice($price);
        $rate->setCost(0);
        return $rate;
    }
}