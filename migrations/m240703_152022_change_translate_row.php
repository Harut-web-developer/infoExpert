<?php

use yii\db\Migration;

/**
 * Class m240703_152022_change_translate_row
 */
class m240703_152022_change_translate_row extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->update('texts',[
            'page_id'  => null
        ], ['id' => 282]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240703_152022_change_translate_row cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240703_152022_change_translate_row cannot be reverted.\n";

        return false;
    }
    */
}
