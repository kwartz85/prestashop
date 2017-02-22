<?php
/**
 * Created by PhpStorm.
 * User: masso
 * Date: 22/02/2017
 * Time: 12:18
 */

/*pour éviter l'accès au fichier sans prestashop*/
if (!defined('_PS_VERSION_')) {
    exit;
}

class CustomerCommentsModel extends ObjectModel
{
    public $id_customer;
    public $comment;
    public $stars;
    public $date_add;

    public static $definition = array(
        'table' => 'customer_comment',
        'primary' => 'id_customer_comment',
        'fields' => array(
            'id_customer' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'comment' => array('type' => self::TYPE_STRING, 'validate' => 'isString', 'required' => true),
            'stars' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'date_add' => array('type' => self::TYPE_DATE, 'validate' => 'isDate', 'required' => true),
        ),
    );



}