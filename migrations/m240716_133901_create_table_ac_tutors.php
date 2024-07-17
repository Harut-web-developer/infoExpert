<?php

use yii\db\Migration;

/**
 * Class m240716_133901_create_table_ac_tutors
 */
class m240716_133901_create_table_ac_tutors extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('ac_tutors', [
            'id' => $this->primaryKey(),
            'lesson_id' => $this->integer(11)->defaultValue(null),
            'username_am' => $this->string(255)->defaultValue(null),
            'username_ru' => $this->string(255)->defaultValue(null),
            'username_en' => $this->string(255)->defaultValue(null),
            'text_am' => $this->text()->defaultValue(null),
            'text_ru' => $this->text()->defaultValue(null),
            'text_en' => $this->text()->defaultValue(null),
            'img' => $this->string(255)->defaultValue(null),
            'status' => $this->string(255)->defaultValue(1),
            'create_date' => $this->timestamp(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240716_133901_create_table_ac_tutors cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240716_133901_create_table_ac_tutors cannot be reverted.\n";

        return false;
    }
    */
}
