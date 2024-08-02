<?php

use yii\db\Migration;

/**
 * Class m240802_143214_translate_rating
 */
class m240802_143214_translate_rating extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('texts', [
            'slug' => 'ratingTitlePopup',
            'text_am' => 'Ինչպե՞ս կգնահատեք այս դասընթացը',
            'text_ru'  => 'Как бы вы оценили этот курс?',
            'text_en'  => "How would you rate this course?",
            'page_id'  => null
        ]);
        $this->insert('texts', [
            'slug' => 'ratingTextPopup',
            'text_am' => 'Գնահատեք կուրսը',
            'text_ru'  => 'Оцените курс',
            'text_en'  => "Rating Course",
            'page_id'  => null
        ]);
        $this->insert('texts', [
            'slug' => 'ratingBtnPopup',
            'text_am' => 'ՊԱՀՊԱՆԵԼ',
            'text_ru'  => 'СОХРАНИТЬ',
            'text_en'  => "SAVE",
            'page_id'  => null
        ]);
        $this->insert('texts', [
            'slug' => 'ratingMessagePopup',
            'text_am' => 'Թողնել մեկնաբանություն',
            'text_ru'  => 'Оставить комментарий',
            'text_en'  => "Leave a comment",
            'page_id'  => null
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240802_143214_translate_rating cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240802_143214_translate_rating cannot be reverted.\n";

        return false;
    }
    */
}
