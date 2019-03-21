<?php

use yii\db\Migration;

/**
 * Class m190321_011827_category
 */
class m190321_011827_category extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=INNODB';
        }
        $this->createTable('{{%category}}', [
            'category_id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            // status : 1- зареєстрований, 10- підтверджений, 11 - редактор, 100 - адмін


        ], $tableOptions);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
    $this->dropTable('{{$category}}');
        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190321_011827_category cannot be reverted.\n";

        return false;
    }
    */
}
