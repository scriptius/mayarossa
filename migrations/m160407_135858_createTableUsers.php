<?php

use yii\db\Schema;
use yii\db\Migration;

class m160407_135858_createTableUsers extends Migration
{
    public function safeUp()
    {
        $this->createTable('Users', [
            'id' => $this->bigPrimaryKey(),
            'firstName' => $this->string()->notNull(),
            'lasttName' => $this->string()->notNull(),
            'email' => $this->string()->notNull()->unique(),
            'roleId' => $this->integer()->unsigned()
        ]);

        $this->insert('Users', [
            'firstName' => 'Admin',
            'lasttName' => 'Admin',
            'email' => 'admin@mayarossa.ru',
            'roleId' => 1
        ]);
    }

    public function safedown()
    {
     $this->dropTable('Users');
    }
}
