<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%Certificate}}`.
 */
class m240718_114245_Create_Certificate_Table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%ac_certificate}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(11)->defaultValue(null),
            'lesson_id' => $this->integer(11)->defaultValue(null),
            'img' => $this->string(255)->defaultValue(null),
            'status' => $this->string(255)->defaultValue(1),
            'create_date' => $this->timestamp(),
        ]);
        $this->addColumn('ac_lessons', 'certificate_img', $this->string(255)->defaultValue(null)->after('img'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%ac_certificate}}');
    }
}
