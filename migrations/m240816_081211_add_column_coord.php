<?php

use yii\db\Migration;

/**
 * Class m240816_081211_add_column_coord
 */
class m240816_081211_add_column_coord extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('ac_info', 'company_coord', $this->string(255)->defaultValue(null)->after('phone_number'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240816_081211_add_column_coord cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240816_081211_add_column_coord cannot be reverted.\n";

        return false;
    }
    */
}
