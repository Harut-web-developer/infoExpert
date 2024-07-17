<?php

namespace app\controllers;

use Yii;
use app\models\Texts;

class ContactUsController extends \yii\web\Controller
{
    public static function pages()
    {
        $page['index'] = 17;
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
        if($this->request->isPost && isset($_POST['name'])){
            $email = 'info@infoexpert.am';
            $post = $this->request->post();
            $senderName = $post['name'];
            $senderEmail = $post['email'];
            $subject = "Contact us";
            $message = $post['comment'];

            $headers = [
                'From' => "$senderName <{$senderEmail}>",
                'Reply-To' => $senderEmail,
                'MIME-Version' => '1.0',
                'Content-type' => 'text/html; charset=UTF-8'
            ];

            $headersString = '';
            foreach ($headers as $key => $value) {
                $headersString .= "$key: $value\r\n";
            }
            mail($email, $subject, $message, $headersString);
        }
        return $this->render('index');
    }
}
