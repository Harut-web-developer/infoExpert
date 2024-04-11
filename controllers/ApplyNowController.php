<?php

namespace app\controllers;

class ApplyNowController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionApplyApplication()
    {
        return $this->render('application');
    }
}
