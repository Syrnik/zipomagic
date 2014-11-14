<?php
/**
 * Обработка запросов из фронтенда на выборку данных
 * 
 * @package Zipomagic.Controllers.Frontend
 * @version 1.1
 * @copyright (c) 2014, Serge Rodovnichenko
 * @license http://www.webasyst.com/terms/#eula Webasyst
 */
class shopZipomagicPluginFrontendZipomagicController extends waJsonController
{
    /**
     * Родительский метод переопределен чтобы ловил исключения и записывал их
     * в ошибки ответа. Заодно добавляет соответствующий заголовок в ответ
     * @param mixed $params Не используется ни здесь, ни родителями
     */
    public function run($params = null) {

        try{
            $this->execute();
        } catch (waException $ex) {
            $this->errors[] = $ex->getMessage();
        }

        $this->getResponse()->addHeader('Content-type', 'application/json');

        $this->display();
    }


    /**
     * @throws waException при возникших ошибках. Критических среди них нет.
     */
    public function execute()
    {
        $Zip = new shopZipomagicPluginZipModel();

        $zip_code = waRequest::get('zip', '', waRequest::TYPE_STRING_TRIM);
        
        if(empty($zip_code) || strlen($zip_code) !== 6)
            throw new waException(_wp('Wrong postal code'));

        $result = $Zip->getByField('zip', $zip_code);

        if(!$result || !isset($result['region_code']) || !isset($result['city']))
            throw new waException(_wp('Unknown postal code'));

        $this->response = $result;

    }
}
