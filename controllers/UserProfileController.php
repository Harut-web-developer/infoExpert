<?php

namespace app\controllers;

use app\models\Texts;
use app\models\User;
use Yii;
class UserProfileController extends \yii\web\Controller
{
    public static function pages()
    {
        $page['index'] = 4;
        $page['user-create'] = 5;
        $page['achievements'] = 6;
        $page['achievements-edit'] = 7;
        $page['edit-profile'] = 20;
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
        if ($action->id !== 'login' && !(isset($session['user_id']) && $session['logged'])) {
            return $this->redirect('/login');
        }
        else if ($action->id == 'login' && !(isset($session['user_id']) && $session['logged'])) {
            return $this->actionLogin();
        }
        if(!$session['user_name']){
            $this->redirect('/logout');
        }
        return parent::beforeAction($action);
    }
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionUserCreate()
    {
        if ($this->request->isPost){
            $post = $this->request->post();
            $user = User::findOne(intval(Yii::$app->user->identity->id));
            $user->username = $post['username'];
            $user->phone = $post['phone'];
            $user->linkdin_url = $post['linkdin_url'];
            $user->email = $post['email'];

            if (!empty($_FILES['image']) && $_FILES['image']["name"]) {
                $tmp_name = $_FILES['image']["tmp_name"];
                $name = time() . basename($_FILES['image']["name"]);
                move_uploaded_file($tmp_name, "web/uploads/$name");
                $user->image = "web/uploads/$name";
            }
            if (!empty($_FILES['cv']) && $_FILES['cv']["name"]) {
                $tmp_name = $_FILES['cv']["tmp_name"];
                $name = time() . basename($_FILES['cv']["name"]);
                move_uploaded_file($tmp_name, "web/uploads/$name");
                $user->cv = "web/uploads/$name";
            }
            $user->save(false);
            return $this->redirect('user-create');

        }
        return $this->render('user-create');
    }
    public function actionAchievements()
    {
        return $this->render('achievements');
    }
    public function actionAchievementsEdit()
    {
        if ($this->request->isPost) {
            $post = $this->request->post();
            $user = User::findOne(intval(Yii::$app->user->identity->id));
            $user->username = $post['username'];
            $user->phone = $post['phone'];
            $user->linkdin_url = $post['linkdin_url'];
            $user->email = $post['email'];

            if (!empty($_FILES['image']) && $_FILES['image']["name"]) {
                $tmp_name = $_FILES['image']["tmp_name"];
                $name = time() . basename($_FILES['image']["name"]);
                move_uploaded_file($tmp_name, "web/uploads/$name");
                $user->image = "web/uploads/$name";
            }
            if (!empty($_FILES['cv']) && $_FILES['cv']["name"]) {
                $tmp_name = $_FILES['cv']["tmp_name"];
                $name = time() . basename($_FILES['cv']["name"]);
                move_uploaded_file($tmp_name, "web/uploads/$name");
                $user->cv = "web/uploads/$name";
            }
            $user->save(false);
            return $this->redirect('achievements-edit');
        }
        return $this->render('achievements-edit');
    }
    public function actionEditProfile()
    {
        if ($this->request->isPost) {
            $post = $this->request->post();
            $user = User::findOne(intval(Yii::$app->user->identity->id));
            $user->username = $post['username'];
            $user->phone = $post['phone'];
            $user->linkdin_url = $post['linkdin_url'];
            $user->email = $post['email'];
            if (!empty($_FILES['image']) && $_FILES['image']["name"]) {
                $tmp_name = $_FILES['image']["tmp_name"];
                $name = time() . basename($_FILES['image']["name"]);
                move_uploaded_file($tmp_name, "web/uploads/$name");
                $user->image = "web/uploads/$name";
            }
            if (!empty($_FILES['cv']) && $_FILES['cv']["name"]) {
                $tmp_name = $_FILES['cv']["tmp_name"];
                $name = time() . basename($_FILES['cv']["name"]);
                move_uploaded_file($tmp_name, "web/uploads/$name");
                $user->cv = "web/uploads/$name";
            }
            $user->save(false);
            return $this->redirect('achievements-edit');

        }
        return $this->render('edit-profile');
    }
}
