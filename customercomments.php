<?php
/**
 * Created by PhpStorm.
 * User: masson
 * Date: 21/02/2017
 * Time: 10:22
 *
 */

include_once 'models/modelcustomercomments.php';
class customercomments extends Module
{
    public function __construct()
    {
        $this->name = 'customercomments';
        $this->displayName = $this->l('Customer comments');
        $this->tab = 'front_office_features';
        $this->description = 'all comments of customers';
        $this->author = 'Francois masson';
        $this->version = '1.0.0';
        $this->bootstrap = true;
        $this->ps_versions_compliancy = array(
            'min' => '1.6.0.0',
            'max' => _PS_VERSION_
        );
        parent::__construct();
    }

    /**
     * @return bool
     */
    public function install()
    {
        return parent::install()
            && $this->installDb()
            && $this->registerHook('displayCustomerAccount')
        ;

        $tab = new Tab();
        $tab->class_name = 'AdminCustomerCommentController';
        foreach (Language::getLanguages(true) as $lang) {
            $tab->name[(int)$lang['id_lang']] = 'Customer comments';
        }
        $tab->id_parent = (int)Tab::getIdFromClassName('AdminCustomerCommentController');
        $tab->module = $this->name;
        $tab->add();
    }

    public function installDb()
    {
        return Db::getInstance()->execute('
            CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'customer_comment` (
                 `id_customer_comment` INT NOT NULL AUTO_INCREMENT ,
                 `comment` VARCHAR(255) NOT NULL ,
                 `stars` INT NOT NULL ,
                 `id_customer` INT NOT NULL , 
                 `date_add` DATE NOT NULL ,
            PRIMARY KEY (`id_customer_comment`)
            ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8'
        );
    }
        public function hookDisplayCustomerAccount($params)
    {
        return $this->display(__FILE__,'comments_button.tpl');
    }

    public function uninstall()
    {
        Configuration::deleteByName('CUSTOMER_COMMENTS');
        return parent::uninstall();

        $tab = new Tab((int)Tab::getIdFromClassName('AdminCustomerCommentController'));
        $tab->delete();
    }
}