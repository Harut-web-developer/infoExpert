<?php

namespace app\controllers;

use app\models\AcAlumni;
use app\models\AcAnswers;
use app\models\AcApplyNow;
use app\models\AcCallback;
use app\models\AcCertificate;
use app\models\AcGroups;
use app\models\AcInfo;
use app\models\AcLessons;
use app\models\AcMyLessons;
use app\models\AcOrders;
use app\models\AcOrdersItems;
use app\models\AcPartners;
use app\models\AcQuestionAnswers;
use app\models\AcQuestionList;
use app\models\AcQuestionQuests;
use app\models\AcQuizeLog;
use app\models\AcRating;
use app\models\AcReviews;
use app\models\AcSubscribers;
use app\models\AcTutors;
use app\models\AcUserVideoWatch;
use app\models\AcVideoLessons;
use app\models\FsOrders;
use app\models\AcBlog;
use app\models\Texts;
use app\models\User;
use app\models\Users;
use app\models\AcHaveQuestions;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use yii\helpers\ArrayHelper;

use DateInterval;
use DatePeriod;
use DateTime;
use function PHPUnit\Framework\callback;

class AdminController extends Controller {
    public function beforeAction($action) {
        $this->enableCsrfValidation = false;
        $roles = User::roles;
        if(!isset($roles[Yii::$app->user->identity->role]) && $this->action->id !='login'){
            $this->redirect('/404');
        }

        $this->layout = 'admin';
        return parent::beforeAction($action);

    }
    public function behaviors() {
        return ['access' => ['class' => AccessControl::className(), 'only' => ['index'], 'rules' => [['actions' => ['login'], 'allow' => true, 'roles' => ['@', ], ], ['actions' => ['index'], 'allow' => true, 'roles' => ['@', ], ], ], ], 'verbs' => ['class' => VerbFilter::className(), 'actions' => ['logout' => ['post', 'get'], 'dashboard-only' => ['post', 'get'], ], ], ];
    }
    public function actions() {
        return ['error' => ['class' => 'yii\web\ErrorAction', ], 'captcha' => ['class' => 'yii\captcha\CaptchaAction', 'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null, ], ];
    }
    /* PAGES BLOCK */
    /*HOME ACTION*/
    public function actionIndex() {
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        $user = User::find()
            ->select(['count(id) as count', 'DATE_FORMAT(created_at, "%Y-%m-%d") as created'])
            ->where(['and', ['status' => '1'], ['is', 'role', null]])
            ->groupBy(['DATE_FORMAT(created_at, "%Y-%m-%d")'])
            ->asArray()
            ->all();
        $date = [];
        $count_user = [];
        if (!empty($user)){
            for($i = 0; $i < count($user); $i++){
                if(substr($user[$i]['created'],5,2) == date('m')){
                    array_push($date,$user[$i]['created']);
                    array_push($count_user,$user[$i]['count']);
                }
            }
        }
        $orders = AcMyLessons::find()
            ->select(['count(id) as count', 'DATE_FORMAT(create_date, "%Y-%m-%d") as created'])
            ->where(['and', ['status' => ['1','2','3']]])
            ->groupBy(['DATE_FORMAT(create_date, "%Y-%m-%d")'])
            ->asArray()
            ->all();
        $order_date = [];
        $count_order = [];
        if (!empty($orders)){
            for($i = 0; $i < count($orders); $i++){
                if(substr($orders[$i]['created'],5,2) == date('m')){
                    array_push($order_date,$orders[$i]['created']);
                    array_push($count_order,$orders[$i]['count']);
                }
            }
        }
        return $this->render('index',[
            'date' => $date,
            'count_user' => $count_user,
            'order_date' => $order_date,
            'count_order' => $count_order,
        ]);
    }
    public function actionQuestions() {
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        date_default_timezone_set("Asia/Yerevan");
        $post = Yii::$app->request->post();
        if ($post && $post['add']) {
            $question = new AcQuestionList();
            $question->load($post);
            $question->date_create = date('Y-m-d H:i:s');
            $question->save(false);
            $this->redirect(['questions', 'success' => 'true', 'id' => 'key' . $question->id]);
        }
        else if ($post && $post['edite']) {
            $question = AcQuestionList::findOne(['id' => intval($post['id']) ]);
            $question->load($post);
            $question->date_create = date('Y-m-d H:i:s');
            $question->save(false);
            $this->redirect(['questions', 'success' => 'true', 'id' => 'key' . $question->id]);
        }
        $questions = AcQuestionList::find()->orderBy(['order_num' => SORT_ASC])->all();
        return $this->render('questions', ['questions' => $questions]);

    }
    public function actionQuestion() {
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }

        $id = intval($_GET['id']);
        $post = Yii::$app->request->post();
        if ($post && $post['add']) {
            $question = new AcQuestionQuests();
            $question->load($post);
            $question->save(false);
            $this->redirect('question?id='.$id.'&success=true');
        }
        else if ($post && $post['edite']) {
            $question = AcQuestionQuests::findOne(['id' => intval($post['id']) ]);
            $question->load($post);
            $question->save(false);
            $this->redirect('question?id='.$id.'&success=true');
        }
        $answers = AcQuestionQuests::find()->where(['question_id'=>$id])->orderBy(['order_num' => SORT_ASC])->all();
        $question = AcQuestionList::findOne($id);
        return $this->render('question', ['answers' => $answers,'question'=>$question]);

    }
    public function actionAnswer() {
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        $id = intval($_GET['id']);
        $post = Yii::$app->request->post();
        if ($post && $post['add']) {
            $question = new AcQuestionAnswers();
            $question->load($post);
            $question->save(false);
            $this->redirect('answer?id='.$id.'&success=true');
        }
        elseif ($post && $post['edite']){
            $question = AcQuestionAnswers::findOne(['id' => intval($post['id']) ]);
            $question->load($post);
            $question->save(false);
            $this->redirect('answer?id='.$id.'&success=true');
        }
        $answers = AcQuestionAnswers::find()->where(['quest_id'=>$id])->orderBy(['order_num' => SORT_ASC])->all();
        $question = AcQuestionQuests::findOne($id);
        return $this->render('answer', ['answers' => $answers,'question'=>$question]);

    }
    /*CUSTOMERS PAGE ACTION EDITE|DELETE|CREATE|COPY*/
    public function actionCustomers() {
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        date_default_timezone_set("Asia/Yerevan");
        $post = Yii::$app->request->post();
        if ($post && $post['add']) {
            $exist_email = User::find()->where(['email' => $post['User']['email']])->exists();
            if ($exist_email){
                $this->redirect(['customers', 'success' => 'false']);
            }else {
                $user = new User();
                $user->load($post);
                $user->created_at = date('Y-m-d H:i:s');
                $user->updated_at = date('Y-m-d H:i:s');
                $user->password = Yii::$app->getSecurity()->generatePasswordHash($post['User']['password']);
                $user->auth_key = $this->generateRandomString();
                if (!empty($_FILES['img']) && $_FILES["img"]["name"]) {
                    $tmp_name = $_FILES["img"]["tmp_name"];
                    $name = time() . basename($_FILES["img"]["name"]);
                    move_uploaded_file($tmp_name, "web/uploads/$name");
                    $user->image = "web/uploads/$name";
                }
                if (!empty($_FILES['cv']) && $_FILES["cv"]["name"]) {
                    $tmp_name = $_FILES["cv"]["tmp_name"];
                    $name = time() . basename($_FILES["cv"]["name"]);
                    move_uploaded_file($tmp_name, "web/uploads/$name");
                    $user->cv = "web/uploads/$name";
                }
                $user->save(false);
                $this->redirect(['customers', 'success' => 'true', 'id' => 'key' . $user->id]);
            }
        }
        else if ($post && $post['edite']) {
            $user = User::findOne(['id' => intval($post['id'])]);
            $exist_email = User::find()
                ->where(['email' => $post['User']['email']])
                ->andWhere(['!=', 'id', $user->id])
                ->exists();
            if ($exist_email){
                $this->redirect(['customers', 'success' => 'false']);
            }else {
                $pass = $user->password;
                $user->load($post);
                $user->updated_at = date('Y-m-d H:i:s');
                $user->auth_key = $this->generateRandomString();
                if ($post['User']['password']) {
                    $user->password = Yii::$app->getSecurity()->generatePasswordHash($post['User']['password']);
                } else {
                    $user->password = $pass;
                }
                if (!empty($_FILES['img']) && $_FILES["img"]["name"]) {
                    $tmp_name = $_FILES["img"]["tmp_name"];
                    $name = time() . basename($_FILES["img"]["name"]);
                    move_uploaded_file($tmp_name, "web/uploads/$name");
                    $user->image = "web/uploads/$name";
                }
                if (!empty($_FILES['cv']) && $_FILES["cv"]["name"]) {
                    $tmp_name = $_FILES["cv"]["tmp_name"];
                    $name = time() . basename($_FILES["cv"]["name"]);
                    move_uploaded_file($tmp_name, "web/uploads/$name");
                    $user->cv = "web/uploads/$name";
                }
                $user->save(false);
                $this->redirect(['customers', 'success' => 'true', 'id' => 'key' . $user->id]);
            }
        }
        $page = intval($_GET['page']);
        $limit = 10;
        $offset = 0;
        if ($page) {
            $offset = $limit * $page;
        }
        if (!isset($_GET['search'])) {
            if ($page != 'all') {
                $users = User::find()->limit($limit)->offset($offset)->orderBy(['created_at' => SORT_ASC])->all();
            }
            else {
                $users = User::find()->orderBy(['created_at' => SORT_ASC])->all();
            }
        }
        else {
            switch (intval($_GET['type'])) {
                case 2:
                    $cond = ' username LIKE "%' . $_GET['search'] . '"';
                    break;
                case 1:
                    $cond = ' username LIKE "' . $_GET['search'] . '%"';
                    break;
                case 3:
                    $cond = ' username LIKE "%' . $_GET['search'] . '%" AND username NOT LIKE  "%' . $_GET['search'] . '" AND username NOT LIKE "' . $_GET['search'] . '%"';
                    break;
                default:
                    $cond = ' username LIKE "%' . $_GET['search'] . '%"';
                    break;
            }
            $users = User::find()->where($cond)->all();
        }

        $total = User::find()->count();
        return $this->render('customers', ['users' => $users, 'total' => $total]);
    }
    public function actionPartners() {
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        date_default_timezone_set("Asia/Yerevan");
        $post = Yii::$app->request->post();
        if ($post && $post['add']) {
            $partner = new AcPartners();
            $partner->load($post);
            if (!empty($_FILES['logo']) && $_FILES["logo"]["name"]) {
                $tmp_name = $_FILES["logo"]["tmp_name"];
                $name = time() . basename($_FILES["logo"]["name"]);
                move_uploaded_file($tmp_name, "web/uploads/$name");
                $partner->img = "web/uploads/$name";
            }
            if (!empty($_FILES['logo_black']) && $_FILES["logo_black"]["name"]) {
                $tmp_name = $_FILES["logo_black"]["tmp_name"];
                $name = time() . basename($_FILES["logo_black"]["name"]);
                move_uploaded_file($tmp_name, "web/uploads/$name");
                $partner->img_black = "web/uploads/$name";
            }
            $partner->save(false);
            $this->redirect(['partners', 'success' => 'true', 'id' => 'key' . $partner->id]);
        }
        else if ($post && $post['edite']) {
            $partner = AcPartners::findOne(['id' => intval($post['id']) ]);

            $partner->load($post);

            if (!empty($_FILES['logo']) && $_FILES["logo"]["name"]) {
                $tmp_name = $_FILES["logo"]["tmp_name"];
                $name = time() . basename($_FILES["logo"]["name"]);
                move_uploaded_file($tmp_name, "web/uploads/$name");
                $partner->img = "web/uploads/$name";
            }
            if (!empty($_FILES['logo_black']) && $_FILES["logo_black"]["name"]) {
                $tmp_name = $_FILES["logo_black"]["tmp_name"];
                $name = time() . basename($_FILES["logo_black"]["name"]);
                move_uploaded_file($tmp_name, "web/uploads/$name");
                $partner->img_black = "web/uploads/$name";
            }
            $partner->save(false);
            $this->redirect(['partners', 'success' => 'true', 'id' => 'key' . $partner->id]);
        }

        $partners = AcPartners::find()->orderBy(['order_num' => SORT_ASC])->all();
        return $this->render('partners', ['partners' => $partners]);
    }
    public function actionAnswers() {
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        date_default_timezone_set("Asia/Yerevan");
        $post = Yii::$app->request->post();
        if ($post && $post['add']) {
            $answer = new AcAnswers();
            $answer->load($post);

            $answer->save(false);
            $this->redirect(['answers', 'success' => 'true', 'id' => 'key' . $answer->id]);
        }
        else if ($post && $post['edite']) {
            $answer = AcAnswers::findOne(['id' => intval($post['id']) ]);
            $answer->load($post);
            $answer->save(false);
            $this->redirect(['answer', 'success' => 'true', 'id' => 'key' . $answer->id]);
        }
        $answers = AcAnswers::find()->orderBy(['order_num' => SORT_ASC])->all();
        return $this->render('answers', ['answers' => $answers]);
    }
    public function actionQuize() {
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        $quize = AcQuizeLog::find()->select('ac_quize_log.id as id,result,username,email,phone,user_id, name_am,ac_quize_log.status as status,ac_quize_log.create_date as date')
            ->leftJoin('ac_question_list','ac_question_list.id = ac_quize_log.question_id')
            ->orderBy(['ac_quize_log.order_num' => SORT_ASC])->asArray()->all();
        return $this->render('quize-log', ['quize' => $quize]);
    }
    public function actionGroups(){
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        date_default_timezone_set("Asia/Yerevan");
        $post = Yii::$app->request->post();
        if ($post && $post['add']) {
            $users = $post['AcGroups']['user_id'];
            $groups = new AcGroups();
            $groups->load($post);
            $groups->create_date = date('Y-m-d H:i:s');
            $groups->save(false);
            foreach ($users as $user){
                $user_groups_id = User::findOne(intval($user));
                if ($user_groups_id->groups_id == ''){
                    $user_groups_id->groups_id = $groups->id;
                }else{
                    $explode = explode(',',$user_groups_id->groups_id);
                    array_push($explode,$groups->id);//$groups->id
                    $implode = implode(',',$explode);
                    $user_groups_id->groups_id = $implode;
                }
                $user_groups_id->save(false);
            }
            $this->redirect(['groups', 'success' => 'true', 'id' => 'key' . $groups->id]);
        }
        elseif ($post && $post['edite']){
            $users = $post['AcGroups']['user_id'];
            $groups = AcGroups::findOne(['id' => intval($post['id']) ]);
            if ($groups->lesson_id != $post['AcGroups']['lesson_id']){
                $groups->lesson_count = 0;
            }
            $groups->lesson_id = $post['AcGroups']['lesson_id'];
            $groups->groups_name = $post['AcGroups']['groups_name'];
            $groups->action = $post['AcGroups']['action'];
            $groups->create_date = date('Y-m-d H:i:s');
            $groups->save(false);
            $delete_users = User::find()
                ->where(new \yii\db\Expression('FIND_IN_SET(:groupId, groups_id)'))
                ->addParams([':groupId' => $post['id']])
                ->all();
            if (!empty($delete_users)){
                foreach($delete_users as $delete_user){
                    if (!in_array($delete_user['id'],$users)){
                        $get_arr = explode(',',$delete_user['groups_id']);
                        $search = array_search($post['id'],$get_arr);
                        array_splice($get_arr,$search,1);
                        if (empty($get_arr)){
                            $delete_user->groups_id = null;
                        }else{
                            $implode = implode(',',$get_arr);
                            $delete_user->groups_id = $implode;
                        }
                        $delete_user->save(false);
                    }
                }
            }
            foreach ($users as $user){
                $user_groups_id = User::findOne(intval($user));
                $explode = explode(',',$user_groups_id->groups_id);
                if ($user_groups_id->groups_id == ''){
                    $user_groups_id->groups_id = $groups->id;
                }else{
                    if (!in_array($groups->id,$explode)){
                        array_push($explode,$groups->id);
                        $implode = implode(',',$explode);
                        $user_groups_id->groups_id = $implode;
                    }
                }
                $user_groups_id->save(false);
            }
            $this->redirect(['groups', 'success' => 'true', 'id' => 'key' . $groups->id]);
        }
        $groups = AcGroups::find()
            ->select([
                'ac_groups.id as id',
                'ac_lessons.lesson_name_am as lesson_name',
                'ac_groups.groups_name',
                'ac_groups.status as status',
                'ac_groups.action',
                'GROUP_CONCAT(user.username) as usernames',
            ])
            ->leftJoin('ac_lessons', 'ac_lessons.id = ac_groups.lesson_id')
            ->leftJoin('user', new \yii\db\Expression('FIND_IN_SET(ac_groups.id, user.groups_id) > 0'))
            ->groupBy('ac_groups.id')
            ->orderBy(['ac_groups.order_num' => SORT_ASC])
            ->asArray()
            ->all();
//        echo "<pre>";
//        var_dump($groups);
//        exit();
        $users = AcMyLessons::find()->select('user.id as user_id,username')
            ->leftJoin('user', 'user.id = ac_my_lessons.user_id')
            ->where(['ac_my_lessons.status' => '1'])
            ->groupBy('ac_my_lessons.user_id')
            ->asArray()
            ->all();
        $lessons = AcMyLessons::find()->select('ac_lessons.id as lesson_id, ac_lessons.lesson_name_am as lesson_name')
            ->leftJoin('ac_lessons','ac_lessons.id = ac_my_lessons.lessons_id')
            ->where(['ac_my_lessons.status' => '1'])
            ->groupBy('ac_my_lessons.lessons_id')
            ->asArray()
            ->all();
        return $this->render('groups',[
            'users' => $users,
            'lessons' => $lessons,
            'groups' => $groups,
        ]);
    }

    /*SITE PAGES PAGE ACTION EDITE|DELETE|CREATE|COPY*/
    public function actionBlog() {
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        date_default_timezone_set("Asia/Yerevan");
        $post = Yii::$app->request->post();
        if ($post && $post['add']) {
            $page = new AcBlog();
            $page->load($post);
            $page->create_date = date('Y-m-d H:i:s');
            $page->url = $this->transLateURRL($page->page_name_am);
            if (!empty($_FILES['img']) && $_FILES["img"]["name"]) {
                $tmp_name = $_FILES["img"]["tmp_name"];
                $name = time() . basename($_FILES["img"]["name"]);
                move_uploaded_file($tmp_name, "web/uploads/$name");
                $page->img = "web/uploads/$name";
            }
            $page->save(false);
            $this->redirect(['blog', 'success' => 'true', 'id' => 'key' . $page->id]);
        }
        else if ($post && $post['edite']) {
            $page = AcBlog::findOne(['id' => intval($post['id']) ]);
            $page->load($post);
            $page->create_date = date('Y-m-d H:i:s');
            $page->url = $this->transLateURRL($page->page_name_am);
            if (!empty($_FILES['img']) && $_FILES["img"]["name"]) {
                $tmp_name = $_FILES["img"]["tmp_name"];
                $name = time() . basename($_FILES["img"]["name"]);
                move_uploaded_file($tmp_name, "web/uploads/$name");
                $page->img = "web/uploads/$name";
            }
            $page->save(false);
            $this->redirect(['blog', 'success' => 'true', 'id' => 'key' . $page->id]);
        }
        $pages = AcBlog::find()->orderBy(['order_num' => SORT_ASC])->all();
        return $this->render('blog', ['pages' => $pages]);
    }
    public function actionLessons() {
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        date_default_timezone_set("Asia/Yerevan");
        $post = Yii::$app->request->post();
        if ($post && $post['add']) {
            $lesson = new AcLessons();
            $lesson->load($post);
            $lesson->create_date = date('Y-m-d H:i:s');
            $lesson->url = $this->transLateURRL($lesson->lesson_name_am);
            if (!empty($_FILES['img']) && $_FILES["img"]["name"]) {
                $tmp_name = $_FILES["img"]["tmp_name"];
                $name = time() . basename($_FILES["img"]["name"]);
                move_uploaded_file($tmp_name, "web/uploads/$name");
                $lesson->img = "web/uploads/$name";
            }
            if (!empty($_FILES['certificate_img']) && $_FILES["certificate_img"]["name"]) {
                $tmp_name = $_FILES["certificate_img"]["tmp_name"];
                $name = time() . basename($_FILES["certificate_img"]["name"]);
                move_uploaded_file($tmp_name, "web/uploads/$name");
                $lesson->certificate_img = "web/uploads/$name";
            }
            $lesson->save(false);
            $this->redirect(['lessons', 'success' => 'true', 'id' => 'key' . $lesson->id]);
        }
        else if ($post && $post['edite']) {
            $lesson = AcLessons::findOne(['id' => intval($post['id']) ]);
            $lesson->load($post);
            $lesson->create_date = date('Y-m-d H:i:s');
            $lesson->url = $this->transLateURRL($lesson->lesson_name_am);
            if (!empty($_FILES['img']) && $_FILES["img"]["name"]) {
                $tmp_name = $_FILES["img"]["tmp_name"];
                $name = time() . basename($_FILES["img"]["name"]);
                move_uploaded_file($tmp_name, "web/uploads/$name");
                $lesson->img = "web/uploads/$name";
            }
            if (!empty($_FILES['certificate_img']) && $_FILES["certificate_img"]["name"]) {
                $tmp_name = $_FILES["certificate_img"]["tmp_name"];
                $name = time() . basename($_FILES["certificate_img"]["name"]);
                move_uploaded_file($tmp_name, "web/uploads/$name");
                $lesson->certificate_img = "web/uploads/$name";
            }
            $lesson->save(false);
            $this->redirect(['lessons', 'success' => 'true', 'id' => 'key' . $lesson->id]);
        }
        $lessons = AcLessons::find()->orderBy(['order_num' => SORT_ASC])->all();
        return $this->render('lessons', ['lessons' => $lessons]);
    }
    public function actionVideoLessons(){
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        date_default_timezone_set("Asia/Yerevan");
        $id = intval($this->request->get('id'));
        $post = Yii::$app->request->post();
        if ($post && $post['add']) {
            $video_lesson = new AcVideoLessons();
            $video_lesson->load($post);
            if ($post['AcVideoLessons']['type'] == 0){
                preg_match('/(?:youtube\.com\/(?:watch\?v=|embed\/|live\/|shorts\/)|youtu\.be\/)([a-zA-Z0-9_-]{11})/',  $video_lesson->video, $matches);
                $videoId = $matches[1];
                $queryString = parse_url($video_lesson->video, PHP_URL_QUERY);
                parse_str($queryString, $queryParams);
                $embedUrl = "https://www.youtube.com/embed/" . $videoId;
                if (!empty($queryParams)) {
                    $embedUrl .= '?' . http_build_query($queryParams);
                }
                $video_lesson->video = $embedUrl;
            }else{
                if (!empty($_FILES['video']) && $_FILES["video"]["name"]) {
                    $tmp_name = $_FILES["video"]["tmp_name"];
                    $name = time() . basename($_FILES["video"]["name"]);
                    move_uploaded_file($tmp_name, "web/video_uploads/$name");
                    $video_lesson->video = "web/video_uploads/$name";
                }
            }
            $video_lesson->create_date = date('Y-m-d H:i:s');
            $video_lesson->save(false);
            $this->redirect('video-lessons?id='.$id.'&success=true');
        }
        else if ($post && $post['edite']) {
            $video_lesson = AcVideoLessons::findOne(['id' => intval($post['id']) ]);
            $video_lesson->load($post);
            if ($post['AcVideoLessons']['type'] == 0){
                preg_match('/(?:youtube\.com\/(?:watch\?v=|embed\/|live\/|shorts\/)|youtu\.be\/)([a-zA-Z0-9_-]{11})/',  $video_lesson->video, $matches);
                $videoId = $matches[1];
                $queryString = parse_url($video_lesson->video, PHP_URL_QUERY);
                parse_str($queryString, $queryParams);
                $embedUrl = "https://www.youtube.com/embed/" . $videoId;
                if (!empty($queryParams)) {
                    $embedUrl .= '?' . http_build_query($queryParams);
                }
                $video_lesson->video = $embedUrl;
            }else{
                if (!empty($_FILES['video']) && $_FILES["video"]["name"]) {
                    $tmp_name = $_FILES["video"]["tmp_name"];
                    $name = time() . basename($_FILES["video"]["name"]);
                    move_uploaded_file($tmp_name, "web/video_uploads/$name");
                    $video_lesson->video = "web/video_uploads/$name";
                }
            }
            $video_lesson->create_date = date('Y-m-d H:i:s');
            $video_lesson->save(false);
            $this->redirect('video-lessons?id='.$id.'&success=true');
        }
        $video = AcVideoLessons::find()->where(['lesson_id' => $id])
            ->orderBy(['order_num' => SORT_ASC])
            ->all();
        $lesson_number = AcLessons::findOne($id);
        $number_video = AcVideoLessons::find()->select('lesson_number')->where(['and',['status' => '1'],['lesson_id' => $id]])
            ->asArray()
            ->all();
        $new_number = [];
        for ($k = 0; $k < count($number_video); $k++){
            array_push($new_number,$number_video[$k]['lesson_number']);
        }
        return $this->render('video-lesson',[
            'video' => $video,
            'lesson_number' => $lesson_number,
            'new_number' => $new_number,
        ]);
    }
    public function actionVideoType(){
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        $type = intval($_GET['type']);
        return $this->renderAjax('input-type',[
            'type' => $type
        ]);
    }
    public function actionVideoUpdateType(){
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        $type = intval($_GET['type']);
        return $this->renderAjax('input-type',[
            'type' => $type
        ]);
    }
    public function actionSubscribers(){
        // Harut
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        date_default_timezone_set("Asia/Yerevan");
        $post = Yii::$app->request->post();
        if ($post && $post['add']) {
            $subscribers = new AcSubscribers();
            $subscribers->load($post);
            $subscribers->create_date = date('Y-m-d H:i:s');
            $subscribers->save(false);
            $this->redirect(['subscribers', 'success' => 'true', 'id' => 'key' . $subscribers->id]);
        }
        else if ($post && $post['edite']) {
            $subscribers = AcSubscribers::findOne(['id' => intval($post['id']) ]);
            $subscribers->load($post);
            $subscribers->create_date = date('Y-m-d H:i:s');
            $subscribers->save(false);
            $this->redirect(['subscribers', 'success' => 'true', 'id' => 'key' . $subscribers->id]);
        }
        $subscribers = AcSubscribers::find()->orderBy(['order_num' => SORT_ASC])->all();
        return $this->render('subscribers', ['subscribers' => $subscribers]);
    }
    public function actionRating(){
        $rating = AcRating::find()->with(['lessons','userName'])->orderBy(['create_date' => SORT_DESC])->all();
        return $this->render('rating',
            ['rating' => $rating]
        );

    }
    public function actionTutors(){
        // Harut
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        date_default_timezone_set("Asia/Yerevan");
        $post = Yii::$app->request->post();
        if ($post && $post['add']) {
            $tutor = new AcTutors();
            $tutor->load($post);
            $tutor->create_date = date('Y-m-d H:i:s');
            if (!empty($_FILES['img']) && $_FILES["img"]["name"]) {
                $tmp_name = $_FILES["img"]["tmp_name"];
                $name = time() . basename($_FILES["img"]["name"]);
                move_uploaded_file($tmp_name, "web/uploads/$name");
                $tutor->img = "web/uploads/$name";
            }
            $tutor->save(false);
            $this->redirect(['tutors', 'success' => 'true', 'id' => 'key' . $tutor->id]);
        }
        else if ($post && $post['edite']) {
            $tutor = AcTutors::findOne(['id' => intval($post['id']) ]);
            $tutor->load($post);
            $tutor->create_date = date('Y-m-d H:i:s');
            if (!empty($_FILES['img']) && $_FILES["img"]["name"]) {
                $tmp_name = $_FILES["img"]["tmp_name"];
                $name = time() . basename($_FILES["img"]["name"]);
                move_uploaded_file($tmp_name, "web/uploads/$name");
                $tutor->img = "web/uploads/$name";
            }
            $tutor->save(false);
            $this->redirect(['tutors', 'success' => 'true', 'id' => 'key' . $tutor->id]);
        }
        $tutors = AcTutors::find()->orderBy(['order_num' => SORT_ASC])->all();
        $lessons = AcLessons::find()->where(['status' => '1'])->all();
        return $this->render('tutors', ['tutors' => $tutors, 'lessons' => $lessons]);
    }
    public function actionAlumni(){
        // Harut
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        date_default_timezone_set("Asia/Yerevan");
        $post = Yii::$app->request->post();
        if ($post && $post['add']) {
            $alumni = new AcAlumni();
            $alumni->load($post);
            $alumni->create_date = date('Y-m-d H:i:s');
            if (!empty($_FILES['img']) && $_FILES["img"]["name"]) {
                $tmp_name = $_FILES["img"]["tmp_name"];
                $name = time() . basename($_FILES["img"]["name"]);
                move_uploaded_file($tmp_name, "web/uploads/$name");
                $alumni->img = "web/uploads/$name";
            }
            $alumni->save(false);
            $this->redirect(['alumni', 'success' => 'true', 'id' => 'key' . $alumni->id]);
        }
        else if ($post && $post['edite']) {
            $alumni = AcAlumni::findOne(['id' => intval($post['id']) ]);
            $alumni->load($post);
            $alumni->create_date = date('Y-m-d H:i:s');
            if (!empty($_FILES['img']) && $_FILES["img"]["name"]) {
                $tmp_name = $_FILES["img"]["tmp_name"];
                $name = time() . basename($_FILES["img"]["name"]);
                move_uploaded_file($tmp_name, "web/uploads/$name");
                $alumni->img = "web/uploads/$name";
            }
            $alumni->save(false);
            $this->redirect(['alumni', 'success' => 'true', 'id' => 'key' . $alumni->id]);
        }
        $alumni = AcAlumni::find()->orderBy(['order_num' => SORT_ASC])->all();
        return $this->render('alumni', ['alumni' => $alumni]);
    }
    public function actionHaveQuestions(){
        // Mariam
        date_default_timezone_set("Asia/Yerevan");
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        $post = Yii::$app->request->post();
        if ($post && $post['edite']) {
            $have_questions = AcHaveQuestions::findOne(['id' => intval($post['id']) ]);
            $have_questions->load($post);
            if ($have_questions->checked_answer == 0){
                $have_questions->answer_admin_id = null;
            }
            $have_questions->create_date = date('Y-m-d H:i:s');
            $have_questions->save(false);
            $this->redirect(['have-questions', 'success' => 'true', 'id' => 'key' . $have_questions->id]);
        }
        $have_questions = AcHaveQuestions::find()->with(['adminName'])->orderBy(['order_num' => SORT_ASC])->all();
        return $this->render('have-questions', ['have_questions' => $have_questions]);
    }
    public function actionOrders(){
        date_default_timezone_set("Asia/Yerevan");
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        $post = Yii::$app->request->post();
        if ($post && $post['add']) {
            $users = $post['AcOrders']['user_id'];
            foreach ($users as $user){
                $orders_exist = AcOrdersItems::find()
                    ->leftJoin('ac_orders', 'ac_orders.id = ac_orders_items.order_id')
                    ->where(['and',['ac_orders.status' => '1'],['ac_orders_items.status' => '1'],
                        ['ac_orders.user_id' => $user],['ac_orders_items.lesson_id' => intval($post['lesson_id'])]])->exists();
                if (!$orders_exist){
                    $orders = new AcOrders();
                    $orders->user_id = $user;
                    $orders->total_price = intval($post['price']);
                    $orders->create_date = date('Y-m-d H:i:s');
                    $orders->save(false);
                    $order_items = new AcOrdersItems();
                    $order_items->order_id = $orders->id;
                    $order_items->lesson_id = intval($post['lesson_id']);
                    $order_items->price = intval($post['price']);
                    $order_items->create_date = date('Y-m-d H:i:s');
                    $order_items->save(false);
                }
                $lesson_exist = AcMyLessons::find()->where(['and',['status' => 1],['user_id' => $user],['lessons_id' => intval($post['lesson_id'])]])->exists();
                if (!$lesson_exist){
                    $new_lesson = new AcMyLessons();
                    $new_lesson->order_id = $orders->id;
                    $new_lesson->user_id = $user;
                    $new_lesson->lessons_id = intval($post['lesson_id']);
                    $new_lesson->create_date = date('Y-m-d H:i:s');
                    $new_lesson->save(false);
                }
            }
            $this->redirect(['orders', 'success' => 'true', 'id' => 'key' . $orders->id]);
        }elseif ($post && $post['edite']) {
//            echo "<pre>";
//            var_dump($post);
//            exit();
            $my_lessons = AcMyLessons::find()->where(['and',['status' => 1],['order_id' => intval($post['id'])]])->all();
            if (!empty($my_lessons)){
                foreach ($my_lessons as $item){
                    $item->delete();
                }
            }
            $delete_order_items = AcOrdersItems::find()->where(['order_id' => intval($post['id'])])->all();
            if (!empty($delete_order_items)) {
                foreach ($delete_order_items as $item){
                    $item->delete();
                }
            }
            $lessons = $post['lesson_id'];
            $price_arr = [];
            foreach ($lessons as $lesson_id){
                $lessons_price = AcLessons::findOne(intval($lesson_id));
                array_push($price_arr,$lessons_price->price);
                $order_items = new AcOrdersItems();
                $order_items->order_id = intval($post['id']);
                $order_items->lesson_id = intval($lesson_id);
                $order_items->price = $lessons_price->price;
                $order_items->create_date = date('Y-m-d H:i:s');
                $order_items->save(false);
                $new_lesson = new AcMyLessons();
                $new_lesson->order_id = intval($post['id']);
                $new_lesson->user_id = intval($post['AcOrders']['user_id']);
                $new_lesson->lessons_id = intval($lesson_id);
                $new_lesson->create_date = date('Y-m-d H:i:s');
                $new_lesson->save(false);
            }
            $orders = AcOrders::findOne(['id' => intval($post['id']) ]);
            $orders->total_price = array_sum($price_arr);
            $orders->create_date = date('Y-m-d H:i:s');
            $orders->save(false);
            $this->redirect(['orders', 'success' => 'true', 'id' => 'key' . $orders->id]);
        }
        $lessons = AcLessons::find()->select('id,lesson_name_am as lesson_name')->where(['status' => '1'])->asArray()->all();
        $users = User::find()->select('id,username')->where(['and',['status' => '1'],['role' => null]])->asArray()->all();
        $orders = AcOrders::find()->with('username')->orderBy(['order_num' => SORT_ASC])->all();
        return $this->render('orders',[
            'orders' => $orders,
            'lessons' => $lessons,
            'users' => $users,
        ]);
    }
    public function actionOrderItems(){
        date_default_timezone_set("Asia/Yerevan");
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        $id = intval($this->request->get('id'));
        $post = Yii::$app->request->post();
        if ($post && $post['edite']) {
            $order_items = AcOrdersItems::findOne(['id' => intval($post['id']) ]);
            $order_items->load($post);
            $order_items->create_date = date('Y-m-d H:i:s');
            $order_items->save(false);
            $price = AcOrdersItems::find()->select('price')->where(['status' => '1'])->andWhere(['order_id' => $order_items->order_id])->asArray()->all();
            $prices = array_column($price, 'price');
            $prices = array_sum($prices);
            $orders = AcOrders::findOne(['id' => $order_items->order_id]);
            $orders->total_price = $prices;
            $orders->create_date = date('Y-m-d H:i:s');
            if ($orders->total_price == 0){
                $orders->status = 0;
            }else{
                $orders->status = 1;
            }
            $orders->save(false);
            $this->redirect(['orders', 'success' => 'true', 'id' => 'key' . $order_items->id]);
        }
        $order_items = AcOrdersItems::find()->with('lesson')->where(['order_id' => $id])->orderBy(['order_num' => SORT_ASC])->all();
        return $this->render('order-items',[
            'order_items' => $order_items
        ]);
    }

    public function actionCertificate(){
        // Harut
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        date_default_timezone_set("Asia/Yerevan");
        $post = Yii::$app->request->post();
        if ($post && $post['add']) {
            if (!empty($post['AcCertificate']['user_id'])){
                foreach ($post['AcCertificate']['user_id'] as $item){
                    $certificate_exist = AcCertificate::find()
                        ->where(['and',['user_id' => intval($item)],['lesson_id' => intval($post['AcCertificate']['lesson_id'])]])
                        ->exists();
                    if(!$certificate_exist){
                    $certificate = new AcCertificate();
                    $certificate->user_id = intval($item);
                    $certificate->lesson_id = intval($post['AcCertificate']['lesson_id']);
                    $certificate->create_date = date('Y-m-d H:i:s');
                        if (!empty($_FILES['img']) && $_FILES["img"]["name"]) {
                            $tmp_name = $_FILES["img"]["tmp_name"];
                            $name = time() . basename($_FILES["img"]["name"]);
                            move_uploaded_file($tmp_name, "web/uploads/$name");
                            $certificate->img = "web/uploads/$name";
                            $certificate->save(false);
                        }
                    }
                }
            }
            $this->redirect(['certificate', 'success' => 'true', 'id' => 'key' . $certificate->id]);
        }
        else if ($post && $post['edite']) {
            $certificate = AcCertificate::findOne(['id' => intval($post['id']) ]);
            $certificate->load($post);
            $certificate->create_date = date('Y-m-d H:i:s');
            if (!empty($_FILES['img']) && $_FILES["img"]["name"]) {
                $tmp_name = $_FILES["img"]["tmp_name"];
                $name = time() . basename($_FILES["img"]["name"]);
                move_uploaded_file($tmp_name, "web/uploads/$name");
                $certificate->img = "web/uploads/$name";
            }
            $certificate->save(false);
            $this->redirect(['certificate', 'success' => 'true', 'id' => 'key' . $certificate->id]);
        }
        $certificate = AcCertificate::find()->with(['userName','lessons'])->orderBy(['order_num' => SORT_ASC])->all();
        $lessons = AcLessons::find()->where(['status' => '1'])->all();
        $alumni = User::find()->select('user.id as user_id,username,')
            ->leftJoin('ac_my_lessons','ac_my_lessons.user_id = user.id')
            ->where(['and',['user.status' => '1'],['role' => null],['ac_my_lessons.status' => ['2','3']]])
            ->groupBy('ac_my_lessons.user_id')
            ->asArray()
            ->all();
        return $this->render('certificate', ['certificate' => $certificate,'lessons' => $lessons,'alumni' => $alumni]);
    }
    public function actionInfo(){
        // Harut
        date_default_timezone_set("Asia/Yerevan");
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        $post = Yii::$app->request->post();
        if ($post && $post['edite']) {
            $info = AcInfo::findOne(['id' => intval($post['id']) ]);
            $info->load($post);
            $info->create_date = date('Y-m-d H:i:s');
            if (!empty($_FILES['img']) && $_FILES["img"]["name"]) {
                $tmp_name = $_FILES["img"]["tmp_name"];
                $name = time() . basename($_FILES["img"]["name"]);
                move_uploaded_file($tmp_name, "web/uploads/$name");
                $info->site_logo = "web/uploads/$name";
                $info->save(false);
            }
            $info->save(false);
            $this->redirect(['info', 'success' => 'true', 'id' => 'key' . $info->id]);
        }
        $info = AcInfo::find()->all();
        return $this->render('info', ['info' => $info]);
    }
    public function actionApply(){
        // Harut
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        $apply_now = AcApplyNow::find()->with('lesson')->orderBy(['order_num' => SORT_ASC])->all();
        return $this->render('apply-now', ['apply_now' => $apply_now]);
    }
    public function actionCallback(){
        // Harut
        date_default_timezone_set("Asia/Yerevan");
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        $post = Yii::$app->request->post();
        if ($post && $post['edite']) {
            $call_back = AcCallback::findOne(['id' => intval($post['id']) ]);
            $call_back->load($post);
            if ($call_back->checked_answer == 0){
                $call_back->answer_admin_id = null;
            }
            $call_back->create_date = date('Y-m-d H:i:s');
            $call_back->save(false);
            $this->redirect(['callback', 'success' => 'true', 'id' => 'key' . $call_back->id]);
        }
        $call_back = AcCallback::find()->with(['courses', 'adminName'])->orderBy(['order_num' => SORT_ASC])->all();
        return $this->render('callback', ['call_back' => $call_back]);
    }
    public function actionReviews() {
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        date_default_timezone_set("Asia/Yerevan");
        $post = Yii::$app->request->post();
        if ($post && $post['add']) {
            $review = new AcReviews();
            $review->load($post);
            $review->create_date = date('Y-m-d H:i:s');
            $review->save(false);
            $this->redirect(['reviews', 'success' => 'true', 'id' => 'key' . $review->id]);
        }
        else if ($post && $post['edite']) {
            $review = AcReviews::findOne(['id' => intval($post['id']) ]);
            $review->load($post);
            $review->create_date = date('Y-m-d H:i:s');
            $review->save(false);
            $this->redirect(['reviews', 'success' => 'true', 'id' => 'key' . $review->id]);
        }
        $reviews = AcReviews::find()->orderBy(['order_num' => SORT_ASC])->all();
        return $this->render('reviews', ['reviews' => $reviews]);
    }

    /*Texts PAGE ACTION EDITE|DELETE|CREATE|COPY*/
    public function actionTexts() {
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        $post = Yii::$app->request->post();
        if ($post && $post['edite']) {
            $text = Texts::findOne(['id' => intval($post['id']) ]);
            $text->load($post);
            $text->save(false);
            $this->redirect(['texts', 'success' => 'true','page'=>$_GET['page'], 'id' => 'key' . $text->id]);
        }
        $page = $_GET['page'];
        $limit = 10;
        $offset = 0;
        $cond = [];
        if ($page) {
            $offset = $limit * $page;
        }
        $sql = '';
        $cond = '';
        if(isset($_GET['search'])){
            switch (intval($_GET['type'])) {
                case 2:
                    $cond = ' text_am LIKE "%' . $_GET['search'] . '"';
                    break;
                case 1:
                    $cond = ' text_am LIKE "' . $_GET['search'] . '%"';
                    break;
                case 3:
                    $cond = ' text_am LIKE "%' . $_GET['search'] . '%" AND text_am NOT LIKE  "%' . $_GET['search'] . '" AND text_am NOT LIKE "' . $_GET['search'] . '%"';
                    break;
                default:
                    $cond = ' text_am LIKE "%' . $_GET['search'] . '%"';
                    break;
            }
        }
        if( $page != 'all') {
            $texts = Texts::find()->andWhere($cond)->limit($limit)->offset($offset)->orderBy(['id' => SORT_DESC])->all();
            $total = Texts::find()->andWhere($cond)->count();
        } else {
            $texts = Texts::find()->andWhere($cond)->orderBy(['id' => SORT_DESC])->all();
            $total = Texts::find()->andWhere($cond)->count();
        }
        return $this->render('texts', ['texts' => $texts, 'total' => $total]);
    }


    /*SETTINGS PAGE ACTION EDITE|DELETE|CREATE|COPY*/
    public function actionSettings() {
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        date_default_timezone_set("Asia/Yerevan");
        $post = Yii::$app->request->post();
        if ($post && $post['edite']) {
            $user = User::findOne(intval($post['id']));
            $exist_email = User::find()
                ->where(['email' => $post['User']['email']])
                ->andWhere(['!=', 'id', $user->id])
                ->exists();
            if ($exist_email){
                $this->redirect(['settings', 'success' => 'false']);
            }else{
                $pass = $user->password;
                $user->load($post);
                $user->updated_at = date('Y-m-d H:i:s');
                $user->auth_key = $this->generateRandomString();
                if ($post['User']['password']) {
                    $user->password = Yii::$app->getSecurity()->generatePasswordHash($post['User']['password']);
                } else {
                    $user->password = $pass;
                }
                $user->save(false);
                $this->redirect(['settings', 'success' => 'true', 'id' => 'key'.$user->id]);
            }
        }
        else if ($post && $post['add']) {
            $exist_email = User::find()->where(['email' => $post['User']['email']])->exists();
            if ($exist_email){
                $this->redirect(['settings', 'success' => 'false']);
            }else{
                $user = new User();
                $user->load($post);
                $user->created_at = date('Y-m-d H:i:s');
                $user->updated_at = date('Y-m-d H:i:s');
                $user->password = Yii::$app->getSecurity()->generatePasswordHash($user->password);
                $user->auth_key = $this->generateRandomString();
                $user->save(false);
                $this->redirect(['settings', 'success' => 'true', 'id' => 'key'.$user->id]);
            }
        }
        $users = Users::find()->where(['NOT', ['role' => null]])->all();
        return $this->render('settings', ['users' => $users]);
    }

    public function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }




    /* EDITE BLOCK */


    public function actionTextEdite() {
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        $id = intval($_GET['id']);
        $text = Texts::findOne(['id' => $id]);
        return $this->renderAjax('text-edite-popup', ['text' => $text]);
    }

    public function actionBlogEdite() {
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        $id = intval($_GET['id']);
        $page = AcBlog::findOne(['id' => $id]);
        return $this->renderAjax('page-edite-popup', ['page' => $page]);
    }
    public function actionQuestionEdite() {
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        $id = intval($_GET['id']);
        $question = AcQuestionQuests::findOne(['id' => $id]);
        return $this->renderAjax('questionquest-edite-popup', ['question' => $question]);
    }
    public function actionPartnerEdite() {
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        $id = intval($_GET['id']);
        $partner = AcPartners::findOne(['id' => $id]);
        return $this->renderAjax('partner-edite-popup', ['partner' => $partner]);
    }
    public function actionCustomerEdite() {
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        $id = intval($_GET['id']);
        $user = User::findOne(['id' => $id]);
        return $this->renderAjax('customers-edite-popup', ['user' => $user]);
    }
    public function actionLessonEdite() {
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        $id = intval($_GET['id']);
        $lesson = AcLessons::findOne(['id' => $id]);
        return $this->renderAjax('lesson-edite-popup', ['lesson' => $lesson]);
    }
    public function actionChooseLesson() {
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        $id = intval($_GET['id']);
        $lesson_price = AcLessons::findOne($id);
            return $this->renderAjax('price-lesson-popup',[
                'lesson_price' => $lesson_price
            ]);
    }
    public function actionVideoEdite() {
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        $id = intval($_GET['id']);
        $video = AcVideoLessons::findOne(['id' => $id]);
        $lesson_number = AcLessons::findOne($video->lesson_id);
        $number_video = AcVideoLessons::find()->select('lesson_number')->where(['and',['status' => '1'],['lesson_id' => $video->lesson_id]])->asArray()->all();
        $new_number = [];
        for ($k = 0; $k < count($number_video); $k++){
            array_push($new_number,$number_video[$k]['lesson_number']);
        }
        return $this->renderAjax('video-edite-popup', ['video' => $video,'lesson_number' => $lesson_number, 'new_number' => $new_number]);
    }

    public function actionInfoEdite() {
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        $id = intval($_GET['id']);
        $info = AcInfo::findOne(['id' => $id]);
        return $this->renderAjax('info-edite-popup', ['info' => $info]);
    }
    public function actionSubscribersEdite() {
        // Harut
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        $id = intval($_GET['id']);
        $subscribers = AcSubscribers::findOne(['id' => $id]);
        return $this->renderAjax('subscribers-edite-popup', ['subscribers' => $subscribers]);
    }
    public function actionCategoryEdite() {
        // Harut
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        $id = intval($_GET['id']);
        $questions = AcQuestionList::findOne(['id' => $id]);
        return $this->renderAjax('questionslist-edite-popup', ['questions' => $questions]);
    }
    public function actionAlumniEdite() {
        // Harut
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        $id = intval($_GET['id']);
        $alumni = AcAlumni::findOne(['id' => $id]);
        return $this->renderAjax('alumni-edite-popup', ['alumni' => $alumni]);
    }
    public function actionOrderItemsEdite() {
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        $id = intval($_GET['id']);
        $order_items = AcOrdersItems::find()->with('lesson')->where(['id' => $id])->one();
        return $this->renderAjax('order-items-edite-popup', ['order_items' => $order_items]);
    }
    public function actionOrdersEdite() {
        // Harut
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        $id = intval($_GET['id']);
        $orders = AcOrders::find()->with('username')->where(['id' => $id])->one();
        $lessons = AcLessons::find()->select('ac_lessons.id as lesson_id, ac_lessons.lesson_name_am as lesson_name')
            ->where(['ac_lessons.status' => '1'])
            ->asArray()
            ->all();
        $lessons_id = AcOrdersItems::find()->select('id,lesson_id')->where(['order_id' => $id])
            ->andWhere(['status' => '1'])
            ->asArray()
            ->all();
        $lessons_arr = [];
        for ($k = 0; $k < count($lessons_id); $k++){
            array_push($lessons_arr, $lessons_id[$k]['lesson_id']);
        }
        return $this->renderAjax('orders-edite-popup', [
            'orders' => $orders,
            'lessons' => $lessons,
            'lessons_arr' => $lessons_arr,
        ]);
    }
    public function actionGroupsEdite() {
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        $id = intval($_GET['id']);
        $groups = AcGroups::findOne(['id' => $id]);
        $users = AcMyLessons::find()->select('user.id as user_id, username, groups_id')
            ->leftJoin('user', 'user.id = ac_my_lessons.user_id')
            ->where(['ac_my_lessons.status' => '1'])
            ->groupBy('ac_my_lessons.user_id')
            ->asArray()
            ->all();
        $lessons = AcMyLessons::find()->select('ac_lessons.id as lesson_id, ac_lessons.lesson_name_am as lesson_name')
            ->leftJoin('ac_lessons','ac_lessons.id = ac_my_lessons.lessons_id')
            ->where(['ac_my_lessons.status' => '1'])
            ->andWhere(['ac_my_lessons.lessons_id' => $groups->lesson_id])
            ->groupBy('ac_my_lessons.lessons_id')
            ->asArray()
            ->all();
        return $this->renderAjax('groups-edite-popup', [
                'groups' => $groups,
                'users' => $users,
                'lessons' => $lessons,
            ]);
    }
    public function actionCertificateEdite() {
        // Harut
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        $id = intval($_GET['id']);
        $certificate = AcCertificate::find()->with('userName')->where(['id' => $id])->one();
        $lessons = AcLessons::find()->where(['status' => '1'])->all();
        $alumni = User::find()->select('user.id as user_id,username,')
            ->leftJoin('ac_my_lessons','ac_my_lessons.user_id = user.id')
            ->where(['and',['role' => null],['ac_my_lessons.status' => ['2','3']]])
            ->groupBy('ac_my_lessons.user_id')
            ->asArray()
            ->all();
        return $this->renderAjax('certificate-edite-popup', ['certificate' => $certificate, 'lessons' => $lessons, 'alumni' => $alumni]);
    }
    public function actionHaveQuestionsEdite() {
        // Mariam
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        $id = intval($_GET['id']);
        $have_questions = AcHaveQuestions::findOne(['id' => $id]);
        $admin = User::find()->where(['and',['status' => '1'],['not', ['role' => null]]])->all();
        return $this->renderAjax('have-questions-edite-popup', ['have_questions' => $have_questions, 'admin' => $admin]);
    }
    public function actionCallbackEdite() {
        // Harut
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        $id = intval($_GET['id']);
        $callback = AcCallback::findOne(['id' => $id]);
        $lessons = AcLessons::find()->where(['status' => '1'])->all();
        $admin = User::find()->where(['and',['status' => '1'],['not', ['role' => null]]])->all();
        return $this->renderAjax('callback-edite-popup', ['callback' => $callback, 'lessons' => $lessons, 'admin' => $admin]);
    }
    public function actionTutorsEdite() {
        // Harut
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        $id = intval($_GET['id']);
        $tutors = AcTutors::findOne(['id' => $id]);
        $lessons = AcLessons::find()->all();
        return $this->renderAjax('tutors-edite-popup', ['tutors' => $tutors, 'lessons' => $lessons]);
    }
    public function actionAnswerhthEdite() {
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        $id = intval($_GET['id']);
        $answer = AcAnswers::findOne(['id' => $id]);
        return $this->renderAjax('answer-edite-popup', ['answer' => $answer]);
    }
    public function actionAnswerEdite() {
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        $id = intval($_GET['id']);
        $answer = AcQuestionAnswers::findOne(['id' => $id]);
        return $this->renderAjax('questanswer-edite-popup', ['answer' => $answer]);
    }
    public function actionReviewEdite() {
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        $id = intval($_GET['id']);
        $review = AcReviews::findOne(['id' => $id]);
        return $this->renderAjax('review-edite-popup', ['review' => $review]);
    }
    public function actionUserEdite() {
        if (Yii::$app->user->isGuest) {
            $this->redirect(['admin/login']);
        }
        $id = intval($_GET['id']);
        $user = User::findOne(['id' => $id]);
        return $this->renderAjax('settings-edite-popup', ['user' => $user]);
    }

      /* DISABLE BLOCK */

    public function actionPartnerDisable() {
        $id = intval($_GET['id']);
        $partner = AcPartners::findOne(['id' => $id]);
        if ($partner->status) {
            $partner->status = 0;
        }
        else {
            $partner->status = 1;
        }
        $partner->save(false);
        return true;
    }
    public function actionCustomerDisable() {
        $id = intval($_GET['id']);
        $user = User::findOne(['id' => $id]);
        if ($user->status) {
            $user->status = 0;
        }
        else {
            $user->status = 1;
        }
        $user->save(false);
        return true;
    }
    public function actionCategoryDisable() {
        $id = intval($_GET['id']);
        $quest_list = AcQuestionList::findOne(['id' => $id]);
        if ($quest_list->status) {
            $quest_list->status = 0;
        }
        else {
            $quest_list->status = 1;
        }

        $quest_list->save(false);
        return true;
    }
    public function actionQuestionsDisable() {
        $id = intval($_GET['id']);
        $questions = AcQuestionList::findOne(['id' => $id]);
        if ($questions->status) {
            $questions->status = 0;
        }
        else {
            $questions->status = 1;
        }

        $questions->save(false);
        return true;
    }
    public function actionAnswerhthDisable() {
        $id = intval($_GET['id']);
        $answer = AcAnswers::findOne(['id' => $id]);
        if ($answer->status) {
            $answer->status = 0;
        }
        else {
            $answer->status = 1;
        }

        $answer->save(false);
        return true;
    }
    public function actionAnswerDisable() {
        $id = intval($_GET['id']);
        $answer = AcQuestionAnswers::findOne(['id' => $id]);
        if ($answer->status) {
            $answer->status = 0;
        }
        else {
            $answer->status = 1;
        }

        $answer->save(false);
        return true;
    }
    public function actionLessonDisable() {
        $id = intval($_GET['id']);
        $lesson = AcLessons::findOne(['id' => $id]);
        if ($lesson->status) {
            $lesson->status = 0;
        }
        else {
            $lesson->status = 1;
        }

        $lesson->save(false);
        return true;
    }
    public function actionVideoDisable() {
        $id = intval($_GET['id']);
        $lesson = AcVideoLessons::findOne(['id' => $id]);
        if ($lesson->status) {
            $lesson->status = 0;
        }
        else {
            $lesson->status = 1;
        }

        $lesson->save(false);
        return true;
    }
    public function actionSubscribersDisable() {
        // Harut
        $id = intval($_GET['id']);
        $subscribers = AcSubscribers::findOne(['id' => $id]);
        if ($subscribers->status) {
            $subscribers->status = 0;
        }
        else {
            $subscribers->status = 1;
        }

        $subscribers->save(false);
        return true;
    }
    public function actionTutorsDisable() {
        // Harut
        $id = intval($_GET['id']);
        $tutors = AcTutors::findOne(['id' => $id]);
        if ($tutors->status) {
            $tutors->status = 0;
        }
        else {
            $tutors->status = 1;
        }

        $tutors->save(false);
        return true;
    }
    public function actionAlumniDisable() {
        // Harut
        $id = intval($_GET['id']);
        $tutors = AcAlumni::findOne(['id' => $id]);
        if ($tutors->status) {
            $tutors->status = 0;
        }
        else {
            $tutors->status = 1;
        }

        $tutors->save(false);
        return true;
    }
    public function actionOrdersDisable() {
        // Harut
        $id = intval($_GET['id']);
        $orders = AcOrders::findOne(['id' => $id]);
        if ($orders->status) {
            $orders->status = 0;
            $my_lessons = AcMyLessons::find()->where(['and',['order_id' => $id],['status' => '1']])->all();
            foreach ($my_lessons as $lesson){
                $lesson->status = 0;
                $lesson->save(false);
            }
        }
        else {
            $orders->status = 1;
            $my_lessons = AcMyLessons::find()->where(['and',['order_id' => $id],['status' => '0']])->all();
            foreach ($my_lessons as $lesson){
                $lesson->status = 1;
                $lesson->save(false);
            }
        }

        $orders->save(false);
        return true;
    }
    public function actionOrderItemsDisable() {
        $id = intval($_GET['id']);
        $order_items = AcOrdersItems::findOne(['id' => $id]);
        $orders = AcOrders::findOne($order_items->order_id);
        if ($order_items->status) {
            $my_lesson = AcMyLessons::findOne([
                'order_id' => $order_items->order_id,
                'user_id' => $orders->user_id,
                'lessons_id' => $order_items->lesson_id,
                'status' => '1'
            ]);
            $my_lesson->status = 0;
            $my_lesson->save(false);
            $order_items->status = 0;
        }
        else {
            $my_lesson = AcMyLessons::findOne(['order_id' => $order_items->order_id,'user_id' => $orders->user_id,'lessons_id' => $order_items->lesson_id,'status' => '0']);
            $my_lesson->status = 1;
            $my_lesson->save(false);
            $order_items->status = 1;
        }
        $order_items->save(false);
        $price = AcOrdersItems::find()->select('price')->where(['status' => '1'])->andWhere(['order_id' => $order_items->order_id])->asArray()->all();
        $prices = array_column($price, 'price');
        $prices = array_sum($prices);
        $orders = AcOrders::findOne(['id' => $order_items->order_id]);
        $orders->total_price = $prices;
        if ($orders->total_price == 0){
            $orders->status = 0;
        }else{
            $orders->status = 1;
        }
        $orders->save(false);
        return true;
    }
    public function actionGroupsDisable() {
        $id = intval($_GET['id']);
        $groups = AcGroups::findOne(['id' => $id]);
        if ($groups->status) {
            $groups->status = 0;
        }
        else {
            $groups->status = 1;
        }
        $groups->save(false);
        return true;
    }
    public function actionLessonAdd() {
        $id = intval($_GET['id']);
        $lesson = AcGroups::findOne($id);
        $course = AcLessons::findOne($lesson->lesson_id);
        $hybrid_count = $lesson->lesson_count;
        $users = User::find()->select('id')
            ->where(new \yii\db\Expression('FIND_IN_SET(:groupId, groups_id)'))
            ->andWhere(['role' => null])
            ->addParams([':groupId' => $id])
            ->asArray()
            ->all();
        if (isset($_GET) && $_GET['action'] == 1){
            $video_count = AcVideoLessons::find()->where(['and',['lesson_id' => $lesson->lesson_id],['status' => '1']])->count();
            if ($hybrid_count < $course->lessons_count - $video_count) {
                $hybrid_count++;
                foreach ($users as $user) {
                    $check_count_video = AcUserVideoWatch::find()->where(['and',['user_id' => $user['id']],['lesson_id' => $lesson->lesson_id],['status' => '1']])->count();
                    $check_count_video += $hybrid_count;
                    $lesson->lesson_count = $hybrid_count;
                    $lesson->save(false);
                    $percent = round((100 / $course->lessons_count) * $check_count_video);
                    $my_lessons = AcMyLessons::findOne(['user_id' => $user['id'],'lessons_id' => $lesson->lesson_id, 'status' => '1']);
                    if (!empty($my_lessons)){
                        $my_lessons->complete_percent = $percent;
                        if ($my_lessons->complete_percent == 100){
                            $my_lessons->status = '2';
                        }
                        $my_lessons->save(false);
                    }
                }
                return json_encode('add');
            }else{
                return json_encode('danger');
            }
        }elseif (isset($_GET) && $_GET['action'] == 0){
            if($lesson->lesson_count < $course->lessons_count){
                $count = $lesson->lesson_count;
                $count++;
                $lesson->lesson_count = $count;
                $lesson->save(false);
                $percent = round((100 / $course->lessons_count) * $lesson->lesson_count);
                foreach ($users as $user){
                    $my_lessons = AcMyLessons::findOne(['user_id' => $user['id'],'lessons_id' => $lesson->lesson_id, 'status' => '1']);
                    if (!empty($my_lessons)){
                        $my_lessons->complete_percent = $percent;
                        if ($my_lessons->complete_percent == 100){
                            $my_lessons->status = '2';
                        }
                        $my_lessons->save(false);
                    }

                }
                return json_encode('add');
            }else{
                return json_encode('danger');
            }
        }
    }
    public function actionLessonBack() {
        $id = intval($_GET['id']);
        $lesson = AcGroups::findOne($id);
        $lesson->lesson_count = intval($_GET['lesson_count']);
        $lesson->save(false);
        $hybrid_count = $lesson->lesson_count;
        $users = User::find()->select('id')
            ->where(new \yii\db\Expression('FIND_IN_SET(:groupId, groups_id)'))
            ->andWhere(['role' => null])
            ->addParams([':groupId' => $id])
            ->asArray()
            ->all();
        $course = AcLessons::findOne($lesson->lesson_id);
        if ($_GET['action'] == 1){
                foreach ($users as $user) {
                    $check_count_video = AcUserVideoWatch::find()->where(['and',['user_id' => $user['id']],['lesson_id' => $lesson->lesson_id],['status' => '1']])->count();
                    $check_count_video += $hybrid_count;
                    $percent = round((100 / $course->lessons_count) * $check_count_video);
                    $my_lessons = AcMyLessons::findOne(['user_id' => $user['id'],'lessons_id' => $lesson->lesson_id, 'status' => '1']);
                    if (!empty($my_lessons)){
                        $my_lessons->complete_percent = $percent;
                        if ($my_lessons->complete_percent == 100){
                            $my_lessons->status = '2';
                        }
                        $my_lessons->save(false);
                    }
                }
        }else{
            $percent = round((100 / $course->lessons_count) * $lesson->lesson_count);
            foreach ($users as $user){
                $my_lessons = AcMyLessons::findOne(['user_id' => $user['id'],'lessons_id' => $lesson->lesson_id, 'status' => '1']);
                if (!empty($my_lessons)){
                    $my_lessons->complete_percent = $percent;
                    $my_lessons->status = '1';
                    $my_lessons->save(false);
                }
            }
        }
        return true;
    }
    public function actionQuizeDisable() {
        // Harut
        $id = intval($_GET['id']);
        $tutors = AcQuizeLog::findOne(['id' => $id]);
        if ($tutors->status) {
            $tutors->status = 0;
        }
        else {
            $tutors->status = 1;
        }

        $tutors->save(false);
        return true;
    }
    public function actionHaveQuestionsDisable() {
        // Mariam
        $id = intval($_GET['id']);
        $tutors = AcHaveQuestions::findOne(['id' => $id]);
        if ($tutors->status) {
            $tutors->status = 0;
        }
        else {
            $tutors->status = 1;
        }
        $tutors->save(false);
        return true;
    }
    public function actionCertificateDisable() {
        // Harut
        $id = intval($_GET['id']);
        $certificate = AcCertificate::findOne(['id' => $id]);
        if ($certificate->status) {
            $certificate->status = 0;
        }
        else {
            $certificate->status = 1;
        }

        $certificate->save(false);
        return true;
    }
    public function actionCallbackDisable() {
        // Harut
        $id = intval($_GET['id']);
        $callback = AcCallback::findOne(['id' => $id]);
        if ($callback->status) {
            $callback->status = 0;
        }
        else {
            $callback->status = 1;
        }

        $callback->save(false);
        return true;
    }
    public function actionApplyDisable() {
        // Harut
        $id = intval($_GET['id']);
        $apply_now = AcApplyNow::findOne(['id' => $id]);
        if ($apply_now->status) {
            $apply_now->status = 0;
        }
        else {
            $apply_now->status = 1;
        }

        $apply_now->save(false);
        return true;
    }
    public function actionRatingDisable() {
        // Harut
        $id = intval($_GET['id']);
        $apply_now = AcRating::findOne(['id' => $id]);
        if ($apply_now->status) {
            $apply_now->status = 0;
        }
        else {
            $apply_now->status = 1;
        }
        $apply_now->save(false);
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
        return true;
    }
    public function actionQuestDisable() {
        $id = intval($_GET['id']);
        $quest = AcQuestionQuests::findOne(['id' => $id]);
        if ($quest->status) {
            $quest->status = 0;
        }
        else {
            $quest->status = 1;
        }

        $quest->save(false);
        return true;
    }
    public function actionReviewDisable() {
        $id = intval($_GET['id']);
        $review = AcReviews::findOne(['id' => $id]);
        if ($review->status) {
            $review->status = 0;
        }
        else {
            $review->status = 1;
        }

        $review->save(false);
        return true;
    }
    public function actionBlogDisable() {
        $id = intval($_GET['id']);
        $blog = AcBlog::findOne(['id' => $id]);
        if ($blog->status) {
            $blog->status = 0;
        }
        else {
            $blog->status = 1;
        }

        $blog->save(false);
        return true;
    }



    public function actionUserDisable() {
        $id = intval($_GET['id']);
        $item = User::findOne(['id' => $id]);
        if ($item->status) {
            $item->status = 0;
        }
        else {
            $item->status = 1;
        }
        $item->save(false);
        return true;
    }
     public function actionAdminAnswers()
     {
         if (!empty($_GET) && $_GET['check'] == 'on'){
             $admin_id = Yii::$app->user->id;
             $id = intval($_GET['id']);
             $admin_answers = AcCallback::findOne($id);
             $admin_answers->checked_answer = '1';
             $admin_answers->answer_admin_id = $admin_id;
             $admin_answers->save(false);
             return true;
         }
     }
    public function actionAdminAnswersQuestions()
    {
        //  Mariam
        if (!empty($_GET) && $_GET['check'] == 'on'){
            $admin_id = Yii::$app->user->id;
            $id = intval($_GET['id']);
            $admin_answers = AcHaveQuestions::findOne($id);
            $admin_answers->checked_answer = '1';
            $admin_answers->answer_admin_id = $admin_id;
            $admin_answers->save(false);
            return true;
        }
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin() {
        $this->layout = 'login';
        if (!Yii::$app->user->isGuest) {
            return $this->redirect(array('index'));
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect(array('index'));
        }
        $model->password = '';
        return $this->render('login', ['model' => $model, ]);
    }
    /**
     * Logout action.
     *
     * @return Response
     */
    public  function  transLateURRL($rdata){

        $rdata = str_replace(' ', '-', $rdata);    $rdata = str_replace('×', '_', $rdata);
        $rdata = str_replace('^', '_', $rdata);    $rdata = str_replace('%', '_', $rdata);
        $rdata = str_replace('(', '_', $rdata);    $rdata = str_replace(')', '_', $rdata);
        $rdata = str_replace('/', '_', $rdata);    $rdata = str_replace('\\', '_', $rdata);
        $rdata = str_replace('#', '_', $rdata);    $rdata = str_replace('՝', '', $rdata);
        $rdata = str_replace('։', '_', $rdata);    $rdata = str_replace(',', '_', $rdata);
        $rdata = str_replace('-', '_', $rdata);    $rdata = str_replace('$', '_', $rdata);
        $rdata = str_replace('@', '_', $rdata);    $rdata = str_replace('&', '_', $rdata);
        $rdata = str_replace('=', '_', $rdata);    $rdata = str_replace(',', '_', $rdata);
        $rdata = str_replace('«', '', $rdata);    $rdata = str_replace('»', '', $rdata);
        $rdata = str_replace('֊', '_', $rdata);    $rdata = str_replace('__', '_', $rdata);
        $rdata = str_replace('+', '_', $rdata);    $rdata = str_replace('"', '_', $rdata);
        $rdata = str_replace("'", '_', $rdata);    $rdata = str_replace('՞', '', $rdata);
        $rdata = str_replace(':', '', $rdata);    $rdata = str_replace('.', '', $rdata);
        $rdata = str_replace('․', '', $rdata);

        $cyr = [
            'ա','բ','վ','գ','դ','ե','ժ','զ','ի','յ','կ','լ','մ','ն','օ','պ',
            'ռ','ս','տ','ու','փ','խ','ց','չ','շ','է','ը','ո','ր','և','ք','ջ','ծ','ղ','հ','ճ','թ','ֆ','ձ','ւ',
            'Ա','Բ','Վ','Գ','Դ','Ե','Ժ','Զ','Ի','Յ','Կ','Լ','Մ','Ն','Օ','Պ',
            'Ռ','Ս','Տ','ՈՒ','Փ','Խ','Ց','Չ','Շ','Է','Ը','Ո','Ր','և','Ք','Ջ','Ծ','Ղ','Հ','Ճ','Թ','Ֆ','Ձ'
        ];

        $lat = [
            'a','b','v','g','d','e','zh','z','i','y','k','l','m','n','o','p',
            'r','s','t','u','ph','x','ts','ch','sh','e','y','o','r','ev','q','j','ts','x','h','j','t','f','zh','v',
            'A','B','V','G','D','E','ZH','Z','I','Y','K','L','M','N','O','P',
            'R','S','T','U','PH','X','TS','CH','SH','E','Y','VO','R','EV','Q','J','TS','X','H','J','T','F','ZH'
        ];

        $rdata = str_replace($cyr, $lat, $rdata);
        return strtolower($rdata);
    }

    public function getresultTree(array $elements, $parentId = 0) {
        $branch = array();
        foreach ($elements as $element) {
            if ($element['parent_id'] == $parentId) {
                $children = $this->getresultTree($elements, $element['id']);
                if ($children) {
                    $element['child'] = $children;
                }
                $branch[] = $element;
            }
        }
        return $branch;
    }

    public function actionLogout() {
        Yii::$app->user->logout();
        return $this->redirect(array('login'));
    }
    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    // Mariam
    public function actionUpdateOrder() {
        if ($this->request->isPost) {
            if (!empty($_POST['orders']) && !empty($_POST['page'])) {
                $className = '\\app\\models\\' . $_POST['page'];
                foreach ($_POST['orders'] as $row) {
                    $order_num = $className::findOne($row['id']);
                    $order_num->order_num = $row['order'];
                    $order_num->save(false);
                }
            }
        }
    }

}
