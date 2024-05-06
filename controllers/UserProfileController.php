<?php

namespace app\controllers;

use Yii;
class UserProfileController extends \yii\web\Controller
{
    public function beforeAction($action)
    {
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
        return $this->render('user-create');
    }
    public function actionAchievements()
    {
        return $this->render('achievements');
    }
    public function actionAchievementsEdit()
    {
        return $this->render('achievements-edit');
    }
}
