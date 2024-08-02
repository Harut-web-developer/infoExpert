<?php

namespace app\controllers;

use app\models\AcBlog;
use Yii;
use app\models\Texts;

class BlogController extends \yii\web\Controller
{
    public static function pages()
    {
        $page['index'] = 16;
        return $page;
    }

    public function beforeAction($action)
    {
        // Mariam
        if (!isset($_COOKIE['language']) || empty($_COOKIE['language'])) {
            setcookie('language', 'am', time() + (365 * 24 * 60 * 60));
            $this->refresh();
            Yii::$app->end();
            return false;
        }
        $lng = $_COOKIE['language'] ?? 'en';
        if ($lng !== 'am' && $lng !== 'ru' && $lng !== 'en') {
            setcookie('language', 'am', time() + (365 * 24 * 60 * 60));
            $this->refresh();
            Yii::$app->end();
            return false;
        }
        $pId = self::pages();
        $txt = Texts::find()
            ->select(['text_' . $lng . ' as text']);
        if (@$pId[Yii::$app->controller->action->id]) {
            $txt->where(['page_id' => $pId[Yii::$app->controller->action->id]]);
        }
        $txt = $txt->orWhere(['is', 'page_id', null])
            ->asArray()
            ->indexBy('slug')
            ->column();

        $GLOBALS['text'] = $txt;
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }
    public function actionIndex()
    {
        // Harut
        $language = $_COOKIE['language'];
        $blogs = AcBlog::find()->select([
            'id',
            'page_name_' . $language . ' as page_name',
            'page_title_' . $language . ' as page_title',
            'page_content_' . $language . ' as page_content',
            "DATE_FORMAT(create_date, '%b %d, %Y') as create_date",
            'url',
            'img'
        ])->where(['status' => '1'])
            ->orderBy(['order_num' => SORT_ASC])
            ->asArray()->all();
        $blogsMobile = AcBlog::find()->select([
            'id',
            'page_name_' . $language . ' as page_name',
            'page_title_' . $language . ' as page_title',
            'page_content_' . $language . ' as page_content',
            "DATE_FORMAT(create_date, '%b %d, %Y') as create_date",
            'url',
            'img'
        ])->where(['status' => '1'])
            ->orderBy(['order_num' => SORT_ASC])
            ->asArray()
            ->all();
        return $this->render('index', [
            'blogs' => $blogs,
            'blogsMobile' => $blogsMobile,
        ]);
    }
    public function actionCategorie()
    {
        // Harut
        $language = $_COOKIE['language'];
        $blogs = AcBlog::find()->select([
            'id',
            'page_name_' . $language . ' as page_name',
            'page_title_' . $language . ' as page_title',
            'page_content_' . $language . ' as page_content',
            "DATE_FORMAT(create_date, '%b %d, %Y') as create_date",
            'url',
            'img'
        ])
            ->where(['status' => '1'])
            ->andWhere(['url' => $_GET['url']])
            ->asArray()
            ->one();
        $last_blogs = AcBlog::find()->select([
            'id',
            'page_name_' . $language . ' as page_name',
            'url',
            'img'
        ])
            ->where(['status' => '1'])
            ->limit(3)
            ->orderBy(['create_date' => SORT_DESC])
            ->asArray()
            ->all();
        return $this->render('categorie',[
            'blogs' => $blogs,
            'last_blogs' => $last_blogs,
        ]);
    }
}
