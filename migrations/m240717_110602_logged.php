<?php

use yii\db\Migration;

/**
 * Class m240717_110602_logged
 */
class m240717_110602_logged extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
//        Mariam

        $this->insert('texts', [
            'slug' => 'logged',
            'text_am' => 'Դուք հաջողությամբ մուտք եք գործել:',
            'text_ru'  => 'Вы успешно вошли.',
            'text_en'  => 'You have successfully logged in.',
            'page_id'  => null
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240717_110602_logged cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240717_110602_logged cannot be reverted.\n";

        return false;
    }
    */
}
