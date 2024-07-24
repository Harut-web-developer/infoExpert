<?php

use yii\db\Migration;

/**
 * Class m240724_102205_translate_terms
 */
class m240724_102205_translate_terms extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('texts', [
            'slug' => 'termsTitle',
            'text_am' => 'ԴՐՈՒՅԹՆԵՐ ԵՎ ՊԱՅՄԱՆՆԵՐ',
            'text_ru'  => 'ПРАВИЛА И УСЛОВИЯ',
            'text_en'  => 'TERMS & CONDITIONS',
            'page_id'  => null
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240724_102205_translate_terms cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240724_102205_translate_terms cannot be reverted.\n";

        return false;
    }
    */
}
