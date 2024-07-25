<?php

use yii\db\Migration;

/**
 * Class m240725_070158_translate_subscribe_text
 */
class m240725_070158_translate_subscribe_text extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('texts', [
            'slug' => 'already_subscribe',
            'text_am' => 'Շնորհակալություն! Դուք արդեն բաժանորդագրված էիք։',
            'text_ru'  => 'Спасибо! Вы уже подписались.',
            'text_en'  => 'Thank you! You were already subscribed.',
            'page_id'  => null
        ]);
        $this->insert('texts', [
            'slug' => 'successfully_subscribed',
            'text_am' => 'Շնորհակալություն! Դուք հաջողությամբ բաժանորդագրվել եք: Հետևե՛ք վերջին թարմացումներին և առաջարկներին:',
            'text_ru'  => 'Спасибо! Вы успешно подписались. Следите за последними обновлениями и предложениями.',
            'text_en'  => 'Thank you! You have successfully subscribed. Stay tuned for the latest updates and offers.',
            'page_id'  => null
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240725_070158_translate_subscribe_text cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240725_070158_translate_subscribe_text cannot be reverted.\n";

        return false;
    }
    */
}
