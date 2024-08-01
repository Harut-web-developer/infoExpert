<?php

use yii\db\Migration;

/**
 * Class m240611_072414_quize_page_id
 */
class m240611_072414_quize_page_id extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        /*Harut*/

        $this->insert('texts', [
            'slug' => 'btnQuize',
            'text_am' => 'ՍԿՍԵԼ',
            'text_ru' => 'НАЧИНАТЬ',
            'text_en' => 'START',
            'page_id' => null,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240611_072414_quize_page_id cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240611_072414_quize_page_id cannot be reverted.\n";

        return false;
    }
    */
}
