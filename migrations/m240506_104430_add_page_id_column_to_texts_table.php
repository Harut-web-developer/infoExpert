<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%texts}}`.
 */
class m240506_104430_add_page_id_column_to_texts_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        /*Harut*/

        $this->addColumn('texts', 'page_id', $this->integer()->null()->defaultValue(null)->after('text_en'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('texts', 'page_id');
    }
}
