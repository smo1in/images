<?php

use yii\db\Migration;

/**
 * Class m200305_133941_first_migration
 */
class m200305_133941_first_migration extends Migration
{
    public function up()
    {
        $this->createTable('auth', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'source' => $this->string()->notNull(),
            'source_id' => $this->string()->notNull(),
        ]);

        $this->addForeignKey('fk-auth-user_id-user-id', 'auth', 'user_id', 'user', 'id', 'CASCADE', 'CASCADE');
    }


    public function down()
    {
        $this->dropTable('auth');
    }
}
