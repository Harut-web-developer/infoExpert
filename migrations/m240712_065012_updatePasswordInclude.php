<?php

use yii\db\Migration;

/**
 * Class m240712_065012_updatePasswordInclude
 */
class m240712_065012_updatePasswordInclude extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->update('texts',[
            'page_id' => null,
        ], ['id' => 292]);
        $this->update('texts',[
            'page_id' => null,
        ], ['id' => 293]);
        $this->update('texts',[
            'page_id' => null,
        ], ['id' => 294]);
        $this->update('texts',[
            'page_id' => null,
        ], ['id' => 295]);
        $this->update('texts',[
            'page_id' => null,
        ], ['id' => 296]);
        $this->update('texts',[
            'page_id' => null,
        ], ['id' => 297]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240712_065012_updatePasswordInclude cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240712_065012_updatePasswordInclude cannot be reverted.\n";

        return false;
    }
    */
}
