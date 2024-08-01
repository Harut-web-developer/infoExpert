<?php

use yii\db\Migration;

/**
 * Class m240611_133228_edite_quize_name
 */
class m240611_133228_edite_quize_name extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        /*Harut*/

        $this->update('texts',[
            'text_am' => 'QUIZE',
        ], ['id' => 20]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240611_133228_edite_quize_name cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240611_133228_edite_quize_name cannot be reverted.\n";

        return false;
    }
    */
}
