<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ac_subscribers".
 *
 * @property int $id
 * @property string|null $email
 * @property string|null $status
 * @property string|null $create_date
 */
class AcSubscribers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ac_subscribers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['create_date'], 'safe'],
            [['email', 'status'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'status' => 'Status',
            'create_date' => 'Create Date',
        ];
    }
}
