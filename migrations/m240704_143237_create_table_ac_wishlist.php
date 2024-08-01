<?php

use yii\db\Migration;

/**
 * Class m240704_143237_create_table_ac_wishlist
 */
class m240704_143237_create_table_ac_wishlist extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        /*Harut*/

        $this->createTable('ac_wishlist', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(11)->defaultValue(null),
            'product_id' => $this->integer(11)->defaultValue(null),
            'type' => $this->integer(11)->defaultValue(null)->comment('1_lessons, 2_blogs'),
            'active' => $this->integer(11)->defaultValue(null),
            'status' => $this->string(255)->defaultValue(1),
            'create_date' => $this->timestamp(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240704_143237_create_table_ac_wishlist cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240704_143237_create_table_ac_wishlist cannot be reverted.\n";

        return false;
    }
    */
}
