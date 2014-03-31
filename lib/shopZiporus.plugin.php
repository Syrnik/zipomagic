<?php
/**
 * @version 1.0
 * @copyright (c) 2014, Serge Rodovnichenko
 * @license http://www.webasyst.com/terms/#eula Webasyst
 */
class shopZiporusPlugin extends shopPlugin
{
    public function hookFrontendCheckout()
    {

        $view = waSystem::getInstance()->getView();

        $template = $this->path . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'frontend_checkout.html';

        $html = $view->fetch($template);

        return $html;
    }
}