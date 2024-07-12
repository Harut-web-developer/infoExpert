<?php

namespace app\controllers;

use app\models\AcApplyNow;
use app\models\AcLessons;
use Yii;
use app\models\Texts;

class ApplyNowController extends \yii\web\Controller
{
    public static function pages()
    {
        $page['index'] = 14;
        $page['apply-application'] = 15;
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
        date_default_timezone_set('Asia/Yerevan');
        $language = $_COOKIE['language'];
        if ($this->request->isPost){
            $post = $this->request->post();
            $apply_now = new AcApplyNow();
            $apply_now->name = $post['name'];
            $apply_now->email = $post['email'];
            $apply_now->lesson_id = $post['lesson_number'];
            $apply_now->lesson_type = $post['lesson_type'];
            $apply_now->online_offline = $post['line'];
            $apply_now->phone = $post['phone'];
            $apply_now->create_date = date('Y-m-d H:i:s');
            $apply_now->save();
            return $this->redirect('apply-application');
        }
        $lessons = AcLessons::find()->select('id, lesson_name_'.$language.' as lesson_name')
            ->where(['status' => '1'])->asArray()->all();
        return $this->render('index',[
            'lessons' => $lessons
        ]);
    }
    public function actionApplyApplication()
    {
        return $this->render('application');
    }
}
