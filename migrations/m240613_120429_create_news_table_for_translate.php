<?php

use yii\db\Migration;

/**
 * Class m240613_120429_create_news_table_for_translate
 */
class m240613_120429_create_news_table_for_translate extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('texts', [
            'slug' => 'seeMoreBtn',
            'text_am' => 'Գնել հիմա',
            'text_ru'  => 'Купить',
            'text_en'  => 'Buy now',
            'page_id'  => 10
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240613_120429_create_news_table_for_translate cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240613_120429_create_news_table_for_translate cannot be reverted.\n";

        return false;
    }
    */
}
