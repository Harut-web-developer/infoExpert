<?php

use yii\db\Migration;

/**
 * Class m240606_063320_added_info_to_textsTable
 */
class m240606_063320_added_info_to_textsTable extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        /*Harut*/

        $this->insert('texts', [
            'slug' => 'seeAllCoursesBtn',
            'text_am' => 'ԲՈԼՈՐ ԴԱՍԵՐԸ',
            'text_ru'  => 'Все уроки',
            'text_en'  => 'See all courses',
            'page_id'  => 21
        ]);
        $this->insert('texts', [
            'slug' => 'buyNowBtn',
            'text_am' => 'Գնել հիմա',
            'text_ru'  => 'Купить сейчас',
            'text_en'  => 'Buy now',
            'page_id'  => 21
        ]);
        $this->insert('texts', [
            'slug' => 'seeAllCoursesBtn',
            'text_am' => 'ԲՈԼՈՐ ԴԱՍԵՐԸ',
            'text_ru'  => 'Все уроки',
            'text_en'  => 'See all courses',
            'page_id'  => 22
        ]);
        $this->insert('texts', [
            'slug' => 'buyNowBtn',
            'text_am' => 'Գնել հիմա',
            'text_ru'  => 'Купить сейчас',
            'text_en'  => 'Buy now',
            'page_id'  => 22
        ]);
        $this->insert('texts', [
            'slug' => 'seeAllCoursesBtn',
            'text_am' => 'ԲՈԼՈՐ ԴԱՍԵՐԸ',
            'text_ru'  => 'Все уроки',
            'text_en'  => 'See all courses',
            'page_id'  => 23
        ]);
        $this->insert('texts', [
            'slug' => 'buyNowBtn',
            'text_am' => 'Գնել հիմա',
            'text_ru'  => 'Купить сейчас',
            'text_en'  => 'Buy now',
            'page_id'  => 23
        ]);
        $this->insert('texts', [
            'slug' => 'seeAllCoursesBtn',
            'text_am' => 'ԲՈԼՈՐ ԴԱՍԵՐԸ',
            'text_ru'  => 'Все уроки',
            'text_en'  => 'See all courses',
            'page_id'  => 24
        ]);
        $this->insert('texts', [
            'slug' => 'buyNowBtn',
            'text_am' => 'Գնել հիմա',
            'text_ru'  => 'Купить сейчас',
            'text_en'  => 'Buy now',
            'page_id'  => 24
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240606_063320_added_info_to_textsTable cannot be reverted.\n";

        return false;
    }

}
