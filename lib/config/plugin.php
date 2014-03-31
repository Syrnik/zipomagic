<?php

return array(
    'name' => _wp('Russian Postcodes'),
    'description' => _wp('Automatically populate the Region and the City based on postcode. Russian Federation only.'),
    'vendor'=>670917,
    'version'=>'1.0',
    'img'=>'img/ziporus.png',
    'shop_settings' => FALSE,
    'frontend'    => true,
    'icons'=>array(
        16 => 'img/ziporus.png',
    ),
    'handlers' => array(
        'frontend_checkout' => 'hookFrontendCheckout'
    ),
);
