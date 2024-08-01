<?php

use yii\db\Migration;

/**
 * Class m240708_072136_security_translate
 */
class m240708_072136_security_translate extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        /*Mariam*/

        $this->insert('texts', [
            'slug' => 'passwordIncludeSecurity',
            'text_am' => 'Գաղտնաբառը պետք է ներառի.',
            'text_ru'  => 'Пароль должен включать:',
            'text_en'  => 'Password must include:',
            'page_id'  => 26
        ]);
        $this->insert('texts', [
            'slug' => 'uppercaseLettersSecurity',
            'text_am' => 'Մեծատառեր',
            'text_ru'  => 'Заглавные буквы',
            'text_en'  => 'Uppercase letters',
            'page_id'  => 26
        ]);
        $this->insert('texts', [
            'slug' => 'lowercaseLettersSecurity',
            'text_am' => 'Փոքրատառեր',
            'text_ru'  => 'Строчные буквы',
            'text_en'  => 'Lowercase letters',
            'page_id'  => 26
        ]);
        $this->insert('texts', [
            'slug' => 'numbersSecurity',
            'text_am' => 'Թվեր',
            'text_ru'  => 'Числа',
            'text_en'  => 'Numbers',
            'page_id'  => 26
        ]);
        $this->insert('texts', [
            'slug' => 'symbolsSecurity',
            'text_am' => 'Սիմվոլներ',
            'text_ru'  => 'Символы',
            'text_en'  => 'Symbols',
            'page_id'  => 26
        ]);
        $this->insert('texts', [
            'slug' => 'charactersSecurity',
            'text_am' => 'Առնվազն 8 նիշ',
            'text_ru'  => 'Минимум 8 символов',
            'text_en'  => 'Minimum 8 characters',
            'page_id'  => 26
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240708_072136_security_translate cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240708_072136_security_translate cannot be reverted.\n";

        return false;
    }
    */
}
