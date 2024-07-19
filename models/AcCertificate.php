<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ac_certificate".
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $lesson_id
 * @property string|null $img
 * @property string|null $status
 * @property string|null $create_date
 */
class AcCertificate extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ac_certificate';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'lesson_id'], 'integer'],
            [['create_date'], 'safe'],
            [['img', 'status'], 'string', 'max' => 255],
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
            'lesson_id' => 'Lesson ID',
            'img' => 'Img',
            'status' => 'Status',
            'create_date' => 'Create Date',
        ];
    }
}
