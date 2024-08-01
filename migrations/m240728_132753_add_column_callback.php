<?php

use yii\db\Migration;

/**
 * Class m240728_132753_add_column_callback
 */
class m240728_132753_add_column_callback extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('ac_callback', 'answer_admin_id', $this->integer(11)->defaultValue(null)->after('course'));
        $this->addColumn('ac_callback', 'checked_answer', $this->integer(11)->defaultValue(0)->after('course'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240728_132753_add_column_callback cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240728_132753_add_column_callback cannot be reverted.\n";

        return false;
    }
    */
}
