<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ac_orders_items".
 *
 * @property int $id
 * @property int|null $order_id
 * @property int|null $lesson_id
 * @property int|null $price
 * @property int|null $order_num
 * @property string|null $status
 * @property string|null $create_date
 */
class AcOrdersItems extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ac_orders_items';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_id', 'price', 'order_num','lesson_id'], 'integer'],
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
            'order_id' => 'Order ID',
            'price' => 'Price',
            'order_num' => 'Order Num',
            'status' => 'Status',
            'create_date' => 'Create Date',
        ];
    }
    public function getLesson(){
        return $this->hasOne(AcLessons::className(),['id' => 'lesson_id']);
    }
}
