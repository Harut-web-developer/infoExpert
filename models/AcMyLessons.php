<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ac_my_lessons".
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $lessons_id
 * @property int|null $complete_percent
 * @property string|null $status
 * @property string|null $create_date
 */
class AcMyLessons extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ac_my_lessons';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'lessons_id', 'complete_percent'], 'integer'],
            [['create_date'], 'safe'],
            [['status'], 'string', 'max' => 255],
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
            'lessons_id' => 'Lessons ID',
            'complete_percent' => 'Complete Percent',
            'status' => 'Status',
            'create_date' => 'Create Date',
        ];
    }
}
