<?php

use yii\db\Migration;

class m160408_121913_testDropAndRecoveryTable extends Migration
{
    public function up()
    {
        /* 1 способ - Переименовать таблицу
    $this->renameTable('UsersRoles','UsersRolesRemove');
        */

        /*
         * 2 способ Экспорт и импорт дампа таблицы через консольную утилиту.
         * Способ пока не протестирован на боевом сервере, но указанные ниже комманды успешно выгружают
         * дамп таблицы и также успешно импортируют его на локальном проекте.
           Осталось придумать как передать пароли безопасным способом.
         * Это команда экспортирует дамп
          shell_exec('mysqldump --user=roottest --password=12345 mayarossa UsersRoles >UsersRoles.sql');
        Это команда импортирует дамп
          shell_exec(mysql -uroottest -p12345 mayarossa <UsersRoles.sql);
         * */

    }

    public function down()
    {
        /* 1 способ - Переименовать таблицу
        $this->renameTable('UsersRolesRemove','UsersRoles');
        */
    }

}
