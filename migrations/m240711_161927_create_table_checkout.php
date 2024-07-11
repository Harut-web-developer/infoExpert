<?php

use yii\db\Migration;

/**
 * Class m240711_161927_create_table_checkout
 */
class m240711_161927_create_table_checkout extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('ac_checkout', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(11)->defaultValue(null),
            'lessons_id' => $this->integer(11)->defaultValue(null),
            'price' => $this->integer(11)->defaultValue(null),
            'status' => $this->string(255)->defaultValue(1),
            'create_date' => $this->timestamp(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240711_161927_create_table_checkout cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240711_161927_create_table_checkout cannot be reverted.\n";

        return false;
    }
    */
}
