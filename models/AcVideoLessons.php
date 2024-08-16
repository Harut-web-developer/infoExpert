<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ac_video_lessons".
 *
 * @property int $id
 * @property int|null $lesson_id
 * @property int|null $lesson_number
 * @property string|null $name_am
 * @property string|null $name_ru
 * @property string|null $name_en
 * @property string|null $video
 * @property int|null $type 0_youtube, 1_other
 * @property int|null $order_num
 * @property string|null $status
 * @property string|null $create_date
 */
class AcVideoLessons extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ac_video_lessons';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lesson_id', 'type', 'order_num','lesson_number'], 'integer'],
            [['create_date'], 'safe'],
            [['name_am', 'name_ru', 'name_en', 'video', 'status'], 'string', 'max' => 255],
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
            'name_am' => 'Name Am',
            'name_ru' => 'Name Ru',
            'name_en' => 'Name En',
            'video' => 'Video',
            'type' => 'Type',
            'order_num' => 'Order Num',
            'status' => 'Status',
            'create_date' => 'Create Date',
        ];
    }
}
