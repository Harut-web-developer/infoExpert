<?php

use yii\db\Migration;

/**
 * Class m240709_083948_create_table_my_card
 */
class m240709_083948_create_table_my_card extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('ac_my_card', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(11)->defaultValue(null),
            'lessons_id' => $this->integer(11)->defaultValue(null),
            'status' => $this->string(255)->defaultValue(1),
            'create_date' => $this->timestamp(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240709_083948_create_table_my_card cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240709_083948_create_table_my_card cannot be reverted.\n";

        return false;
    }
    */
}
