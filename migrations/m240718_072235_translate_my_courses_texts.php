<?php

use yii\db\Migration;

/**
 * Class m240718_072235_translate_my_courses_texts
 */
class m240718_072235_translate_my_courses_texts extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('texts', [
            'slug' => 'rating',
            'text_am' => 'Թողնել վարկանիշ',
            'text_ru'  => 'Оставить оценку',
            'text_en'  => 'Leave a rating',
            'page_id'  => 8
        ]);
        $this->insert('texts', [
            'slug' => 'complete',
            'text_am' => 'ավարտված',
            'text_ru'  => 'завершено',
            'text_en'  => 'complete',
            'page_id'  => 8
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240718_072235_translate_my_courses_texts cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240718_072235_translate_my_courses_texts cannot be reverted.\n";

        return false;
    }
    */
}
