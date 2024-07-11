<?php

use yii\db\Migration;

/**
 * Class m240611_065437_translate_security_page
 */
class m240611_065437_translate_security_page extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('texts', [
            'slug' => 'securityTitle',
            'text_am' => 'Անվտանգություն',
            'text_ru'  => 'Безопасность',
            'text_en'  => 'Account security',
            'page_id'  => 26
        ]);
        $this->insert('texts', [
            'slug' => 'inputEmail',
            'text_am' => 'Էլ. հասցե',
            'text_ru'  => 'Эл. почта',
            'text_en'  => 'Email:',
            'page_id'  => 26
        ]);
        $this->insert('texts', [
            'slug' => 'inputPassword',
            'text_am' => 'Գաղտնաբառ',
            'text_ru'  => 'Пароль',
            'text_en'  => 'Password:',
            'page_id'  => 26
        ]);
        $this->insert('texts', [
            'slug' => 'inputCurrentPassword',
            'text_am' => 'Մուտքագրեք ընթացիկ գաղտնաբառը',
            'text_ru'  => 'Введите текущий пароль',
            'text_en'  => 'Enter current password',
            'page_id'  => 26
        ]);
        $this->insert('texts', [
            'slug' => 'inputNewPassword',
            'text_am' => 'Մուտքագրեք նոր գաղտնաբառ',
            'text_ru'  => 'Введите новый пароль',
            'text_en'  => 'Enter new password',
            'page_id'  => 26
        ]);
        $this->insert('texts', [
            'slug' => 'inputConfirmPassword',
            'text_am' => 'Հաստատել գաղտնաբառը',
            'text_ru'  => 'Подтвердите пароль',
            'text_en'  => 'Re-type new password',
            'page_id'  => 26
        ]);
        $this->insert('texts', [
            'slug' => 'btnChangePassword',
            'text_am' => 'ՓՈԽԵԼ ԳԱՂՏՆԱԲԱՌԸ',
            'text_ru'  => 'ИЗМЕНИТЬ ПАРОЛЬ',
            'text_en'  => 'CHANGE PASSWORD',
            'page_id'  => 26
        ]);
        $this->insert('texts', [
            'slug' => 'btnSave',
            'text_am' => 'ՊԱՀՊԱՆԵԼ',
            'text_ru'  => 'СОХРАНИТЬ',
            'text_en'  => 'SAVE',
            'page_id'  => 26
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240611_065437_translate_security_page cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240611_065437_translate_security_page cannot be reverted.\n";

        return false;
    }
    */
}
