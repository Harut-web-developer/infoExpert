<?php

use yii\db\Migration;

/**
 * Class m240716_072052_create_table_ac_quize_log
 */
class m240716_072052_create_table_ac_quize_log extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
//        Harut

        $this->createTable('ac_quize_log', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(11)->defaultValue(null),
            'question_id' => $this->integer(11)->defaultValue(null),
            'result' => $this->integer(11)->defaultValue(null),
            'answers' => $this->string(100)->defaultValue(null),
            'username' => $this->string(255)->defaultValue(null),
            'email' => $this->string(255)->defaultValue(null),
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
        echo "m240716_072052_create_table_ac_quize_log cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240716_072052_create_table_ac_quize_log cannot be reverted.\n";

        return false;
    }
    */
}
