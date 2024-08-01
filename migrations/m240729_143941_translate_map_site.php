<?php

use yii\db\Migration;

/**
 * Class m240729_143941_translate_map_site
 */
class m240729_143941_translate_map_site extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('texts', [
            'slug' => 'siteMap',
            'text_am' => 'Կայքի քարտեզ',
            'text_ru'  => 'Карта сайта',
            'text_en'  => " Site map",
            'page_id'  => null
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240729_143941_translate_map_site cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240729_143941_translate_map_site cannot be reverted.\n";

        return false;
    }
    */
}
