<?php

use yii\db\Migration;

/**
 * Class m240618_083527_change_translate_about
 */
class m240618_083527_change_translate_about extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->update('texts',[
            'text_am' => 'IEA-Ի ՄԱՍԻՆ',
            'text_ru'  => 'О IEA',
            'text_en'  => 'About IEA',
        ], ['id' => 1]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240618_083527_change_translate_about cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240618_083527_change_translate_about cannot be reverted.\n";

        return false;
    }
    */
}
