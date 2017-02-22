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

class CustomerCommentMyControllerModuleFrontController extends ModuleFrontController
{
    public function __construct()
    {
        parent::__construct();
        $this->context = Context::getContext();// pour appeler tous les objets
    }
    public function initContent()
    {
        if
        (Tools::getIsset('submitaddcomment')){
            $this->context->smarty->assign(array(
                'comment' => Tools::getValue('comment'),
                'note' => Tools::getValue('note')
            ));
        }

        parent::initContent();
        return $this->setTemplate('form_comment.tpl');//permet de générer le template
    }
}