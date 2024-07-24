<?php

use yii\db\Migration;

/**
 * Class m240724_072449_translate_policy
 */
class m240724_072449_translate_policy extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('texts', [
            'slug' => 'policy',
            'text_am' => 'ԳԱՂՏՆԻՈՒԹՅԱՆ ՔԱՂԱՔԱԿԱՆՈՒԹՅՈՒՆ',
            'text_ru'  => 'ПОЛИТИКА КОНФИДЕНЦИАЛЬНОСТИ',
            'text_en'  => 'PRIVACY & POLICY',
            'page_id'  => null
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240724_072449_translate_policy cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240724_072449_translate_policy cannot be reverted.\n";

        return false;
    }
    */
}
