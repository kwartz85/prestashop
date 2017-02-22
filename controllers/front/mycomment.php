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

class customercommentsmycommentModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        parent::initContent();
        if (Tools::getIsset('comment')&& Tools::getIsset('stars'))
        {
            $comment= new CustomerCommentsModel();
            $comment->id_customer = $this->context->customer->id;
            $comment->comment = Tools::getValue('comment');
            $comment->stars = Tools::getValue('stars');
            $comment->add();
        }
        return $this->setTemplate('form_comment.tpl');//permet de générer le template
    }
}