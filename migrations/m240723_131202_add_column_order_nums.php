<?php

use yii\db\Migration;

/**
 * Class m240723_131202_add_column_order_nums
 */
class m240723_131202_add_column_order_nums extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
//        Harut

        $this->addColumn('ac_tutors', 'order_num', $this->integer(11)->defaultValue(0)->after('img'));
        $this->addColumn('ac_alumni', 'order_num', $this->integer(11)->defaultValue(0)->after('linkedin_link'));
        $this->addColumn('ac_apply_now', 'order_num', $this->integer(11)->defaultValue(0)->after('phone'));
        $this->addColumn('ac_callback', 'order_num', $this->integer(11)->defaultValue(0)->after('course'));
        $this->addColumn('ac_certificate', 'order_num', $this->integer(11)->defaultValue(0)->after('img'));
        $this->addColumn('ac_have_questions', 'order_num', $this->integer(11)->defaultValue(0)->after('question'));
        $this->addColumn('ac_my_card', 'order_num', $this->integer(11)->defaultValue(0)->after('lessons_id'));
        $this->addColumn('ac_my_lessons', 'order_num', $this->integer(11)->defaultValue(0)->after('complete_percent'));
        $this->addColumn('ac_quize_log', 'order_num', $this->integer(11)->defaultValue(0)->after('phone'));
        $this->addColumn('ac_subscribers', 'order_num', $this->integer(11)->defaultValue(0)->after('email'));
        $this->addColumn('ac_wishlist', 'order_num', $this->integer(11)->defaultValue(0)->after('active'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240723_131202_add_column_order_nums cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240723_131202_add_column_order_nums cannot be reverted.\n";

        return false;
    }
    */
}
