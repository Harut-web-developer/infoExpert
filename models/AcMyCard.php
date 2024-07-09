<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ac_my_card".
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $lessons_id
 * @property string|null $status
 * @property string|null $create_date
 */
class AcMyCard extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ac_my_card';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'lessons_id'], 'integer'],
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
            'status' => 'Status',
            'create_date' => 'Create Date',
        ];
    }
    public static function addCard($id){
        date_default_timezone_set("Asia/Yerevan");
        $user_id = Yii::$app->user->identity->id;
        $add_card_exist = AcMyCard::find()->where(['and',['status' => '1'],['user_id' => $user_id],['lessons_id' => $id]])->exists();
        if (!$add_card_exist){
            if ($user_id != null){
                $add_card = new AcMyCard();
                $add_card->user_id = $user_id;
                $add_card->lessons_id = $id;
                $add_card->create_date = date('Y-m-d H:i:s');
                $add_card->save();
                return true;
            }
        }
        return false;
    }
}
