<?php

use yii\db\Migration;

/**
 * Class m240611_085036_result
 */
class m240611_085036_result extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('texts', [
            'slug' => 'resultBlackboardResult',
            'text_am' => 'ՁԵՐ ԱՐԴՅՈՒՆՔՆԵՐԸ',
            'text_ru' => 'ВАШИ РЕЗУЛЬТАТЫ',
            'text_en' => 'YOUR RESULTS',
            'page_id' => 25,
        ]);
        $this->insert('texts', [
            'slug' => 'btnResult1',
            'text_am' => 'ԱՅԼ QUIZE',
            'text_ru' => 'ДРУГАЯ ВИКТОРИНА',
            'text_en' => 'ANOTHER QUIZ',
            'page_id' => 25,
        ]);
        $this->insert('texts', [
            'slug' => 'btnResult2',
            'text_am' => 'ԳԼԽԱՎՈՐ ԷՋ',
            'text_ru' => 'ГЛАВНАЯ СТРАНИЦА',
            'text_en' => 'MAIN PAGE',
            'page_id' => 25,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240611_085036_result cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240611_085036_result cannot be reverted.\n";

        return false;
    }
    */
}
