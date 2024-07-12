<?php

use yii\db\Migration;

/**
 * Class m240712_133800_create_table_apply_now
 */
class m240712_133800_create_table_apply_now extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('ac_apply_now', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->defaultValue(null),
            'email' => $this->string(255)->defaultValue(null),
            'lesson_id' => $this->integer(11)->defaultValue(null),
            'lesson_type' => $this->integer(11)->defaultValue(null)->comment('1_individual,2_group,3_corporate'),
            'online_offline' => $this->integer(11)->defaultValue(null)->comment('1_online,0_offline'),
            'phone' => $this->string(255)->defaultValue(null),
            'status' => $this->string(255)->defaultValue(1),
            'create_date' => $this->timestamp(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240712_133800_create_table_apply_now cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240712_133800_create_table_apply_now cannot be reverted.\n";

        return false;
    }
    */
}
