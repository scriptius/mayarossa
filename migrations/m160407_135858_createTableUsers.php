<?php

use yii\db\Schema;
use yii\db\Migration;

class m160407_135858_createTableUsers extends Migration
{
    public function safeUp()
    {
        $this->createTable('Users', [
            'id' => $this->bigPrimaryKey(),
            'firstName' => $this->string(),
            'lastName' => $this->string(),
            'patronymic' => $this->string(),
            'login' => $this->string()->notNull(),
            'email' => $this->string()->notNull()->unique(),
            'roleId' => $this->integer(),
            'status' => $this->boolean()->notNull()
        ]);

        $this->insert('Users', [
            'login' => 'Admin',
            'email' => 'admin@mayarossa.ru',
        ]);
    }

    public function safedown()
    {
     $this->dropTable('Users');
    }
}
