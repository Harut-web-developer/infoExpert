<?php

namespace app\models;

use Yii;
use app\models\AcQuestionAnswers;
use app\models\AcQuestionQuests;

/**
 * This is the model class for table "ac_question_list".
 *
 * @property int $id
 * @property string|null $name_ru
 * @property string|null $name_en
 * @property string|null $name_am
 * @property string $date_create
 * @property int $status
 */
class AcQuestionList extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ac_question_list';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date_create'], 'required'],
            [['date_create'], 'safe'],
            [['status'], 'integer'],
            [['name_ru', 'name_en', 'name_am'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_ru' => 'Name Ru',
            'name_en' => 'Name En',
            'name_am' => 'Name Am',
            'date_create' => 'Date Create',
            'status' => 'Status',
        ];
    }

//    public function getQuestionQuests()
//    {
//        return $this->hasMany(AcQuestionQuests::className(), ['question_id' => 'id']);
//    }
//
//    public function getQuestionAnswers()
//    {
//        return $this->hasMany(AcQuestionAnswers::className(), ['quest_id' => 'id'])
//            ->via('questionQuests');
//    }
}
