<?php

use yii\db\Migration;

/**
 * Class m190321_011837_prodycts
 */
class m190321_011837_prodycts extends Migration
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
        $this->createTable('{{%prodycts}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'description'=>$this->string()->notNull()


        ], $tableOptions);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%prodycts}}');
        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190321_011837_prodycts cannot be reverted.\n";

        return false;
    }
    */
}
