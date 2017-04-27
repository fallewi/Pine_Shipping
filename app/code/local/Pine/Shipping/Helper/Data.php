<?php
/**
 * Pine Shipping Helper
 */
class Pine_Shipping_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * Get rates array
     *
     * @return array
     */
    public function getRatesArray()
    {
        return array(
            array('country'=>'AT', 'weight'=>0,    'price'=>14.99, 'method'=>'spedition'),
            array('country'=>'AT', 'weight'=>25,   'price'=>24.99, 'method'=>'spedition'),
            array('country'=>'AT', 'weight'=>50,   'price'=>75,    'method'=>'spedition'),
            array('country'=>'BE', 'weight'=>0,    'price'=>14.99, 'method'=>'spedition'),
            array('country'=>'BE', 'weight'=>25,   'price'=>24.99, 'method'=>'spedition'),
            array('country'=>'BE', 'weight'=>50,   'price'=>75,    'method'=>'spedition'),
            array('country'=>'BG', 'weight'=>0,    'price'=>75,    'method'=>'spedition'),
            array('country'=>'CZ', 'weight'=>0,    'price'=>75,    'method'=>'spedition'),
            array('country'=>'DE', 'weight'=>0,    'price'=>9,     'method'=>'pauschale'),
            array('country'=>'DE', 'weight'=>40,   'price'=>75,    'method'=>'spedition'),
            array('country'=>'DK', 'weight'=>0,    'price'=>14.99, 'method'=>'spedition'),
            array('country'=>'DK', 'weight'=>25,   'price'=>24.99, 'method'=>'spedition'),
            array('country'=>'DK', 'weight'=>50,   'price'=>75,    'method'=>'spedition'),
            array('country'=>'ES', 'weight'=>0,    'price'=>75,    'method'=>'spedition'),
            array('country'=>'EE', 'weight'=>0,    'price'=>75,    'method'=>'spedition'),
            array('country'=>'FI', 'weight'=>0,    'price'=>75,    'method'=>'spedition'),
            array('country'=>'GB', 'weight'=>0,    'price'=>75,    'method'=>'spedition'),
            array('country'=>'GR', 'weight'=>0,    'price'=>75,    'method'=>'spedition'),
            array('country'=>'HU', 'weight'=>0,    'price'=>75,    'method'=>'spedition'),
            array('country'=>'IE', 'weight'=>0,    'price'=>75,    'method'=>'spedition'),
            array('country'=>'IT', 'weight'=>0,    'price'=>75,    'method'=>'spedition'),
            array('country'=>'LT', 'weight'=>0,    'price'=>75,    'method'=>'spedition'),
            array('country'=>'LU', 'weight'=>0,    'price'=>14.99, 'method'=>'spedition'),
            array('country'=>'LU', 'weight'=>25,   'price'=>24.99, 'method'=>'spedition'),
            array('country'=>'LU', 'weight'=>50,   'price'=>75,    'method'=>'spedition'),
            array('country'=>'LV', 'weight'=>0,    'price'=>75,    'method'=>'spedition'),
            array('country'=>'MT', 'weight'=>0,    'price'=>75,    'method'=>'spedition'),
            array('country'=>'NL', 'weight'=>0,    'price'=>14.99, 'method'=>'spedition'),
            array('country'=>'NL', 'weight'=>25,   'price'=>24.99, 'method'=>'spedition'),
            array('country'=>'NL', 'weight'=>50,   'price'=>75,    'method'=>'spedition'),
            array('country'=>'PL', 'weight'=>0,    'price'=>14.99, 'method'=>'spedition'),
            array('country'=>'PL', 'weight'=>25,   'price'=>24.99, 'method'=>'spedition'),
            array('country'=>'PL', 'weight'=>50,   'price'=>75,    'method'=>'spedition'),
            array('country'=>'PT', 'weight'=>0,    'price'=>75,    'method'=>'spedition'),
            array('country'=>'RO', 'weight'=>0,    'price'=>75,    'method'=>'spedition'),
            array('country'=>'SK', 'weight'=>0,    'price'=>75,    'method'=>'spedition'),
            array('country'=>'SI', 'weight'=>0,    'price'=>75,    'method'=>'spedition'),
            array('country'=>'SE', 'weight'=>0,    'price'=>75,    'method'=>'spedition'),
        );
    }
}