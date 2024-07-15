<?php

namespace app\controllers;

use app\models\AcQuestionAnswers;
use app\models\AcQuestionList;
use app\models\AcQuestionQuests;
use Yii;
use app\models\Texts;

class QuizeController extends \yii\web\Controller
{
    public static function pages()
    {
        $page['index'] = 25;
        $page['trade-management'] = 25;
        $page['result'] = 25;
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
        $quize_name = AcQuestionList::find()
            ->select('id, name_'.$language.' as name')
            ->where(['status' => '1'])
            ->asArray()
            ->all();
        return $this->render('index',[
            'quize_name' => $quize_name
        ]);
    }
    public function actionQuizeQuestions()
    {
        $id = intval($_GET['id']);
        $language = $_COOKIE['language'];
        $answers = AcQuestionQuests::find()
            ->select([
                'ac_question_quests.id',
                'ac_question_quests.name_'.$language.' as quest_name',
            ])
            ->joinWith([
                'answers' => function($query) use ($language) {
                    $query->select([
                        'id',
                        'name_'.$language.' as answer_name',
                        'status',
                        'order_num',
                        'is_true',
                        'quest_id'
                    ]);
                }
            ])
            ->where(['ac_question_quests.question_id' => $id])
            ->andWhere(['ac_question_quests.status' => '1'])
            ->asArray()
            ->all();
        $answers_list = AcQuestionList::find()->select('id,name_'.$language.' as name_list')
            ->where(['status' => '1'])
            ->andWhere(['id' => $id])
            ->asArray()
            ->one();
        $questions_count = AcQuestionQuests::find()
            ->where(['status' => '1'])
            ->andWhere(['question_id' => $id])
            ->count();

        return $this->render('quize-questions',[
            'answers' => $answers,
            'answers_list' => $answers_list,
            'questions_count' => $questions_count
        ]);

    }
    public function actionResult()
    {
        $id = intval($_GET['id']);
        $true_answer_count = intval($_GET['count']);
        $language = $_COOKIE['language'];
        $answers_list = AcQuestionList::find()->select('id,name_'.$language.' as name_list')
            ->where(['status' => '1'])
            ->andWhere(['id' => $id])
            ->asArray()
            ->one();
        $questions_count = AcQuestionQuests::find()
            ->where(['status' => '1'])
            ->andWhere(['question_id' => $id])
            ->count();
        return $this->render('result',[
            'answers_list' => $answers_list,
            'questions_count' => $questions_count,
            'true_answer_count' => $true_answer_count
        ]);
    }
}
