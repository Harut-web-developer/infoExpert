<?php

use yii\db\Migration;

/**
 * Class m240819_103357_translate_video_lesson_text
 */
class m240819_103357_translate_video_lesson_text extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('texts', [
            'slug' => 'videoLessonsText',
            'text_am' => 'Այս դասը չի պարունակում վիդեո դաս կամ ջնջված է:',
            'text_ru'  => 'Этот урок не содержит видео урока или был удален.',
            'text_en'  => "This lesson does not contain a video lesson or has been deleted.",
            'page_id'  => null
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240819_103357_translate_video_lesson_text cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240819_103357_translate_video_lesson_text cannot be reverted.\n";

        return false;
    }
    */
}
