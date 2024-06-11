<?php

use yii\db\Migration;

/**
 * Class m240611_073415_quize
 */
class m240611_073415_quize extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->update('texts',[
            'slug' => 'lessonAdministration',
            'text_am' => '1С: ԱՌԵՎՏՐԻ ԿԱՌԱՎԱՐՈւՄ',
            'text_ru' => '1С: ТОРГОВОЕ УПРАВЛЕНИЕ',
            'text_en' => '1С: TRADE ADMINISTRATION',
            'page_id' => NULL,
        ], ['slug' => 'lessonAdministration']);
        $this->update('texts',[
            'slug' => 'lessonAccounting',
            'text_am' => '1С: ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ 8.3',
            'text_ru' => '1С: УЧЕТ 8.3',
            'text_en' => '1С: ACCOUNTING 8.3',
            'page_id' => NULL,
        ], ['slug' => 'lessonAccounting']);
        $this->update('texts',[
            'slug' => 'lessonAccountingForBeginners',
            'text_am' => '1C: ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ ՍԿՍՆԱԿՆԵՐԻ ՀԱՄԱՐ',
            'text_ru' => '1С: УЧЕТ ДЛЯ НАЧИНАЮЩИХ',
            'text_en' => '1C: ACCOUNTING FOR BEGINNERS',
            'page_id' => NULL,
        ], ['slug' => 'lessonAccountingForBeginners']);
        $this->update('texts',[
            'slug' => 'lessonPersonnelManagment',
            'text_am' => '1С: ԱՇԽԱՏԱՎԱՐՁ ԵՒ ԿԱԴՐԵՐԻ ԿԱՌԱՎԱՐՈՒՄ',
            'text_ru' => '1С: ЗАРПЛАТА И УПРАВЛЕНИЕ ПЕРСОНАЛОМ',
            'text_en' => '1С: SALARY AND PERSONNEL MANAGEMENT',
            'page_id' => NULL,
        ], ['slug' => 'lessonPersonnelManagment']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240611_073415_quize cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240611_073415_quize cannot be reverted.\n";

        return false;
    }
    */
}
