<?php

use yii\db\Migration;

/**
 * Class m240725_084206_translate_blog_text
 */
class m240725_084206_translate_blog_text extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
//        Harut

        $this->insert('texts', [
            'slug' => 'blogsSubTitle',
            'text_am' => 'Բացահայտիր ավելին',
            'text_ru'  => 'Открывать интересное',
            'text_en'  => "Let's discover something interesting",
            'page_id'  => null
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240725_084206_translate_blog_text cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240725_084206_translate_blog_text cannot be reverted.\n";

        return false;
    }
    */
}
