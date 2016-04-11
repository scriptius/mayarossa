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
    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;

    public static function tableName()
    {
        return 'Users';
    }

    public function rules()
    {
        return [
            [['firstName', 'lastName', 'patronymic', 'login', 'email', 'roleId', 'status'], 'safe']
        ];
    }
}