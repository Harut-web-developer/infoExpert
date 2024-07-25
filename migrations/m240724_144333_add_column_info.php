<?php

use yii\db\Migration;

/**
 * Class m240724_144333_add_column_info
 */
class m240724_144333_add_column_info extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('ac_info', 'phone_number', $this->string(255)->defaultValue(null)->after('linkdin_link'));
        $this->addColumn('ac_info', 'infoexpert_email', $this->string(255)->defaultValue(null)->after('linkdin_link'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240724_144333_add_column_info cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240724_144333_add_column_info cannot be reverted.\n";

        return false;
    }
    */
}
