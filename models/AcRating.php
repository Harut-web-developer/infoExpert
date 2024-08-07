<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ac_rating".
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $lesson_id
 * @property int|null $rating
 * @property string|null $comment
 * @property string|null $status
 * @property string|null $create_date
 */
class AcRating extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ac_rating';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'lesson_id', 'rating'], 'integer'],
            [['comment'], 'string'],
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
            'lesson_id' => 'Lesson ID',
            'rating' => 'Rating',
            'comment' => 'Comment',
            'status' => 'Status',
            'create_date' => 'Create Date',
        ];
    }
    public function getLessons(){
        return $this->hasOne(AcLessons::className(),['id' => 'lesson_id']);
    }
    public function getUserName(){
        return $this->hasOne(User::className(),['id' => 'user_id']);
    }
}
