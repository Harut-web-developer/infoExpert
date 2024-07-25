<?php

namespace app\controllers;

use app\models\AcLessons;
use app\models\AcTutors;
use Yii;
use app\models\Texts;

class LessonsController extends \yii\web\Controller
{
    public static function pages()
    {
        $page['lesson'] = 21;
        return $page;
    }
    public function beforeAction($action)
    {
        // Harut ev Mariam
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
    public function actionLesson()
    {
        // Harut
        $lesson_url = $_GET['url'];
        $language = $_COOKIE['language'];
        $lesson = AcLessons::find()->select('id,lesson_name_'.$language.' as lesson_name,lesson_content_'.$language.' as lesson_content, price, img, certificate_img')
            ->where(['status' => '1'])
            ->andWhere(['url' => $lesson_url])
            ->asArray()
            ->one();
        $tutors = AcTutors::find()->select('id, username_'.$language.' as username, text_'.$language.' as text,img')
            ->where(['status' => '1'])
            ->andwhere(['lesson_id' => $lesson['id']])
            ->asArray()
            ->all();
        return $this->render('lesson',[
            'lesson' => $lesson,
            'tutors' => $tutors
        ]);
    }
}
