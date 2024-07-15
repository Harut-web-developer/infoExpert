<?php

use yii\db\Migration;

/**
 * Class m240712_065425_delete_passwordIncludeSecurity
 */
class m240712_065425_delete_passwordIncludeSecurity extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $ids = [309, 310, 311, 312, 313, 314];
        foreach ($ids as $id) {
            $this->delete('texts', ['id' => $id]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240712_065425_delete_passwordIncludeSecurity cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240712_065425_delete_passwordIncludeSecurity cannot be reverted.\n";

        return false;
    }
    */
}
