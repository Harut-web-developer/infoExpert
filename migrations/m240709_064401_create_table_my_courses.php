<?php

use yii\db\Migration;

/**
 * Class m240709_064401_create_table_my_courses
 */
class m240709_064401_create_table_my_courses extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
//        Harut
        $this->createTable('ac_my_lessons', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(11)->defaultValue(null),
            'lessons_id' => $this->integer(11)->defaultValue(null),
            'complete_percent' => $this->integer(11)->defaultValue(null),
            'status' => $this->string(255)->defaultValue(1),
            'create_date' => $this->timestamp(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240709_064401_create_table_my_courses cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240709_064401_create_table_my_courses cannot be reverted.\n";

        return false;
    }
    */
}
