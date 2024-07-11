<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ac_partners".
 *
 * @property int $id
 * @property string|null $img_black
 * @property string|null $img
 * @property string|null $name_am
 * @property string|null $name_ru
 * @property string|null $name_en
 * @property int|null $status
 * @property int|null $order_num
 */
class AcPartners extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ac_partners';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'order_num'], 'integer'],
            [['img_black', 'img', 'name_am', 'name_ru', 'name_en'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'img_black' => 'Img Black',
            'img' => 'Img',
            'name_am' => 'Name Am',
            'name_ru' => 'Name Ru',
            'name_en' => 'Name En',
            'status' => 'Status',
            'order_num' => 'Order Num',
        ];
    }
}
