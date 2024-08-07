<?php

use yii\db\Migration;

/**
 * Class m240805_070728_create_table_ac_rating
 */
class m240805_070728_create_table_ac_rating extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('ac_rating', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(11)->defaultValue(null),
            'lesson_id' => $this->integer(11)->defaultValue(null),
            'rating' => $this->integer(11)->defaultValue(null),
            'comment' => $this->text()->defaultValue(null),
            'status' => $this->string(255)->defaultValue(1),
            'create_date' => $this->timestamp(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240805_070728_create_table_ac_rating cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240805_070728_create_table_ac_rating cannot be reverted.\n";

        return false;
    }
    */
}
