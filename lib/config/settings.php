<?php
/**
 * @package Zipomagic.Config
 * @version 1.1
 * @copyright (c) 2014, Serge Rodovnichenko
 * @license http://www.webasyst.com/terms/#eula Webasyst
 */

return array(
    'steps' => array(
        'title' => 'Этап оформления заказа',
        'description' => 'Укажите, на каких этапах должен работать плагин — ввод контактной информации и/или выбор доставки. Отключите те, где адрес у покупателя не спрашивается.',
        'control_type' => waHtmlControl::GROUPBOX,
        'options' => array(
            'contactinfo' => array(
                'title' => 'Ввод контактной информации',
                'value' => 'contactinfo'
            ),
            'shipping' => array(
                'title' => 'Выбор доставки',
                'value' => 'shipping'
            )
        ),
        'value' => array('contactinfo'=>1)
    ),
    'show_hint' => array(
        'title' => 'Показывать подсказки',
        'description' => 'В форме ввода адреса, рядом с полем индекса, будут показаны подсказки типа «Регион и Город будут определены автоматически», «Проверьте правильность заполнения» и т.д. Показ этих подсказок можно отключить здесь.',
        'value' => 1,
        'control_type' => waHtmlControl::CHECKBOX
    )
);
