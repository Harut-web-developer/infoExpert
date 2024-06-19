<?php

use yii\db\Migration;

/**
 * Class m240619_104505_change_translate_about
 */
class m240619_104505_change_translate_about extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->update('texts',[
            'text_en'  => 'ABOUT IEA',
        ], ['id' => 1]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240619_104505_change_translate_about cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240619_104505_change_translate_about cannot be reverted.\n";

        return false;
    }
    */
}
