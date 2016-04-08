<?php

use yii\db\Migration;

class m160408_083836_createTableUsersRoles extends Migration
{
    public function safeup()
    {
        $this->createTable('UsersRoles', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->unique(),
            'title' => $this->string()->unique(),

        ]);

        $this->insert('UsersRoles', [
            'id' => 1,
            'name' => 'admin',
            'title' => 'Администратор',
        ]);

        $this->insert('UsersRoles', [
            'id' => 2,
            'name' => 'user',
            'title' => 'Пользователь',
        ]);

        $this->createIndex('usersRoles_idx', 'Users', 'roleId');

        $this->addForeignKey('usersRoles_fk', 'Users', 'roleId', 'UsersRoles', 'id', 'CASCADE', 'CASCADE');

        $whatAdminId = (new \yii\db\Query())
            ->select('id')
            ->from('Users')
            ->where('login like \'Admin\'')
            ->all();

        $this->update('Users', ['roleId' => $whatAdminId[0]['id']], ['login' => 'Admin']);
    }

    public function safedown()
    {
        $this->dropForeignKey('usersRoles_fk', 'Users');
        $this->dropTable('UsersRoles');
    }
}
