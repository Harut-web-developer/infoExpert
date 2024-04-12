<?php

namespace app\controllers;

class MyCardController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionCheckout()
    {
        return $this->render('checkout');
    }

}
