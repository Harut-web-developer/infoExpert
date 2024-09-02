<?php

namespace app\controllers;

use app\models\AcGroups;
use app\models\AcLessons;
use app\models\AcMyLessons;
use app\models\AcTutors;
use app\models\AcUserVideoWatch;
use app\models\AcVideoLessons;
use Yii;
use app\models\Texts;
use app\models\User;

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
        $check_lesson_exist = AcMyLessons::find()->where(['user_id' => $user_id])->andWhere(['lessons_id' => $lesson['id']])->exists();
        $lesson_count = AcVideoLessons::find()->select('lesson_number as lesson_count')
            ->where(['status' => '1'])
            ->andWhere(['lesson_id' => $lesson['id']])
            ->asArray()
            ->all();
        $change_video = AcVideoLessons::find()->select('id,name_'.$language.' as name, video, type')
            ->where(['and',['status' => '1'],['lesson_id' => $lesson['id']]])->asArray()->one();
        $tutors = AcTutors::find()->select('id, username_'.$language.' as username, text_'.$language.' as text,img')
            ->where(['status' => '1'])
            ->andwhere(['lesson_id' => $lesson['id']])
            ->orderBy(['order_num' => SORT_ASC])
            ->asArray()
            ->all();
        $check_video_watched = AcUserVideoWatch::find()
            ->leftJoin('ac_video_lessons','ac_video_lessons.id = ac_user_video_watch.video_id')
            ->where(['and',['ac_video_lessons.status' => '1'],['ac_user_video_watch.status' => '1'],['check_watch' => 1]])
            ->andWhere(['ac_video_lessons.lesson_number' => $lesson_count[0]['lesson_count']])
            ->andWhere(['ac_user_video_watch.user_id' => $user_id])
            ->andWhere(['ac_user_video_watch.lesson_id' => $lesson['id']])
            ->one();
//        echo "<pre>";
////        var_dump($lesson_count);
//        var_dump($check_video_watched);
//        exit();
        $lesson_keywords = AcLessons::find()->select('lesson_keywords_'.$language.' as lesson_keywords')->where(['status' => '1'])->asArray()->all();
        $meta_content = [];
        foreach ($lesson_keywords as $lesson_keyword) {
            array_push($meta_content,$lesson_keyword['lesson_keywords']);
        }
        $implode_meta = implode(',', $meta_content);
        $check_group = User::findOne($user_id);
        $check_group = $check_group->groups_id;
        $explode = explode(',', $check_group);
        $action_hybrid = AcGroups::find()->where(['and',['lesson_id' => $lesson['id']],['action' => 1],['in', 'id', $explode]])->asArray()->exists();
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $implode_meta]);
        return $this->render('lesson',[
            'lesson' => $lesson,
            'tutors' => $tutors,
            'lesson_count' => $lesson_count,
            'change_video' => $change_video,
            'check_video_watched' => $check_video_watched,
            'check_lesson_exist' => $check_lesson_exist,
            'action_hybrid' => $action_hybrid,
        ]);
    }
    public function actionChangeVideo(){
        if ($this->request->isGet){
            $language = $_COOKIE['language'];
            $user_id = Yii::$app->user->identity->id;
            $num = intval($this->request->get('num'));
            $lesson_id = intval($this->request->get('lesson'));
            $change_video = AcVideoLessons::find()->select('id,lesson_id,name_'.$language.' as name, video, type')
                ->where(['and',['status' => '1'],['lesson_number' => $num],['lesson_id' => $lesson_id]])->asArray()->one();
            $check_video_watched = AcUserVideoWatch::find()
                ->leftJoin('ac_video_lessons','ac_video_lessons.id = ac_user_video_watch.video_id')
                ->where(['and',['ac_video_lessons.status' => '1'],['ac_user_video_watch.status' => '1'],['check_watch' => 1]])
                ->andWhere(['ac_video_lessons.lesson_number' => $num])
                ->andWhere(['ac_user_video_watch.user_id' => $user_id])
                ->andWhere(['ac_user_video_watch.lesson_id' => $lesson_id])
                ->exists();
            $check_group = User::findOne($user_id);
            $check_group = $check_group->groups_id;
            $explode = explode(',', $check_group);
            $action_hybrid = AcGroups::find()->where(['and',['lesson_id' => $change_video['lesson_id']],['action' => 1],['in', 'id', $explode]])->asArray()->exists();
            if (!empty($change_video)){
                return $this->renderAjax('video-lessons',[
                    'change_video' => $change_video,
                    'check_video_watched' => $check_video_watched,
                    'action_hybrid' => $action_hybrid,
                ]);
            }
            return false;
        }
    }
    public function actionCheckWatched(){
        if ($this->request->isGet){
            date_default_timezone_set("Asia/Yerevan");
            $video_id = intval($this->request->get('video_id'));
            $lesson_id = AcVideoLessons::findOne($video_id);
            $user_id = Yii::$app->user->identity->id;
            $checked_watch = new AcUserVideoWatch();
            $checked_watch->user_id = $user_id;
            $checked_watch->video_id = $video_id;
            $checked_watch->lesson_id = $lesson_id->lesson_id;
            $checked_watch->check_watch = 1;
            $checked_watch->create_date = date('Y-m-d H:i:s');
            $checked_watch->save();
            $lesson_count = AcLessons::find()->select('ac_lessons.lessons_count')
                ->leftJoin('ac_video_lessons', ' ac_video_lessons.lesson_id = ac_lessons.id')
                ->where(['and',['ac_video_lessons.status' => '1'],['ac_lessons.status' => '1'],['ac_video_lessons.id' => $video_id]])
                ->asArray()
                ->one();
            if ($_GET['action'] == 1){
                $count_video_watched = AcUserVideoWatch::find()->where(['and',
                    ['status' => '1'],
                    ['lesson_id' => $lesson_id->lesson_id],
                    ['user_id' => $user_id]
                ])->count();
                $check_group = User::findOne($user_id);
                $check_group = $check_group->groups_id;
                $explode = explode(',', $check_group);
                $lesson_count_groups = AcGroups::find()->select('lesson_count')
                    ->where(['and',['lesson_id' => $lesson_id->lesson_id],['action' => 1],['in', 'id', $explode]])
                    ->asArray()
                    ->one();
                $sum_video = $count_video_watched + $lesson_count_groups['lesson_count'];
                $percent = round((100 / $lesson_count['lessons_count']) * $sum_video);
                $my_lessons = AcMyLessons::findOne(['user_id' => $user_id,'lessons_id' => $lesson_id->lesson_id, 'status' => '1']);
                if (!empty($my_lessons)){
                    $my_lessons->complete_percent = $percent;
                    if ($my_lessons->complete_percent == 100){
                        $my_lessons->status = '2';
                    }
                    $my_lessons->save(false);
                }
            }else{
                $watched_number_video = AcUserVideoWatch::find()->select('check_watch')
                    ->where(['and',['status' => '1'],['user_id' => $user_id],['lesson_id' => $lesson_id->lesson_id],])->count();
                $percent = round((100 / $lesson_count['lessons_count']) * $watched_number_video);
                $my_lessons = AcMyLessons::findOne(['user_id' => $user_id,'lessons_id' => $lesson_id->lesson_id, 'status' => '1']);
                if (!empty($my_lessons)){
                    $my_lessons->complete_percent = $percent;
                    if ($my_lessons->complete_percent == 100){
                        $my_lessons->status = '2';
                    }
                    $my_lessons->save(false);
                }
            }
            return json_encode(true);
        }
    }
}
