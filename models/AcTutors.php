<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ac_tutors".
 *
 * @property int $id
 * @property int|null $lesson_id
 * @property string|null $username_am
 * @property string|null $username_ru
 * @property string|null $username_en
 * @property string|null $text_am
 * @property string|null $text_ru
 * @property string|null $text_en
 * @property string|null $img
 * @property string|null $status
 * @property string|null $create_date
 */
class AcTutors extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ac_tutors';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lesson_id'], 'integer'],
            [['text_am', 'text_ru', 'text_en'], 'string'],
            [['create_date'], 'safe'],
            [['username_am', 'username_ru', 'username_en', 'img', 'status'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lesson_id' => 'Lesson ID',
            'username_am' => 'Username Am',
            'username_ru' => 'Username Ru',
            'username_en' => 'Username En',
            'text_am' => 'Text Am',
            'text_ru' => 'Text Ru',
            'text_en' => 'Text En',
            'img' => 'Img',
            'status' => 'Status',
            'create_date' => 'Create Date',
        ];
    }
}
