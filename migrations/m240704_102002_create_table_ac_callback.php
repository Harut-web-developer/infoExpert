<?php

use yii\db\Migration;

/**
 * Class m240704_102002_create_table_ac_callback
 */
class m240704_102002_create_table_ac_callback extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        /*Harut*/
        $this->createTable('ac_callback', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->defaultValue(null),
            'email' => $this->string(255)->defaultValue(null),
            'phone' => $this->string(255)->defaultValue(null),
            'course' => $this->integer(11)->defaultValue(null),
            'status' => $this->string(255)->defaultValue(1),
            'create_date' => $this->timestamp(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240704_102002_create_table_ac_callback cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240704_102002_create_table_ac_callback cannot be reverted.\n";

        return false;
    }
    */
}
