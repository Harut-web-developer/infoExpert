<?php

namespace app\controllers;

use app\models\AcLessons;
use Yii;
use app\models\Texts;

class LessonsController extends \yii\web\Controller
{
    public static function pages()
    {
        $page['lesson'] = 21;
//        $page['management'] = 22;
//        $page['accounting'] = 23;
//        $page['marketing'] = 24;
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
//    public function actionAccountingForBegginers()
//    {
//        return $this->render('accouting-for-begginers.php');
//    }
//    public function actionAccounting()
//    {
//        return $this->render('accouting');
//    }
//    public function actionManagement()
//    {
//        return $this->render('management');
//    }
//    public function actionMarketing()
//    {
//        return $this->render('marketing');
//    }
    public function actionLesson()
    {
//        echo "<pre>";
        $language = $_COOKIE['language'];
        $lesson_id = intval($_GET['id']);
        $lesson = AcLessons::find()->select('lesson_name_'.$language.' as lesson_name,lesson_content_'.$language.' as lesson_content')->where(['status' => '1'])
            ->andWhere(['id' => $lesson_id])
            ->asArray()
            ->one();
//        $total_length = strlen($lesson['lesson_content']);
//        $part_length = ceil($total_length / 3);
//        $part1 = substr($lesson['lesson_content'], 0, $part_length);
//        $part2 = substr($lesson['lesson_content'], $part_length, $part_length);
//        $part3 = substr($lesson['lesson_content'], 2 * $part_length);


        $sentences = preg_split('/(?<!\w\.\w.)(?<![A-Z][a-z]\.)(?<=\.|\?|\!)\s/', $lesson['lesson_content']);
        $total_sentences = count($sentences);
        $part_size = ceil($total_sentences / 3);
        $part1 = array_slice($sentences, 0, $part_size);
        $part2 = array_slice($sentences, $part_size, $part_size);
        $part3 = array_slice($sentences, 2 * $part_size);
        $part1 = implode(' ', $part1);
        $part2 = implode(' ', $part2);
        $part3 = implode(' ', $part3);

        return $this->render('lesson',[
            'lesson' => $lesson,
            'part1' => $part1,
            'part2' => $part2,
            'part3' => $part3,
        ]);
    }
    public function actionIndex()
    {
        return $this->render('index');
    }

}
