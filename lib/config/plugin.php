<?php
/**
 * @package Zipomagic.Config
 * @version 2.1.4
 * @copyright (c) 2014, Serge Rodovnichenko
 * @license http://www.webasyst.com/terms/#eula Webasyst
 */

return array(
    'name' => _wp('Russian Postcodes'),
    'description' => _wp('Automatically populate the Region and the City based on postcode. Russian Federation only.'),
    'vendor'=>670917,
    'version'=>'2.1.4',
    'img'=>'img/zipomagic.png',
    'shop_settings' => FALSE,
    'frontend'    => true,
    'icons'=>array(
        16 => 'img/zipomagic.png',
    ),
    'handlers' => array(
        'frontend_checkout' => 'hookFrontendCheckout'
    ),
);
