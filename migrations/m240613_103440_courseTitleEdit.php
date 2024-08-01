<?php

use yii\db\Migration;

/**
 * Class m240613_103440_courseTitleEdit
 */
class m240613_103440_courseTitleEdit extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        /*Harut*/

        $this->update('texts',[
            'text_am' => 'լավագույնների',
            'text_ru' => 'от',
            'text_en' => 'by',
        ], ['id' => 111]);
        $this->update('texts',[
            'text_am' => 'կողմից',
            'text_ru' => 'лучших',
            'text_en' => 'the best',
        ], ['id' => 112]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240613_103440_courseTitleEdit cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240613_103440_courseTitleEdit cannot be reverted.\n";

        return false;
    }
    */
}
