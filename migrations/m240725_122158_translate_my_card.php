<?php

use yii\db\Migration;

/**
 * Class m240725_122158_translate_my_card
 */
class m240725_122158_translate_my_card extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->update('texts',[
            'text_ru' => 'Моя корзина',
        ], ['id' => 45]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240725_122158_translate_my_card cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240725_122158_translate_my_card cannot be reverted.\n";

        return false;
    }
    */
}
