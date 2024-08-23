<?php

use yii\db\Migration;

/**
 * Class m240821_065825_create_table_ac_orders
 */
class m240821_065825_create_table_ac_orders extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('ac_orders', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(11)->defaultValue(null),
            'total_price' => $this->integer(11)->defaultValue(null),
            'order_num' => $this->integer()->defaultValue(0),
            'status' => $this->string(255)->defaultValue(1),
            'create_date' => $this->timestamp(),
        ]);
        $this->createTable('ac_orders_items', [
            'id' => $this->primaryKey(),
            'order_id' => $this->integer(11)->defaultValue(null),
            'lesson_id' => $this->integer(11)->defaultValue(null),
            'price' => $this->integer(11)->defaultValue(null),
            'order_num' => $this->integer()->defaultValue(0),
            'status' => $this->string(255)->defaultValue(1),
            'create_date' => $this->timestamp(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240821_065825_create_table_ac_orders cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240821_065825_create_table_ac_orders cannot be reverted.\n";

        return false;
    }
    */
}
