<?php

use yii\db\Migration;

class m160806_050752_create_result extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%result}}', [
            'id' => $this->primaryKey(),
            'result_date' => $this->date()->notNull(),
            'result_item' => $this->string(100)->notNull()
        ], $tableOptions);
    }

    public function down()
    {
        echo "m160806_050752_create_result cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
