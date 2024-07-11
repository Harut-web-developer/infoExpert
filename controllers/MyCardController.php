<?php

namespace app\controllers;

use app\models\AcLessons;
use app\models\AcMyCard;
use Yii;
use app\models\Texts;

class MyCardController extends \yii\web\Controller
{
    public static function pages()
    {
        $page['index'] = 11;
        $page['checkout'] = 12;
        $page['congratulation'] = 13;
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
        $language = $_COOKIE['language'];
        $user_id = Yii::$app->user->identity->id;
//        echo "<pre>";
        $my_card = AcLessons::find()->select('ac_my_card.id as my_card_id,lesson_name_'.$language.' as lesson_name, lesson_title_'.$language.' as lesson_title,
        lesson_content_'.$language.' as lesson_content')
            ->leftJoin('ac_my_card', 'ac_my_card.lessons_id = ac_lessons.id')
            ->where(['and',['ac_my_card.status' => '1'],['ac_my_card.user_id' => $user_id],])
            ->asArray()
            ->all();
//        var_dump($my_card);
//        exit();
        return $this->render('index',[
            'my_card' => $my_card
        ]);
    }
    public function actionCheckout()
    {
        return $this->render('checkout');
    }

    public function actionCongratulation()
    {
        return $this->render('congratulation-on-achievement-messages');
    }
    public function actionAddCard(){
        if ($this->request->isGet){
            $id = intval($this->request->get('lesson_id'));
            $add_card = AcMyCard::addCard($id);
//            return $add_card;
            var_dump($add_card);
        }
    }
}
