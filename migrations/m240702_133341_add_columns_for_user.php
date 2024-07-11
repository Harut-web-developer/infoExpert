<?php

use yii\db\Migration;

/**
 * Class m240702_133341_add_columns_for_user
 */
class m240702_133341_add_columns_for_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user', 'cv', $this->string(255)->defaultValue(null)->after('username'));
        $this->addColumn('user', 'image', $this->string(255)->defaultValue(null)->after('username'));
        $this->addColumn('user', 'linkdin_url', $this->string(255)->defaultValue(null)->after('username'));
        $this->addColumn('user', 'phone', $this->string(50)->defaultValue(null)->after('username'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240702_133341_add_columns_for_user cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240702_133341_add_columns_for_user cannot be reverted.\n";

        return false;
    }
    */
}
