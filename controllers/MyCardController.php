<?php

namespace app\controllers;

class MyCardController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionCongratulationOnAchievementMessages()
    {
        return $this->render('congratulation-on-achievement-messages');
    }
}
