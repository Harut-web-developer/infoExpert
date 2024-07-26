<?php

use yii\db\Migration;

/**
 * Class m240719_103117_create_table_subscribers
 */
class m240719_103117_create_table_subscribers extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
//        Harut

        $this->createTable('ac_subscribers', [
            'id' => $this->primaryKey(),
            'email' => $this->string(255)->defaultValue(null),
            'status' => $this->string(255)->defaultValue(1),
            'create_date' => $this->timestamp(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240719_103117_create_table_subscribers cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240719_103117_create_table_subscribers cannot be reverted.\n";

        return false;
    }
    */
}
