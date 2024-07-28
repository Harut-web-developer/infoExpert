<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ac_callback".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $email
 * @property string|null $phone
 * @property int|null $course
 * @property int|null $checked_answer
 * @property int|null $answer_admin_id
 * @property string|null $status
 * @property string|null $create_date
 */
class AcCallback extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ac_callback';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['course','checked_answer', 'answer_admin_id'], 'integer'],
            [['create_date'], 'safe'],
            [['name', 'email', 'phone', 'status'], 'string', 'max' => 255],
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
            'phone' => 'Phone',
            'course' => 'Course',
            'status' => 'Status',
            'create_date' => 'Create Date',
        ];
    }
    public function getCourses(){
        return $this->hasOne(AcLessons::className(),['id' => 'course']);
    }
}
