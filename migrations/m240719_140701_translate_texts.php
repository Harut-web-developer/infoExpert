<?php

use yii\db\Migration;

/**
 * Class m240719_140701_translate_texts
 */
class m240719_140701_translate_texts extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
//        Harut

        $this->insert('texts', [
            'slug' => 'emptyArchievement',
            'text_am' => 'Սերտիֆիկատ առկա չէ',
            'text_ru'  => 'Сертификат не доступен',
            'text_en'  => 'No certificate available',
            'page_id'  => null
        ]);
        $this->insert('texts', [
            'slug' => 'emptyCourses',
            'text_am' => 'Դասընթացներ առկա չէ',
            'text_ru'  => 'Нет доступных курсов',
            'text_en'  => 'No courses available',
            'page_id'  => null
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240719_140701_translate_texts cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240719_140701_translate_texts cannot be reverted.\n";

        return false;
    }
    */
}
