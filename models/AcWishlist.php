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

        $user_id = Yii::$app->user->identity->id;
        if($user_id != null){
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
    public static function removeWishlist($id,$type){
        $user_id = Yii::$app->user->identity->id;
        if($user_id != null){
            $wishlist_blog = AcWishlist::findOne([
                'product_id' => $id,
                'type' => $type,
                'active' => '1',
                'status' => '1',
                'user_id' => $user_id
            ]);
            $wishlist_blog->delete();
            return 'delete';
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
