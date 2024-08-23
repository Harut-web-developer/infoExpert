<?php

use yii\db\Migration;

/**
 * Class m240821_144711_create_table_ac_user_video_watch
 */
class m240821_144711_create_table_ac_user_video_watch extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('ac_user_video_watch', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(11)->defaultValue(null),
            'lesson_id' => $this->integer(11)->defaultValue(null),
            'video_id' => $this->integer(11)->defaultValue(null),
            'check_watch' => $this->integer(11)->defaultValue(null)->comment('1_watched video'),
            'status' => $this->string(255)->defaultValue(1),
            'create_date' => $this->timestamp(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240821_144711_create_table_ac_user_video_watch cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240821_144711_create_table_ac_user_video_watch cannot be reverted.\n";

        return false;
    }
    */
}
