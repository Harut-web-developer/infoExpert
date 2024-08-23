<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ac_orders".
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $total_price
 * @property int|null $order_num
 * @property string|null $status
 * @property string|null $create_date
 */
class AcOrders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ac_orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'total_price', 'order_num'], 'integer'],
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
            'price' => 'Price',
            'order_num' => 'Order Num',
            'status' => 'Status',
            'create_date' => 'Create Date',
        ];
    }
    public function getUsername(){
        return $this->hasOne(User::className(),['id' => 'user_id']);
    }
}
