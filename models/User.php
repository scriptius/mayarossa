<?php
/**
 * Created by PhpStorm.
 * User: v.mamonov
 * Date: 11.04.2016
 * Time: 14:56
 */

namespace app\models;

use yii\db\ActiveRecord;

class User
    extends ActiveRecord
{
    public $id;
    public $firstName;
    public $lastName;
    public $patronymic;
    public $login;
    public $email;
    public $roleId;
    public $status;


    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;

    public static function tableName()
    {
        return 'Users';
    }
}