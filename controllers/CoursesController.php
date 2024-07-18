<?php

namespace app\controllers;

use app\models\AcLessons;
use app\models\AcTutors;
use Yii;
use app\models\Texts;

class CoursesController extends \yii\web\Controller
{
    public static function pages()
    {
        $page['my-courses'] = 8;
        $page['index'] = 9;

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
        $session = Yii::$app->session;
        if ($action->id == 'my-courses' && !(isset($session['user_id']) && $session['logged'])) {
            return $this->redirect('/login')->send();
        }
        return parent::beforeAction($action);
    }
    public function actionIndex()
    {
        $language = $_COOKIE['language'];
        $courses = AcLessons::find()->select('id, img,rating,price,lesson_name_'.$language.' as lesson_name,
         lesson_title_'.$language.' as lesson_title, lesson_certificate_'.$language.' as lesson_certificate')
            ->where(['status' => '1'])
            ->asArray()
            ->all();
        $tutors = AcTutors::find()->select('img, username_'.$language.' as username, text_'.$language.' as text')
            ->where(['status' => '1'])
            ->asArray()
            ->all();
        return $this->render('index',[
            'courses' => $courses,
            'tutors' => $tutors
        ]);
    }
    public function actionMyCourses()
    {
        $language = $_COOKIE['language'];
        $user_id = Yii::$app->user->identity->id;
        $my_lessons = AcLessons::find()->select('ac_my_lessons.id as my_lessons_id,lesson_name_'.$language.' as lesson_name,
         ac_my_lessons.complete_percent as complete_percent,ac_lessons.rating as rating')
            ->leftJoin('ac_my_lessons', 'ac_my_lessons.lessons_id = ac_lessons.id')
            ->where(['and',['ac_my_lessons.status' => '1'],['ac_my_lessons.user_id' => $user_id],])
            ->asArray()
            ->all();
        return $this->render('my-courses',[
            'my_lessons' => $my_lessons
        ]);
    }
}
