<?php

use yii\db\Migration;

/**
 * Class m240713_073733_add_columns_for_lessons_table
 */
class m240713_073733_add_columns_for_lessons_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('ac_lessons', 'img', $this->string(255)->defaultValue(null)->after('lesson_content_en'));
        $this->addColumn('ac_lessons', 'price', $this->integer(11)->defaultValue(null)->after('lesson_content_en'));
        $this->addColumn('ac_lessons', 'rating', $this->integer(11)->defaultValue(null)->after('lesson_content_en'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240713_073733_add_columns_for_lessons_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240713_073733_add_columns_for_lessons_table cannot be reverted.\n";

        return false;
    }
    */
}
