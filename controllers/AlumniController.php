<?php

namespace app\controllers;

use app\models\AcAlumni;
use Yii;
use app\models\Texts;

class AlumniController extends \yii\web\Controller
{
    public static function pages()
    {
        $page['index'] = 3;
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
        // Harut
        $language = $_COOKIE['language'];
        $alumni = AcAlumni::find()->select('id,img,linkedin_link,alumni_'.$language.' as alumni, text_'.$language.' as text')
            ->where(['status' => '1'])
            ->orderBy(['order_num' => SORT_ASC])
            ->asArray()
            ->all();
        return $this->render('index',[
            'alumni' => $alumni
        ]);
    }

}
