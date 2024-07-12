<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ac_apply_now".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $email
 * @property int|null $lesson_id
 * @property int|null $lesson_type 1_individual,2_group,3_corporate
 * @property int|null $online_offline 1_online,0_offline
 * @property string|null $phone
 * @property string|null $status
 * @property string|null $create_date
 */
class AcApplyNow extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ac_apply_now';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lesson_id', 'lesson_type', 'online_offline'], 'integer'],
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
            'lesson_id' => 'Lesson ID',
            'lesson_type' => 'Lesson Type',
            'online_offline' => 'Online Offline',
            'phone' => 'Phone',
            'status' => 'Status',
            'create_date' => 'Create Date',
        ];
    }
}
