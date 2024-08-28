<?php

use yii\db\Migration;

/**
 * Class m240828_122248_add_column_ac_my_lessons
 */
class m240828_122248_add_column_ac_my_lessons extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('ac_my_lessons', 'order_id', $this->integer(11)->defaultValue(null)->after('id'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240828_122248_add_column_ac_my_lessons cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240828_122248_add_column_ac_my_lessons cannot be reverted.\n";

        return false;
    }
    */
}
