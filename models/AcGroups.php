<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ac_groups".
 *
 * @property int $id
 * @property int|null $lesson_id
 * @property int|null $lesson_count
 * @property int|null $action
 * @property string|null $groups_name
 * @property int|null $order_num
 * @property string|null $status
 * @property string|null $create_date
 */
class AcGroups extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ac_groups';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lesson_id', 'lesson_count', 'order_num','action'], 'integer'],
            [['create_date'], 'safe'],
            [['groups_name', 'status'], 'string', 'max' => 255],
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
            'lesson_count' => 'Lesson Count',
            'groups_name' => 'Groups Name',
            'order_num' => 'Order Num',
            'status' => 'Status',
            'create_date' => 'Create Date',
        ];
    }
    public function getUsername()
    {
        return $this->hasMany(User::class, ['groups_id' => 'id']);
    }

    public function getUsers()
    {
        return User::find()->where(new \yii\db\Expression('FIND_IN_SET(:group_id, groups_id)'))
            ->addParams([':group_id' => $this->id])
            ->all();
    }
}
