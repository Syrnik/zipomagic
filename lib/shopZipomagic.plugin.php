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
        $current_step = waRequest::param('step', waRequest::request('step'));
        if(!$current_step) {
            $steps = waSystem::getInstance('shop')->getConfig()->getCheckoutSettings();
            $current_step = key($steps);
        }
        $template = $this->path . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'frontend_checkout.html';
        $view->assign('settings', $this->getSettings());
        $view->assign('stage', $current_step);
        $html = $view->fetch($template);

        return $html;
    }
}