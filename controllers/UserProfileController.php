<?php

namespace app\controllers;

class UserProfileController extends \yii\web\Controller
{
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
}
