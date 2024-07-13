<?php

namespace app\controllers;

use app\models\AcBlog;
use app\models\AcLessons;
use Yii;
use app\models\Texts;

class WishlistController extends \yii\web\Controller
{
    public static function pages()
    {
        $page['index'] = 10;
        return $page;
    }
    public function beforeAction($action)
    {
        if (!isset($_COOKIE['language']) || empty($_COOKIE['language'])) {
            setcookie('language', 'am', time() + (365 * 24 * 60 * 60));
            $this->refresh();
            Yii::$app->end();
            return false;
        }
        $lng = $_COOKIE['language'] ?? 'en';
        if($lng !== 'am' && $lng !== 'ru' && $lng !== 'en'){
            setcookie('language', 'am', time() + (365 * 24 * 60 * 60));
            $this->refresh();
            Yii::$app->end();
            return false;
        }
        $pId = self::pages();
        $txt = Texts::find()
            ->select(['text_'.$lng.' as text']);
        if(@$pId[Yii::$app->controller->action->id]){
            $txt->where(['page_id' => $pId[Yii::$app->controller->action->id]]);
        }
        $txt = $txt->orWhere(['is','page_id' ,null ])
            ->asArray()
            ->indexBy('slug')
            ->column();
        $GLOBALS['text'] = $txt;
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }
    public function actionIndex()
    {
//        echo "<pre>";
        $language = $_COOKIE['language'];
        $wishlist_courses = AcLessons::find()->select('ac_lessons.id as lessons_id, ac_lessons.img as img, ac_lessons.price as price, ac_lessons.rating as rating,
         lesson_name_'.$language.' as lesson_name,lesson_title_'.$language.' as lesson_title, lesson_content_'.$language.' as lesson_content')
            ->leftJoin('ac_wishlist', 'ac_lessons.id = ac_wishlist.product_id')
            ->where(['ac_lessons.status' => '1'])
            ->andWhere(['ac_wishlist.status' => '1'])
            ->andWhere(['active' => '1'])
            ->andWhere(['type' => '1'])
            ->andWhere(['user_id' => Yii::$app->user->identity->id])
            ->asArray()
            ->all();
        $wishlist_blogs = AcBlog::find()->select([
            'ac_blog.id as blog_id',
            'img',
            'page_name_'.$language.' as page_name',
            'page_title_'.$language.' as page_title',
            'page_content_'.$language.' as page_content',
            " DATE_FORMAT(ac_blog.create_date, '%b %d, %Y') as create_date"])
            ->leftJoin('ac_wishlist', 'ac_blog.id = ac_wishlist.product_id')
            ->where(['ac_blog.status' => '1'])
            ->andWhere(['ac_wishlist.status' => '1'])
            ->andWhere(['active' => '1'])
            ->andWhere(['type' => '2'])
            ->andWhere(['user_id' => Yii::$app->user->identity->id])
            ->asArray()
            ->all();
        return $this->render('index',[
            'wishlist_courses' => $wishlist_courses,
            'wishlist_blogs' => $wishlist_blogs
        ]);
    }
    public function actionBlogsWishlist()
    {
        $language = $_COOKIE['language'];
        $wishlist_blogs = AcBlog::find()->select([
            'ac_blog.id as blog_id',
            'img',
            'page_name_'.$language.' as page_name',
            'page_title_'.$language.' as page_title',
            'page_content_'.$language.' as page_content',
            " DATE_FORMAT(ac_blog.create_date, '%b %d, %Y') as create_date"])
            ->leftJoin('ac_wishlist', 'ac_blog.id = ac_wishlist.product_id')
            ->where(['ac_blog.status' => '1'])
            ->andWhere(['ac_wishlist.status' => '1'])
            ->andWhere(['active' => '1'])
            ->andWhere(['type' => '2'])
            ->andWhere(['user_id' => Yii::$app->user->identity->id])
            ->asArray()
            ->all();
        return $this->render('blogs-wishlist',[
            'wishlist_blogs' => $wishlist_blogs
        ]);
    }
}
