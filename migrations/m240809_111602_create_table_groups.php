<?php

use yii\db\Migration;

/**
 * Class m240809_111602_create_table_groups
 */
class m240809_111602_create_table_groups extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('ac_groups', [
            'id' => $this->primaryKey(),
            'lesson_id' => $this->integer(11)->defaultValue(null),
            'lesson_count' => $this->integer(11)->defaultValue(0),
            'groups_name' => $this->string(255)->defaultValue(null),
            'order_num' => $this->integer()->defaultValue(0),
            'status' => $this->string(255)->defaultValue(1),
            'create_date' => $this->timestamp(),
        ]);
        $this->addColumn('user', 'groups_id', $this->integer(11)->defaultValue(null)->after('id'));
        $this->addColumn('ac_lessons', 'lessons_count', $this->integer(11)->defaultValue(null)->after('id'));

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240809_111602_create_table_groups cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240809_111602_create_table_groups cannot be reverted.\n";

        return false;
    }
    */
}
