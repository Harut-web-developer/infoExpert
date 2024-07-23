<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ac_alumni".
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $img
 * @property string|null $alumni_am
 * @property string|null $alumni_ru
 * @property string|null $alumni_en
 * @property string|null $linkedin_link
 * @property string|null $status
 * @property string|null $create_date
 */
class AcAlumni extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ac_alumni';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id'], 'integer'],
            [['text_am','text_ru','text_en'], 'string'],
            [['create_date'], 'safe'],
            [['img', 'alumni_am', 'alumni_ru', 'alumni_en', 'linkedin_link', 'status'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'img' => 'Img',
            'alumni_am' => 'Alumni Am',
            'alumni_ru' => 'Alumni Ru',
            'alumni_en' => 'Alumni En',
            'linkedin_link' => 'Linkedin Link',
            'status' => 'Status',
            'create_date' => 'Create Date',
        ];
    }
}
