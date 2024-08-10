<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ac_lessons".
 *
 * @property int $id
 * @property int $lessons_count
 * @property string|null $lesson_name_am
 * @property string|null $lesson_name_ru
 * @property string|null $lesson_name_en
 * @property string|null $lesson_title_am
 * @property string|null $lesson_title_ru
 * @property string|null $lesson_title_en
 * @property string|null $lesson_certificate_am
 * @property string|null $lesson_certificate_ru
 * @property string|null $lesson_certificate_en
 * @property string|null $lesson_keywords_am
 * @property string|null $lesson_keywords_ru
 * @property string|null $lesson_keywords_en
 * @property string|null $lesson_content_am
 * @property string|null $lesson_content_ru
 * @property string|null $lesson_content_en
 * @property int|null $order_num
 * @property int|null $rating
 * @property int|null $price
 * @property string|null $img
 * @property string|null $certificate_img
 * @property string|null $create_date
 * @property int|null $status
 * @property string|null $url
 */
class AcLessons extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ac_lessons';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lesson_keywords_am', 'lesson_keywords_ru', 'lesson_keywords_en', 'lesson_content_am', 'lesson_content_ru', 'lesson_content_en'], 'string'],
            [['order_num', 'status','price','rating','lessons_count'], 'integer'],
            [['create_date'], 'safe'],
            [['lesson_name_am', 'lesson_name_ru', 'lesson_name_en', 'lesson_title_am', 'lesson_title_ru', 'lesson_title_en','lesson_certificate_am','lesson_certificate_ru','lesson_certificate_en', 'url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lesson_name_am' => 'Lesson Name Am',
            'lesson_name_ru' => 'Lesson Name Ru',
            'lesson_name_en' => 'Lesson Name En',
            'lesson_title_am' => 'Lesson Title Am',
            'lesson_title_ru' => 'Lesson Title Ru',
            'lesson_title_en' => 'Lesson Title En',
            'lesson_keywords_am' => 'Lesson Keywords Am',
            'lesson_keywords_ru' => 'Lesson Keywords Ru',
            'lesson_keywords_en' => 'Lesson Keywords En',
            'lesson_content_am' => 'Lesson Content Am',
            'lesson_content_ru' => 'Lesson Content Ru',
            'lesson_content_en' => 'Lesson Content En',
            'order_num' => 'Order Num',
            'create_date' => 'Create Date',
            'status' => 'Status',
            'url' => 'Url',
        ];
    }
}
