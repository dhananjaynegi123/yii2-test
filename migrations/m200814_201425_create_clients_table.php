<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Handles the creation of table `{{%clients}}`.
 */
class m200814_201425_create_clients_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('clients', [
            "id" => Schema::TYPE_PK,
            "name" => Schema::TYPE_STRING,
            "email" => Schema::TYPE_STRING,
            "password" => Schema::TYPE_STRING,
            "user_type" => Schema::TYPE_STRING,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('clients');
    }
}
