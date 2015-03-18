<?php
/**
 * @package Zipomagic.Config
 * @version 1.0
 * @copyright (c) 2014, Serge Rodovnichenko
 * @license http://www.webasyst.com/terms/#eula Webasyst
 */
$sqls = file_get_contents(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'shop_zipomagic_zip.sql');
$sqls = preg_split("/;\r?\n/", $sqls);
$model = new waModel();
foreach ($sqls as $sql) {
    if (trim($sql)) {
        $model->exec($sql);
    }
}

