<?php

use yii\db\Migration;

/**
 * Class m240712_111825_create_table_have_questions
 */
class m240712_111825_create_table_have_questions extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('ac_have_questions', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->defaultValue(null),
            'email' => $this->string(255)->defaultValue(null),
            'question' => $this->text()->defaultValue(null),
            'status' => $this->string(255)->defaultValue(1),
            'create_date' => $this->timestamp(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240712_111825_create_table_have_questions cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240712_111825_create_table_have_questions cannot be reverted.\n";

        return false;
    }
    */
}
