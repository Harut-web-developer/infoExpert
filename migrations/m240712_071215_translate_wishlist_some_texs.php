<?php

use yii\db\Migration;

/**
 * Class m240712_071215_translate_wishlist_some_texs
 */
class m240712_071215_translate_wishlist_some_texs extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
//        Harut

        $this->insert('texts', [
            'slug' => 'titleOfLink',
            'text_am' => 'Սեխմեք «Բոլոր դասերը», որպեսզի ստեղծեք ձեր հավանածները',
            'text_ru'  => 'Перейдите на вкладку «Все курсы», чтобы создать список желаний',
            'text_en'  => 'Go to the All Courses tab to create a wishlist',
            'page_id'  => 10
        ]);
        $this->insert('texts', [
            'slug' => 'titleOfBtn',
            'text_am' => 'Բոլոր դասերը',
            'text_ru'  => 'Все курсы',
            'text_en'  => 'All courses',
            'page_id'  => 10
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240712_071215_translate_wishlist_some_texs cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240712_071215_translate_wishlist_some_texs cannot be reverted.\n";

        return false;
    }
    */
}
