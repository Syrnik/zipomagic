<?php
return array(
    'shop_zipomagic_zip' => array(
        'id' => array('int', 11, 'null' => 0, 'autoincrement' => 1),
        'zip' => array('char', 6, 'null' => 0),
        'region_code' => array('varchar', 8, 'null' => 0),
        'city' => array('varchar', 60, 'null' => 0),
        'actdate' => array('date', 'null' => 0),
        ':keys' => array(
            'PRIMARY' => 'id',
            'zip' => array('zip', 'unique' => 1),
            'region_id' => 'region_code',
        ),
    ),
);