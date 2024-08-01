<?php

use yii\db\Migration;

/**
 * Class m240702_121246_add_translate_blog
 */
class m240702_121246_add_translate_blog extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        /*Harut*/
        $this->insert('texts', [
            'slug' => 'recentNews',
            'text_am' => 'ՎԵՐՋԻՆ ԼՈՒՐԵՐ',
            'text_ru'  => 'СВЕЖИЕ НОВОСТИ',
            'text_en'  => 'RECENT NEWS',
            'page_id'  => null
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240702_121246_add_translate_blog cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240702_121246_add_translate_blog cannot be reverted.\n";

        return false;
    }
    */
}
