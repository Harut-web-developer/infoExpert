<?php

namespace app\controllers;

use app\models\AcGroups;
use app\models\AcLessons;
use app\models\AcTutors;
use app\models\AcVideoLessons;
use Yii;
use app\models\Texts;

class LessonsController extends \yii\web\Controller
{
    public static function pages()
    {
        $page['lesson'] = 21;
        return $page;
    }
    public function beforeAction($action)
    {
        // Harut
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
    public function actionLesson()
    {

        $lesson_url = $_GET['url'];
        $language = $_COOKIE['language'];
        $user_id = Yii::$app->user->identity->id;
        $lesson = AcLessons::find()->select('id,lesson_name_'.$language.' as lesson_name,lesson_content_'.$language.' as lesson_content, price, img, certificate_img')
            ->where(['status' => '1'])
            ->andWhere(['url' => $lesson_url])
            ->asArray()
            ->one();
        $lesson_count = AcGroups::find()->select('ac_groups.lesson_count as lesson_count')
            ->leftJoin('user', 'user.groups_id = ac_groups.id')
            ->where(['user.id' => $user_id])
            ->andWhere(['ac_groups.lesson_id' => $lesson['id']])
            ->andWhere(['ac_groups.action' => 1])
            ->asArray()
            ->one();
        $number_video_lesson = AcGroups::find()->select('lesson_count')
            ->leftJoin('user','user.groups_id = ac_groups.id')
            ->where(['user.id' => $user_id])
            ->andWhere(['ac_groups.lesson_id' => $lesson['id']])
            ->andWhere(['ac_groups.status' => '1'])
            ->andWhere(['user.status' => '1'])
            ->andWhere(['action' => 1])
            ->asArray()
            ->one();
        $change_video = AcVideoLessons::find()->select('name_'.$language.' as name, video, type')
            ->where(['and',['status' => '1'],['lesson_id' => $lesson['id']],['lesson_number' => $number_video_lesson['lesson_count']]])->asArray()->one();
        $tutors = AcTutors::find()->select('id, username_'.$language.' as username, text_'.$language.' as text,img')
            ->where(['status' => '1'])
            ->andwhere(['lesson_id' => $lesson['id']])
            ->orderBy(['order_num' => SORT_ASC])
            ->asArray()
            ->all();
        $lesson_keywords = AcLessons::find()->select('lesson_keywords_'.$language.' as lesson_keywords')->where(['status' => '1'])->asArray()->all();
        $meta_content = [];
        foreach ($lesson_keywords as $lesson_keyword) {
            array_push($meta_content,$lesson_keyword['lesson_keywords']);
        }
        $implode_meta = implode(',', $meta_content);
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $implode_meta]);
        return $this->render('lesson',[
            'lesson' => $lesson,
            'tutors' => $tutors,
            'lesson_count' => $lesson_count,
            'change_video' => $change_video,
        ]);
    }
    public function actionChangeVideo(){
        if ($this->request->isGet){
            $language = $_COOKIE['language'];
            $num = intval($this->request->get('num'));
            $lesson = intval($this->request->get('lesson'));
            $change_video = AcVideoLessons::find()->select('name_'.$language.' as name, video, type')
                ->where(['and',['status' => '1'],['lesson_id' => $lesson],['lesson_number' => $num]])->asArray()->one();
            if (!empty($change_video)){
                return $this->renderAjax('video-lessons',[
                    'change_video' => $change_video
                ]);
            }
            return false;
        }
    }
}
