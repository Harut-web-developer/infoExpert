<?php

use yii\db\Migration;

/**
 * Class m240714_152653_forgot_translate
 */
class m240714_152653_forgot_translate extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
//        Mariam

        $this->insert('texts', [
            'slug' => 'lostPassword',
            'text_am' => 'ՄՈՌԱՑԵԼ ԵՔ ՁԵՐ ԳԱՂՏՆԱԲԱՌԸ?',
            'text_ru'  => 'ЗАБЫЛИ ПАРОЛЬ?',
            'text_en'  => 'LOST YOUR PASSWORD?',
            'page_id'  => '22'
        ]);
        $this->insert('texts', [
            'slug' => 'enterMail',
            'text_am' => 'Մուտքագրեք ձեր հաշվի հետ կապված էլ.փոստը, և մենք նամակ կուղարկենք՝ ձեր գաղտնաբառը փոխելու համար:',
            'text_ru'  => 'Введите адрес электронной почты, связанный с вашей учетной записью, и мы отправим электронное письмо для изменения вашего пароля.',
            'text_en'  => 'Enter the email associated with your account and we will send an email to change your password.',
            'page_id'  => '22'
        ]);
        $this->insert('texts', [
            'slug' => 'send',
            'text_am' => 'ՈՒՂԱՐԿԵԼ',
            'text_ru'  => 'ОТПРАВЛЯТЬ',
            'text_en'  => 'SEND',
            'page_id'  => null
        ]);
        $this->insert('texts', [
            'slug' => 'checkEmail',
            'text_am' => 'ՍՏՈՒԳԵՔ ՁԵՐ էԼ.ՓՈՍՏԸ',
            'text_ru'  => 'ПРОВЕРЬТЕ СВОЮ ЭЛЕКТРОННУЮ ПОЧТУ',
            'text_en'  => 'CHECK YOUR EMAIL',
            'page_id'  => '23'
        ]);
        $this->insert('texts', [
            'slug' => 'digitCode',
            'text_am' => 'Մենք 6 նիշանոց կոդ ենք ուղարկել ձեր էլ․ հասցեին։',
            'text_ru'  => 'Мы отправили 6-значный код на вашу электронную почту.',
            'text_en'  => 'We have sent a 6 digit code to your email.',
            'page_id'  => '23'
        ]);
        $this->insert('texts', [
            'slug' => 'didNotReceive',
            'text_am' => 'Չե՞ք ստացել նամակը:',
            'text_ru'  => 'Не получили письмо?',
            'text_en'  => 'Did not receive the email?',
            'page_id'  => '23'
        ]);
        $this->insert('texts', [
            'slug' => 'checkSpam',
            'text_am' => 'Ստուգեք ձեր սպամ բաժնում:',
            'text_ru'  => 'Проверьте свой спам-фильтр.',
            'text_en'  => 'Check your spam filter.',
            'page_id'  => '23'
        ]);
        $this->insert('texts', [
            'slug' => 'createNewPassword',
            'text_am' => 'ՍՏԵՂԾԵԼ ՆՈՐ ԳԱՂՏՆԱԲԱՌ',
            'text_ru'  => 'СОЗДАТЬ НОВЫЙ ПАРОЛЬ',
            'text_en'  => 'CREATE NEW PASSWORD',
            'page_id'  => '24'
        ]);
        $this->insert('texts', [
            'slug' => 'newpassword',
            'text_am' => 'Նոր գաղտնաբառ',
            'text_ru'  => 'Новый пароль',
            'text_en'  => 'New password',
            'page_id'  => '24'
        ]);
        $this->insert('texts', [
            'slug' => 'confirmpassword',
            'text_am' => 'Հաստատել գաղտնաբառը',
            'text_ru'  => 'Подтвердите пароль',
            'text_en'  => 'Confirm password',
            'page_id'  => '24'
        ]);
        $this->insert('texts', [
            'slug' => 'confirmpasswordupper',
            'text_am' => 'ՀԱՍՏԱՏԵԼ ԳԱՂՏՆԱԲԱՌԸ',
            'text_ru'  => 'ПОДТВЕРДИТЕ ПАРОЛЬ',
            'text_en'  => 'CONFIRM PASSWORD',
            'page_id'  => '24'
        ]);
        $this->insert('texts', [
            'slug' => 'passwordUpdatedTitle',
            'text_am' => 'ԳԱՂԲԱՌՆԸ ԹԱՐՄԱՑՎԱԾ Է:',
            'text_ru'  => 'ПАРОЛЬ ОБНОВЛЕН!',
            'text_en'  => 'PASSWORD UPDATED!',
            'page_id'  => '27'
        ]);
        $this->insert('texts', [
            'slug' => 'successfully',
            'text_am' => 'Ձեր գաղտնաբառը հաջողությամբ փոխվել է:',
            'text_ru'  => 'Ваш пароль был успешно изменен.',
            'text_en'  => 'Your password has been changed successfully.',
            'page_id'  => '27'
        ]);
        $this->insert('texts', [
            'slug' => 'enterCode',
            'text_am' => 'ՄՈՒՏՔԱԳՐԵԼ ԿՈԴԸ',
            'text_ru'  => 'ВВЕДИТЕ КОД',
            'text_en'  => 'ENTER CODE',
            'page_id'  => '28'
        ]);
        $this->insert('texts', [
            'slug' => 'digitCode',
            'text_am' => 'Կոդն ուղարկվել է',
            'text_ru'  => 'Код отправлен на',
            'text_en'  => 'Code has been sent to',
            'page_id'  => '28'
        ]);
        $this->insert('texts', [
            'slug' => 'getCode',
            'text_am' => 'Կոդ չե՞ք ստացել:',
            'text_ru'  => 'Не получили код?',
            'text_en'  => 'Did not get a code?',
            'page_id'  => '28'
        ]);
        $this->insert('texts', [
            'slug' => 'resend',
            'text_am' => 'ՆՈՐԻՑ ՈՒՂԱՐԿԵԼ',
            'text_ru'  => 'ОТПРАВИТЬ',
            'text_en'  => 'RESEND',
            'page_id'  => '28'
        ]);
        $this->insert('texts', [
            'slug' => 'verify',
            'text_am' => 'ՀԱՍՏԱՏԵԼ',
            'text_ru'  => 'ПРОВЕРЯТЬ',
            'text_en'  => 'VERIFY',
            'page_id'  => '28'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240714_152653_forgot_translate cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240714_152653_forgot_translate cannot be reverted.\n";

        return false;
    }
    */
}
