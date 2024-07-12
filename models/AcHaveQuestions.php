<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ac_have_questions".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $email
 * @property string|null $question
 * @property string|null $status
 * @property string|null $create_date
 */
class AcHaveQuestions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ac_have_questions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['question'], 'string'],
            [['create_date'], 'safe'],
            [['name', 'email', 'status'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'question' => 'Question',
            'status' => 'Status',
            'create_date' => 'Create Date',
        ];
    }
}
