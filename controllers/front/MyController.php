<?php

/**
 * Created by PhpStorm.
 * User: masson
 * Date: 21/02/2017
 * Time: 15:58
 */
if (!defined('_PS_VERSION_')) {
    exit;
}

class CustomerCommentMyControllerModuleFrontController extends FrontController
{
   public function initContent()
   {
       parent::initContent();
       $action = Tools::getValue('action');

       if (!Tools::isSubmit('myajax'))
       $this->assign();
       elseif (!empty($action) && method_exists($this, 'ajaxProcess'.Tools::toCamelCase($action)))
       $this->{'ajaxProcess'.Tools::toCamelCase($action)}();
       else
       die(Tools::jsonEncode(array('error' => 'method doesn\'t exist')));

   }


}



