<?php

use yii\db\Migration;

/**
 * Class m240814_133214_create_table_ac_video_lessons
 */
class m240814_133214_create_table_ac_video_lessons extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('ac_video_lessons', [
            'id' => $this->primaryKey(),
            'lesson_id' => $this->integer(11)->defaultValue(null),
            'lesson_number' => $this->integer(11)->defaultValue(null),
            'name_am' => $this->string(255)->defaultValue(null),
            'name_ru' => $this->string(255)->defaultValue(null),
            'name_en' => $this->string(255)->defaultValue(null),
            'video' => $this->string(255)->defaultValue(null),
            'type' => $this->integer(11)->defaultValue(null)->comment('0_youtube, 1_other'),
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
        echo "m240814_133214_create_table_ac_video_lessons cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240814_133214_create_table_ac_video_lessons cannot be reverted.\n";

        return false;
    }
    */
}
