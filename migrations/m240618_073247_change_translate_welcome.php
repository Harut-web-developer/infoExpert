<?php

use yii\db\Migration;

/**
 * Class m240618_073247_change_translate_welcome
 */
class m240618_073247_change_translate_welcome extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->update('texts',[
            'text_am' => 'ԲԱՐԻ ԳԱԼՈՒՍՏ',
        ], ['id' => 208]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240618_073247_change_translate_welcome cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240618_073247_change_translate_welcome cannot be reverted.\n";

        return false;
    }
    */
}
