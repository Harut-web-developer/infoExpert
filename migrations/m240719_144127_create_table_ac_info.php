<?php

use yii\db\Migration;

/**
 * Class m240719_144127_create_table_ac_info
 */
class m240719_144127_create_table_ac_info extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('ac_info', [
            'id' => $this->primaryKey(),
            'partner' => $this->integer(11)->defaultValue(null),
            'products' => $this->integer(11)->defaultValue(null),
            'programms' => $this->integer(11)->defaultValue(null),
            'instagram_link' => $this->string(255)->defaultValue(null),
            'facebook_link' => $this->string(255)->defaultValue(null),
            'linkdin_link' => $this->string(255)->defaultValue(null),
            'status' => $this->string(255)->defaultValue(1),
            'create_date' => $this->timestamp(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240719_144127_create_table_ac_info cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240719_144127_create_table_ac_info cannot be reverted.\n";

        return false;
    }
    */
}
