<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ac_user_video_watch".
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $video_id
 * @property int|null $lesson_id
 * @property int|null $check_watch 1_watched video
 * @property string|null $status
 * @property string|null $create_date
 */
class AcUserVideoWatch extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ac_user_video_watch';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'video_id', 'check_watch','lesson_id'], 'integer'],
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
            'video_id' => 'Video ID',
            'check_watch' => 'Check Watch',
            'status' => 'Status',
            'create_date' => 'Create Date',
        ];
    }
}
