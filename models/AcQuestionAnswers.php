<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ac_question_answers".
 *
 * @property int $id
 * @property string|null $name_ru
 * @property string|null $name_en
 * @property string|null $name_am
 * @property int $status
 * @property int $order_num
 * @property int $is_true
 * @property int|null $quest_id
 */
class AcQuestionAnswers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ac_question_answers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'order_num', 'is_true', 'quest_id'], 'integer'],
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
            'is_true' => 'Is True',
            'quest_id' => 'Quest ID',
        ];
    }
}
