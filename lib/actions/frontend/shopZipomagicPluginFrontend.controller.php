<?php
/**
 * @package Zipomagic.Controllers.Frontend
 * @version 1.0
 * @copyright (c) 2014, Serge Rodovnichenko
 * @license http://www.webasyst.com/terms/#eula Webasyst
 */
class shopZipomagicPluginFrontendController extends waJsonController
{
    public function run($params = null) {

        try{
            $this->execute();
        } catch (waException $ex) {
            $this->errors[] = $ex->getMessage();
        }

        $this->getResponse()->addHeader('Content-type', 'application/json');

        $this->display();
    }

    public function execute()
    {
        $Zip = new shopZipomagicPluginZipModel();

        $zip_code = waRequest::get('zip', '', waRequest::TYPE_STRING_TRIM);

        if(empty($zip_code) || strlen($zip_code) !== 6)
            throw new waException(_wp('Wrong postal code'));

        $result = $Zip->getByField('zip', $zip_code);

        if(!$result || !isset($result['region_code']) || !isset($result['city']))
            throw new waException('Unknown postal code');

        $this->response = $result;

    }
}
