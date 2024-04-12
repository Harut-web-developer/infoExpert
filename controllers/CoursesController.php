<?php

namespace app\controllers;

class CoursesController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionMyCourses()
    {
        return $this->render('my-courses');
    }
}
