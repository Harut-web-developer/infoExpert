<?php

use yii\db\Migration;

/**
 * Class m240829_075249_change_column_user_type
 */
class m240829_075249_change_column_user_type extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('user', 'groups_id', $this->string(255)->defaultValue(null));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240829_075249_change_column_user_type cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240829_075249_change_column_user_type cannot be reverted.\n";

        return false;
    }
    */
}
