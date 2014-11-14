<?php
/**
 * @package Zipomagic.Config
 * @version 1.1
 * @copyright (c) 2014, Serge Rodovnichenko
 * @license http://www.webasyst.com/terms/#eula Webasyst
 */

return array(
    'show_hint' => array(
        'title' => 'Показывать подсказки',
        'description' => 'В форме ввода адреса, рядом с полем индекса, будут показаны подсказки типа «Регион и Город будут определены автоматически», «Проверьте правильность заполнения» и т.д. Показ этих подсказок можно отключить здесь.',
        'value' => 1,
        'control_type' => waHtmlControl::CHECKBOX
    )
);
