<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ac_quize_log".
 *
 * @property int $id
 * @property int|null $question_id
 * @property int|null $user_id
 * @property int|null $result
 * @property int|null $create_date
 * @property string $answers
 * @property string $username
 * @property string $phone
 * @property string $email
 */
class AcQuizeLog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ac_quize_log';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['question_id', 'user_id', 'result'], 'integer'],
            [['answers'], 'required'],
            [['answers'], 'string', 'max' => 55],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'question_id' => 'Question ID',
            'user_id' => 'User ID',
            'result' => 'Result',
            'answers' => 'Answers',
        ];
    }
}
