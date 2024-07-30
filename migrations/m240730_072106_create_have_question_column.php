<?php

use yii\db\Migration;

/**
 * Class m240730_072106_create_have_question_column
 */
class m240730_072106_create_have_question_column extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('ac_have_questions', 'answer_admin_id', $this->integer(11)->defaultValue(null)->after('question'));
        $this->addColumn('ac_have_questions', 'checked_answer', $this->integer(11)->defaultValue(0)->after('question'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240730_072106_create_have_question_column cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240730_072106_create_have_question_column cannot be reverted.\n";

        return false;
    }
    */
}
