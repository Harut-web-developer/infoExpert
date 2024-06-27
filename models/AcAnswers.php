<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ac_answers".
 *
 * @property int $id
 * @property string|null $question_am
 * @property string|null $question_ru
 * @property string|null $question_en
 * @property string|null $answer_am
 * @property string|null $answer_ru
 * @property string|null $answer_en
 * @property int|null $status
 * @property int|null $order_num
 */
class AcAnswers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ac_answers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['answer_am', 'answer_ru', 'answer_en'], 'string'],
            [['status', 'order_num'], 'integer'],
            [['question_am', 'question_ru', 'question_en'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'question_am' => 'Question Am',
            'question_ru' => 'Question Ru',
            'question_en' => 'Question En',
            'answer_am' => 'Answer Am',
            'answer_ru' => 'Answer Ru',
            'answer_en' => 'Answer En',
            'status' => 'Status',
            'order_num' => 'Order Num',
        ];
    }
}
