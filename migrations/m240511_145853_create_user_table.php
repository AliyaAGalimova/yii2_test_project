<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m240511_145853_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'username' => $this->string(12)->notNull()->unique(),
            'password' => $this->string(8)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');
    }
}
