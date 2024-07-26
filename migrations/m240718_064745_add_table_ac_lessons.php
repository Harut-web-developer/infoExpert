<?php

use yii\db\Migration;

/**
 * Class m240718_064745_add_table_ac_lessons
 */
class m240718_064745_add_table_ac_lessons extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
//        Harut

        $this->addColumn('ac_lessons', 'lesson_certificate_en', $this->string(255)->defaultValue(null)->after('lesson_title_en'));
        $this->addColumn('ac_lessons', 'lesson_certificate_ru', $this->string(255)->defaultValue(null)->after('lesson_title_en'));
        $this->addColumn('ac_lessons', 'lesson_certificate_am', $this->string(255)->defaultValue(null)->after('lesson_title_en'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240718_064745_add_table_ac_lessons cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240718_064745_add_table_ac_lessons cannot be reverted.\n";

        return false;
    }
    */
}
