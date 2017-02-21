<?php
/**
 * Created by PhpStorm.
 * User: masson
 * Date: 21/02/2017
 * Time: 10:22
 *
 */class customercomments extends Module
{
    public function __construct()
    {
        $this->name = customercomments;
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
    public function install()
    {
                Configuration::execute(CREATE TABLE `ps_customer_comments` (
                         `id_customer_comments` int(10) UNSIGNED NOT NULL,
                         `title_customer_comments` varchar(255) UNSIGNED NOT NULL,
                        'content'text,
            ''

) ENGINE=InnoDB DEFAULT CHARSET=utf8;);
        return parent::install() && $this->registerHook('displayCustomerAccount');
    }
    public function hookdisplayCustomerAccount($param)
    {
        return $this->hookdisplayCustomerAccount();
    }

    public function uninstall()
    {
        Configuration::deleteByName('CUSTOMER_COMMENTS');
        return parent::uninstall();
    }
}