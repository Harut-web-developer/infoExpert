<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ac_info".
 *
 * @property int $id
 * @property int|null $partner
 * @property int|null $products
 * @property int|null $programms
 * @property string|null $instagram_link
 * @property string|null $facebook_link
 * @property string|null $linkdin_link
 * @property string|null $status
 * @property string|null $create_date
 */
class AcInfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ac_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['partner', 'products', 'programms'], 'integer'],
            [['create_date'], 'safe'],
            [['instagram_link', 'facebook_link', 'linkdin_link', 'status'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'partner' => 'Partner',
            'products' => 'Products',
            'programms' => 'Programms',
            'instagram_link' => 'Instagram Link',
            'facebook_link' => 'Facebook Link',
            'linkdin_link' => 'Linkdin Link',
            'status' => 'Status',
            'create_date' => 'Create Date',
        ];
    }
}
