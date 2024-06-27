<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ac_question_quests".
 *
 * @property int $id
 * @property string|null $name_ru
 * @property string|null $name_en
 * @property string|null $name_am
 * @property int $status
 * @property int $order_num
 * @property int|null $question_id
 */
class AcQuestionQuests extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ac_question_quests';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'order_num', 'question_id'], 'integer'],
            [['name_ru', 'name_en', 'name_am'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_ru' => 'Name Ru',
            'name_en' => 'Name En',
            'name_am' => 'Name Am',
            'status' => 'Status',
            'order_num' => 'Order Num',
            'question_id' => 'Question ID',
        ];
    }
}
