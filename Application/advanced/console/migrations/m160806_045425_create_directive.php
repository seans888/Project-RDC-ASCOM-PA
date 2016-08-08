<?php

use yii\db\Migration;

class m160806_045425_create_directive extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%directive}}', [
            'id' => $this->primaryKey(),
            'directive_date' => $this->date()->notNull(),
            'directive_type' => $this->string(32)->notNull()
        ], $tableOptions);
    }

    public function down()
    {
        echo "m160806_045425_create_directive cannot be reverted.\n";

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
