<?php

use yii\db\Migration;

/**
 * Class m240703_124001_change_translate_security
 */
class m240703_124001_change_translate_security extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->delete('texts', ['id' => 281]);
        $this->delete('texts', ['id' => 283]);
        $this->delete('texts', ['id' => 288]);
        $this->insert('texts', [
            'slug' => 'modalTitleCallBack',
            'text_am' => 'ՀԵՏԱԴԱՐՁ ԶԱՆԳ',
            'text_ru'  => 'ПЕРЕЗВОНИТЬ',
            'text_en'  => 'GET A CALL BACK',
            'page_id'  => null
        ]);
        $this->insert('texts', [
            'slug' => 'modalTextCallBack',
            'text_am' => 'Լրացրեք ստորև ներկայացվածը, և մենք հնարավորինս շուտ կկապվենք ձեզ հետ:',
            'text_ru'  => 'Заполните форму ниже, и мы свяжемся с вами как можно скорее.',
            'text_en'  => 'Complete the form below and we will contact you as soon as possible.',
            'page_id'  => null
        ]);
        $this->insert('texts', [
            'slug' => 'modalCallBackName',
            'text_am' => 'Անուն',
            'text_ru'  => 'Имя',
            'text_en'  => 'Name',
            'page_id'  => null
        ]);
        $this->insert('texts', [
            'slug' => 'modalCallBackPhone',
            'text_am' => 'Հեռախոսահամար',
            'text_ru'  => 'Номер телефона',
            'text_en'  => 'Phone number',
            'page_id'  => null
        ]);
        $this->insert('texts', [
            'slug' => 'modalCallBackCourses',
            'text_am' => 'Հետաքրքրվա՞ծ եք դասընթացով',
            'text_ru'  => 'Курс интересует?',
            'text_en'  => 'Course Interested In',
            'page_id'  => null
        ]);
        $this->insert('texts', [
            'slug' => 'modalCallBackSubmit',
            'text_am' => 'ՀԱՍՏԱՏԵԼ',
            'text_ru'  => 'ОТПРАВИТЬ',
            'text_en'  => 'SUBMIT',
            'page_id'  => null
        ]);
        $this->update('texts',[
            'text_en'  => 'Email Address',
        ], ['id' => 282]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240703_124001_change_translate_security cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240703_124001_change_translate_security cannot be reverted.\n";

        return false;
    }
    */
}
