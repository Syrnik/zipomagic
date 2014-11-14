<?php
/**
 * @package Zipomagic
 * @version 1.0
 * @copyright (c) 2014, Serge Rodovnichenko
 * @license http://www.webasyst.com/terms/#eula Webasyst
 */
class shopZipomagicPlugin extends shopPlugin
{
    /**
     * Обработка вызова хука frontend_checkout
     * 
     * @link http://www.webasyst.ru/developers/docs/plugins/hooks/shop/frontend_checkout/ Описание хука
     * @return string Отрендеренный шаблон с HTML/JS кодом для вставки в страницу
     */
    public function hookFrontendCheckout()
    {
        $view = waSystem::getInstance()->getView();

        $template = $this->path . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'frontend_checkout.html';
        $view->assign('settings', $this->getSettings());

        $html = $view->fetch($template);

        return $html;
    }
}