<?php

use yii\db\Migration;

/**
 * Class m240807_073729_add_column_ac_info
 */
class m240807_073729_add_column_ac_info extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('ac_info', 'site_logo', $this->string(255)->defaultValue(null)->after('phone_number'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240807_073729_add_column_ac_info cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240807_073729_add_column_ac_info cannot be reverted.\n";

        return false;
    }
    */
}
