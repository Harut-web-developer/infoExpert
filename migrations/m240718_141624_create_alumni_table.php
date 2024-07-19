<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%alumni}}`.
 */
class m240718_141624_create_alumni_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%ac_alumni}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(11)->defaultValue(null),
            'img' => $this->string(255)->defaultValue(null),
            'alumni_am' => $this->string(255)->defaultValue(null),
            'alumni_ru' => $this->string(255)->defaultValue(null),
            'alumni_en' => $this->string(255)->defaultValue(null),
            'text_am' => $this->text()->defaultValue(null),
            'text_ru' => $this->text()->defaultValue(null),
            'text_en' => $this->text()->defaultValue(null),
            'linkedin_link' => $this->string(255)->defaultValue(null),
            'status' => $this->string(255)->defaultValue(1),
            'create_date' => $this->timestamp(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%alumni}}');
    }
}
