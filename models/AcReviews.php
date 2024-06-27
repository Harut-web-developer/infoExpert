<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ac_reviews".
 *
 * @property int $id
 * @property string|null $text_am
 * @property string|null $text_ru
 * @property string|null $text_en
 * @property string|null $from_am
 * @property string|null $from_ru
 * @property string|null $url
 * @property string|null $from_en
 * @property int|null $platform fb/in
 * @property int|null $stars
 * @property string $create_date
 */
class AcReviews extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ac_reviews';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text_am', 'text_ru', 'text_en','from_am', 'from_ru', 'from_en','url'], 'string'],
            [['platform', 'stars'], 'integer'],
            [['create_date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text_am' => 'Text Am',
            'text_ru' => 'Text Ru',
            'text_en' => 'Text En',
            'from_am' => 'From Am',
            'from_ru' => 'From Ru',
            'url' => 'URL',
            'from_en' => 'From En',
            'platform' => 'Platform',
            'stars' => 'Stars',
            'create_date' => 'Create Date',
        ];
    }
}
