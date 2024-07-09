<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ac_wishlist".
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $product_id
 * @property int|null $type
 * @property int|null $active
 * @property string|null $status
 * @property string|null $create_date
 */
class AcWishlist extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ac_wishlist';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'product_id', 'type', 'active'], 'integer'],
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
            'product_id' => 'Product ID',
            'type' => 'Type',
            'active' => 'Active',
            'status' => 'Status',
            'create_date' => 'Create Date',
        ];
    }
    public static function addWishlist($id,$type){
        date_default_timezone_set("Asia/Yerevan");
        $user_id = Yii::$app->user->identity->id;
        $wishlist_exist = AcWishlist::find()->where(['type' => $type])
            ->andWhere(['user_id' => $user_id])
            ->andWhere(['status' => '1'])->andWhere(['active' => '1'])
            ->andWhere(['product_id' => $id])->exists();
        $wishlist_inactive_exist = AcWishlist::find()->where(['type' => $type])
            ->andWhere(['user_id' => $user_id])
            ->andWhere(['status' => '1'])->andWhere(['active' => '0'])
            ->andWhere(['product_id' => $id])->exists();
        if ($wishlist_exist && $user_id != null){
            $delete_wishlist = AcWishlist::findOne([
                'user_id' => $user_id,
                'product_id' => $id,
                'type' => $type,
                'status' => '1',
                'active' => '1',
            ]);
            $delete_wishlist->active = '0';
            $delete_wishlist->save();
            return 'inactivate';
        }elseif($wishlist_inactive_exist && $user_id != null){
            $wishlist_activate =  AcWishlist::findOne([
                'user_id' => $user_id,
                'product_id' => $id,
                'type' => $type,
                'status' => '1',
                'active' => '0',
            ]);
            $wishlist_activate->active = '1';
            $wishlist_activate->save();
            return 'activate';
        }elseif($user_id != null){
            $wishlist_blog = new AcWishlist();
            $wishlist_blog->user_id = $user_id;
            $wishlist_blog->product_id = $id;
            $wishlist_blog->type = $type;
            $wishlist_blog->active = 1;
            $wishlist_blog->create_date = date('Y-m-d H:i:s');
            $wishlist_blog->save();
            return 'add';
        }
        return false;
    }
    public static function getWishlist($id, $type){
        $user_id = Yii::$app->user->identity->id;
        $active_wishlist = AcWishlist::find()->where(['status' => '1'])
            ->andWhere(['user_id' => $user_id])->andWhere(['type' => $type])
            ->andWhere(['product_id' => $id])->one();
        $active_wishlist = $active_wishlist->active;
        return $active_wishlist;
    }
}
