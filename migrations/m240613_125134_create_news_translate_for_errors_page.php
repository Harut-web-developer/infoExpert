<?php

use yii\db\Migration;

/**
 * Class m240613_125134_create_news_translate_for_errors_page
 */
class m240613_125134_create_news_translate_for_errors_page extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('texts', [
            'slug' => 'notFound',
            'text_am' => 'էջը չի գտնվել',
            'text_ru'  => 'страница не найдена',
            'text_en'  => 'page not found',
            'page_id'  => null
        ]);
        $this->insert('texts', [
            'slug' => 'notFoundBtn',
            'text_am' => 'ԳԼԽԱՎՈՐ ԷՋ',
            'text_ru'  => 'ГЛАВНАЯ СТРАНИЦА',
            'text_en'  => 'GO BACK HOME',
            'page_id'  => null
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240613_125134_create_news_translate_for_errors_page cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240613_125134_create_news_translate_for_errors_page cannot be reverted.\n";

        return false;
    }
    */
}
