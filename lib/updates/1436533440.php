<?php

$sqls = file_get_contents(dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR .'config' . DIRECTORY_SEPARATOR . 'shop_zipomagic_zip.sql');
$sqls = preg_split("/;\r?\n/", $sqls);
$model = new waModel();
foreach ($sqls as $sql) {
    if (trim($sql)) {
        $model->exec($sql);
    }
}
