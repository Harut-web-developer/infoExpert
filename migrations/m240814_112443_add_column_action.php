<?php

use yii\db\Migration;

/**
 * Class m240814_112443_add_column_action
 */
class m240814_112443_add_column_action extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('ac_groups', 'action', $this->integer(11)->defaultValue(null)
            ->comment('1_online, 0_offline')->after('lesson_count'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240814_112443_add_column_action cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240814_112443_add_column_action cannot be reverted.\n";

        return false;
    }
    */
}
