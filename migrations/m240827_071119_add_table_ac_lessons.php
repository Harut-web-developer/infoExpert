<?php

use yii\db\Migration;

/**
 * Class m240827_071119_add_table_ac_lessons
 */
class m240827_071119_add_table_ac_lessons extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('ac_lessons', 'rating_exist', $this->string(11)->defaultValue(null)
            ->comment('1_see, 0_noSee')->after('rating'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240827_071119_add_table_ac_lessons cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240827_071119_add_table_ac_lessons cannot be reverted.\n";

        return false;
    }
    */
}
