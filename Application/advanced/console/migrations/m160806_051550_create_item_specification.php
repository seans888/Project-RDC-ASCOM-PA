<?php

use yii\db\Migration;

class m160806_051550_create_item_specification extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%item_specification}}', [
            'id' => $this->primaryKey(),
            'itemspec_date' => $this->date()->notNull()
        ], $tableOptions);

    }

    public function down()
    {
        echo "m160806_051550_create_item_specification cannot be reverted.\n";

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
