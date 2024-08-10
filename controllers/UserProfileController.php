<?php

namespace app\controllers;

use app\models\AcCertificate;
use app\models\AcLessons;
use app\models\AcMyLessons;
use app\models\AcRating;
use app\models\Texts;
use app\models\User;
use Yii;
class UserProfileController extends \yii\web\Controller
{
    public static function pages()
    {
        $page['index'] = 4;
        $page['user-create'] = 5;
        $page['achievements'] = 6;
        $page['achievements-edit'] = 7;
        $page['edit-profile'] = 20;
        return $page;
    }
    public function beforeAction($action)
    {
        // Harut  50 ev Mariam 50
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
        // Mariam
        return $this->render('index');
    }
    public function actionUserCreate()
    {
        // Harut
        if ($this->request->isPost){
            $post = $this->request->post();
            $user = User::findOne(intval(Yii::$app->user->identity->id));
            $user->username = $post['username'];
            $user->phone = $post['phone'];
            $user->linkdin_url = $post['linkdin_url'];
            $user->email = $post['email'];

            if (!empty($_FILES['image']) && $_FILES['image']["name"]) {
                $tmp_name = $_FILES['image']["tmp_name"];
                $name = time() . basename($_FILES['image']["name"]);
                move_uploaded_file($tmp_name, "web/uploads/$name");
                $user->image = "web/uploads/$name";
            }
            if (!empty($_FILES['cv']) && $_FILES['cv']["name"]) {
                $tmp_name = $_FILES['cv']["tmp_name"];
                $name = time() . basename($_FILES['cv']["name"]);
                move_uploaded_file($tmp_name, "web/uploads/$name");
                $user->cv = "web/uploads/$name";
            }
            $user->save(false);
            return $this->redirect('user-create');

        }
        return $this->render('user-create');
    }
    public function actionAchievements()
    {
        // Mariam
        $language = $_COOKIE['language'];
        $user_id = Yii::$app->user->identity->id;
        $certificates = AcCertificate::find()
            ->select([
                'ac_certificate.img as img',
                'lesson_name_'.$language.' as lesson_name',
            ])
            ->leftJoin('ac_lessons', 'ac_certificate.lesson_id = ac_lessons.id')
            ->where([
                'ac_certificate.status' => '1',
                'ac_certificate.user_id' => $user_id,
            ])
            ->asArray()
            ->all();
        return $this->render('achievements',[
            'certificates' => $certificates
        ]);
    }
    public function actionAchievementsEdit()
    {
        // Harut
        if ($this->request->isPost) {
            $post = $this->request->post();
            $user = User::findOne(intval(Yii::$app->user->identity->id));
            $user->username = $post['username'];
            $user->phone = $post['phone'];
            $user->linkdin_url = $post['linkdin_url'];
            $user->email = $post['email'];

            if (!empty($_FILES['image']) && $_FILES['image']["name"]) {
                $tmp_name = $_FILES['image']["tmp_name"];
                $name = time() . basename($_FILES['image']["name"]);
                move_uploaded_file($tmp_name, "web/uploads/$name");
                $user->image = "web/uploads/$name";
            }
            if (!empty($_FILES['cv']) && $_FILES['cv']["name"]) {
                $tmp_name = $_FILES['cv']["tmp_name"];
                $name = time() . basename($_FILES['cv']["name"]);
                move_uploaded_file($tmp_name, "web/uploads/$name");
                $user->cv = "web/uploads/$name";
            }
            $user->save(false);
            return $this->redirect('achievements-edit');
        }
        $language = $_COOKIE['language'];
        $course_exist = AcMyLessons::find()->select('lessons_id, ac_lessons.lesson_name_'.$language.' as lesson_name')
            ->leftJoin('ac_lessons','ac_lessons.id = ac_my_lessons.lessons_id')
            ->where(['and', ['ac_my_lessons.status' => '2'],['complete_percent' => 100],['user_id' => Yii::$app->user->identity->id]])->asArray()->one();
        return $this->render('achievements-edit',[
            'course_exist' => $course_exist
        ]);
    }
    public function actionRating(){
        date_default_timezone_set("Asia/Yerevan");
        if ($this->request->isPost){
            $post = $this->request->post();
            $user_id = Yii::$app->user->identity->id;
            $rating = new AcRating();
            $rating->user_id = $user_id;
            $rating->lesson_id = $post['lesson_id'];
            $rating->rating = $post['rating'];
            $rating->comment = $post['message'];
            $rating->create_date = date('Y-m-d H:i:s');
            $rating->save(false);
            $update_my_lesson = AcMyLessons::find()->where(['and',['lessons_id' => $post['lesson_id']],['user_id' => $user_id],['status' => '2'],['complete_percent' => 100]])->one();
            $update_my_lesson->status = '3';
            $update_my_lesson->save(false);
            $rating_lesson = AcRating::find()->select('lesson_id,AVG(rating) as rating')
                ->where(['status' => '1'])
                ->groupBy('lesson_id')
                ->asArray()
                ->all();
            $lessons = AcLessons::find()->select('id,rating')->all();
            foreach ($lessons as $item){
                foreach ($rating_lesson as $value){
                    if ($item->id == $value['lesson_id']){
                        $item->rating = round($value['rating']);
                        $item->save(false);
                    }
                }
            }
            return $this->redirect('/user-profile/achievements-edit');
        }
    }
    public function actionEditProfile()
    {
        // Harut
        if ($this->request->isPost) {
            $post = $this->request->post();
            $user = User::findOne(intval(Yii::$app->user->identity->id));
            $user->username = $post['username'];
            $user->phone = $post['phone'];
            $user->linkdin_url = $post['linkdin_url'];
            $user->email = $post['email'];
            if (!empty($_FILES['image']) && $_FILES['image']["name"]) {
                $tmp_name = $_FILES['image']["tmp_name"];
                $name = time() . basename($_FILES['image']["name"]);
                move_uploaded_file($tmp_name, "web/uploads/$name");
                $user->image = "web/uploads/$name";
            }
            if (!empty($_FILES['cv']) && $_FILES['cv']["name"]) {
                $tmp_name = $_FILES['cv']["tmp_name"];
                $name = time() . basename($_FILES['cv']["name"]);
                move_uploaded_file($tmp_name, "web/uploads/$name");
                $user->cv = "web/uploads/$name";
            }
            $user->save(false);
            return $this->redirect('achievements-edit');

        }
        return $this->render('edit-profile');
    }
}
