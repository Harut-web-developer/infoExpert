<?php

namespace app\controllers;

use app\models\AcAnswers;
use app\models\AcBlog;
use app\models\AcCallback;
use app\models\AcHaveQuestions;
use app\models\AcInfo;
use app\models\AcLessons;
use app\models\AcPartners;
use app\models\AcReviews;
use app\models\AcSubscribers;
use app\models\AcWishlist;
use app\models\Texts;
use app\models\User;
use Codeception\Lib\Generator\PageObject;
use Codeception\Verify\Verifiers\VerifyAny;
use PharIo\Manifest\ElementCollection;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
//                    'logout' => ['post'],
                ],
            ],
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }
    public static function pages()
    {
        $page['index'] = 1;
        $page['faq'] = 1;
        $page['testimonials'] = 1;
        $page['about'] = 2;
        $page['sign-up'] = 18;
        $page['login'] = 19;
        $page['forgot'] = 22;
        $page['check-email'] = 23;
        $page['new-password'] = 24;
        $page['account-security'] = 26;
        $page['password-updated'] = 27;
        $page['verification'] = 28;
        return $page;
    }
    public function beforeAction($action)
    {
        // Harut 50 ev Mariam 50
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
        if ($action->id == 'account-security' && !(isset($session['user_id']) && $session['logged'])) {
            return $this->redirect('/login')->send();
        }
        return parent::beforeAction($action);
    }
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        // Harut 70 ev Mariam 30
        date_default_timezone_set('Asia/Yerevan');
        $language = $_COOKIE['language'];
        if ($this->request->isPost && isset($_POST['callBackBtn'])){
            $name = $this->request->post('callBackName');
            $email = $this->request->post('callBackEmail');
            $phone = $this->request->post('callBackPhone');
            $course = $this->request->post('callBackCourses');
            $call_back = new AcCallback();
            $call_back->name = $name;
            $call_back->email = $email;
            $call_back->phone = $phone;
            $call_back->course = $course;
            $call_back->create_date = date('Y-m-d H:i:s');
            $call_back->save();
            return $this->redirect('/');
        }
        if ($this->request->isPost && isset($_POST['haveQuestion'])){
            $name = $this->request->post('name');
            $email = $this->request->post('email');
            $question = $this->request->post('question');
            $have_question = new AcHaveQuestions();
            $have_question->name = $name;
            $have_question->email = $email;
            $have_question->question = $question;
            $have_question->create_date = date('Y-m-d H:i:s');
            $have_question->save();
            return $this->redirect('/');
        }
        if ($this->request->isPost && isset($_POST['subscribe'])){
            $session = Yii::$app->session;
            $email = $this->request->post('leftEmail');
            $email_exist = AcSubscribers::find()
                ->where(['and',['status' => '1'],['email' => $email]])
                ->exists();
            if (!$email_exist){
                $call_back = new AcSubscribers();
                $call_back->email = $email;
                $call_back->create_date = date('Y-m-d H:i:s');
                $call_back->save();
                $session->set('successfully_subscribed', true);
            }
            $session->set('already_subscribe', '');
            $session->set('subscribe', true);
            return $this->goBack(Yii::$app->request->referrer);
        }
        $url_info = AcInfo::find()->select('partner, products, programms')->where(['status' => '1'])->asArray()->one();
        $lessons_courses = AcLessons::find()->select('img, lesson_name_'.$language.' as lesson_name')->where(['status' => '1'])
            ->orderBy(['order_num' => SORT_ASC])
            ->asArray()->all();
        $partners = AcPartners::find()->orderBy(['order_num' => SORT_ASC])->asArray()->all();
        $testimonials = AcReviews::find()->select('text_'.$language.' as text,from_'.$language.' as name, url')->where(['status' => '1'])
            ->orderBy(['order_num' => SORT_ASC])
            ->asArray()->all();
        $answers = AcAnswers::find()->select('question_'.$language.' as question, answer_'.$language.' as answer')->where(['status' => '1'])
            ->orderBy(['order_num' => SORT_ASC])
            ->asArray()->all();
        $total_rows_faq = count($answers);
        $middle_index_faq = floor($total_rows_faq / 2);
        $first_part_faq = array_slice($answers, 0, $middle_index_faq);
        $second_par_faq = array_slice($answers, $middle_index_faq);
        $blogs = AcBlog::find()->select([
            'id',
            'page_name_' . $language . ' as page_name',
            'page_title_' . $language . ' as page_title',
            'page_content_' . $language . ' as page_content',
            "DATE_FORMAT(create_date, '%b %d, %Y') as create_date",
            'url',
            'img'
        ])->where(['status' => '1'])->limit(3)->orderBy(['create_date' => SORT_DESC])->asArray()->all();
        $blogs_mobile = AcBlog::find()->select([
            'id',
            'page_name_' . $language . ' as page_name',
            'page_title_' . $language . ' as page_title',
            'page_content_' . $language . ' as page_content',
            "DATE_FORMAT(create_date, '%b %d, %Y') as create_date",
            'url',
            'img'
        ])->where(['status' => '1'])
            ->orderBy(['order_num' => SORT_ASC])
            ->asArray()->all();
        return $this->render('index',[
            'partners' => $partners,
            'testimonials' => $testimonials,
            'first_part_faq' => $first_part_faq,
            'second_par_faq' => $second_par_faq,
            'total_rows_faq' => $total_rows_faq,
            'answers' => $answers,
            'blogs' => $blogs,
            'blogs_mobile' => $blogs_mobile,
            'lessons_courses' => $lessons_courses,
            'url_info' => $url_info
        ]);
    }
    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin(){
        // Harut 50 ev Mariam 50
        $session = Yii::$app->session;
        $model = new LoginForm();
        if($_POST){
            if($model->load(Yii::$app->request->post(), '') && $model->login()){
                if (isset($_POST['rememberme'])){
                    setcookie('email',Yii::$app->user->identity->email, time()+60 * 5, '/');
                }
                $identity = Yii::$app->user->identity;
                $session->set('user_id',$identity->id);
                $session->set('user_name',$identity->username);
                $session->set('user_email',$identity->email);
                $session->set('role',$identity->role);
                $session->set('logged',true);
                $session->set('alertShown',true);
                return $this->redirect('/');
            }else{
                $session->set('wrond-mess', true);
                return $this->redirect('/login');
            }
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }
    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        // Harut
        $this->enableCsrfValidation = false;
        session_destroy();
        Yii::$app->user->logout();
        return $this->goHome();
    }

    public function actionFaq(){
        // Harut
        $language = $_COOKIE['language'];
        $answers = AcAnswers::find()->select('question_'.$language.' as question, answer_'.$language.' as answer')->where(['status' => '1'])
            ->orderBy(['order_num' => SORT_ASC])
            ->asArray()->all();
        $total_rows_faq = count($answers);
        $middle_index_faq = floor($total_rows_faq / 2);
        $first_part_faq = array_slice($answers, 0, $middle_index_faq);
        $second_par_faq = array_slice($answers, $middle_index_faq);
        return $this->render('faq', [
            'answers' => $answers,
            'total_rows_faq' => $total_rows_faq,
            'first_part_faq' => $first_part_faq,
            'second_par_faq' => $second_par_faq,

        ]);
    }
    public function actionTestimonials(){
        // Harut
        $language = $_COOKIE['language'];
        $testimonials = AcReviews::find()->select('text_'.$language.' as text,from_'.$language.' as name, url')->where(['status' => '1'])
            ->orderBy(['order_num' => SORT_ASC])
            ->asArray()->all();

        return $this->render('testimonials', [
            'testimonials' => $testimonials
        ]);
    }
    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }
    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
    public function actionTest()
    {
        return $this->render('test');
    }
    public function actionSignUp()
    {
        date_default_timezone_set('Asia/Yerevan');
        // Harut 50 ev Mariam 50
        $session = Yii::$app->session;
        $model = new User();
        if($this->request->isPost) {
            $post = Yii::$app->request->post();
            $password = $post['User']['password'];
            $hash = Yii::$app->getSecurity()->generatePasswordHash($password);
            $existingUser = User::findOne(['email' => $post['User']['email']]);
            if ($existingUser !== null) {
                $message = '';
                if($_COOKIE['language'] == 'am'){
                    $message = 'Այս էլ․ հասցեն արդեն գրանցված է:';
                }elseif ($_COOKIE['language'] == 'ru'){
                    $message = 'Этот адрес эл. почты уже зарегистрирован.';
                }elseif ($_COOKIE['language'] == 'en'){
                    $message = 'This email is already registered.';
                }
                Yii::$app->session->setFlash('error', $message);
                return $this->refresh();
            }
            if ($model->load($post)) {
                $model->password = $hash;
                $model->auth_key = $this->generateRandomString();
                $model->created_at = date('Y-m-d H:i:s');
                $model->updated_at = date('Y-m-d H:i:s');
                if($model->save(false)){
                    $log_model = new LoginForm();
                    $log_model->email = $model->email;
                    $log_model->password = $post['User']['password'];
                    if($log_model->login()){
                        $identity = Yii::$app->user->identity;
                        $session->set('user_id',$identity->id);
                        $session->set('user_name',$identity->username);
                        $session->set('user_email',$identity->email);
                        $session->set('logged',true);
                        return $this->redirect('/');
                    }else{
                        return $this->redirect('/signup');
                    }
                }
            }
        }
        return $this->render('sign-up', [
            'model' => $model,
        ]);
    }
    public function actionSwitchLanguage($lang)
    {
        setcookie('language', $lang, time() + (365 * 24 * 60 * 60),"/");
        return $this->goBack(Yii::$app->request->referrer);
    }
    public function actionAccountSecurity()
    {
        date_default_timezone_set('Asia/Yerevan');
        if ($this->request->isPost) {
            $current_password = $this->request->post('currentPassword');
            $new_password = $this->request->post('newPassword');
            $confirmPassword = $this->request->post('confirmPassword');
            $user = User::findOne(['status' => '1', 'id' => Yii::$app->user->identity->id]);
//            $user = Yii::$app->user->identity;
            $password_hash = $user->password;
            if ($_COOKIE['language'] == 'am'){
                $success = 'Գաղտնաբառը հաջողությամբ փոխվեց:';
                $failedChangePassword = 'Չհաջողվեց փոխել գաղտնաբառը:';
                $newIncorrectPassword = 'Նոր գաղտնաբառը սխալ է';
                $oldIncorrectPassword = 'Հին գաղտնաբառը սխալ է:';
            } elseif ($_COOKIE['language'] == 'ru'){
                $success = 'Пароль успешно изменен.';
                $failedChangePassword = 'Не удалось изменить пароль.';
                $newIncorrectPassword = 'Новый пароль неверен.';
                $oldIncorrectPassword = 'Старый пароль неверен.';
            }else{
                $success = 'Password successfully changed.';
                $failedChangePassword = 'Failed to change password.';
                $newIncorrectPassword = 'The new password is incorrect';
                $oldIncorrectPassword = 'Old password is incorrect.';
            }
            if (!is_null($current_password) && Yii::$app->getSecurity()->validatePassword($current_password, $password_hash)) {
                if ($new_password === $confirmPassword){
                    $user->password = Yii::$app->getSecurity()->generatePasswordHash($new_password);
                    $user->updated_at = date('Y-m-d H:i:s');
                    if ($user->save(false)) {
                        Yii::$app->session->setFlash('success', $success);
                        return $this->redirect(['/']);
                    } else {
                        Yii::$app->session->setFlash('failedChangePassword', $failedChangePassword);
                        return $this->render('security');
                    }
                } else {
                    Yii::$app->session->setFlash('newIncorrectPassword', $newIncorrectPassword);
                    return $this->render('security');
                }
            } else {
                Yii::$app->session->setFlash('oldIncorrectPassword', $oldIncorrectPassword);
                return $this->render('security');
            }
        }
        return $this->render('security');
    }
     public function actionGetWishlist(){
         // Harut
        if($this->request->isGet){
            $id = intval($this->request->get('indID'));
            $type = intval($this->request->get('type'));
            $wishlist = AcWishlist::addWishlist($id,$type);
            return $wishlist;
        }
     }
     public function actionRemoveWishlist(){
         // Harut
         if($this->request->isGet){
             $id = intval($this->request->get('indID'));
             $type = intval($this->request->get('type'));
             $wishlist = AcWishlist::removeWishlist($id,$type);
             if($_COOKIE['language'] == 'am'){
                 $title = 'Սեխմեք «Բոլոր դասերը», որպեսզի ստեղծեք ձեր հավանածները';
                 $btn_name = 'Բոլոր դասերը';
             }elseif ($_COOKIE['language'] == 'ru'){
                 $title = 'Перейдите на вкладку «Все курсы», чтобы создать список желаний';
                 $btn_name = 'Все курсы';
             }elseif ($_COOKIE['language'] == 'en'){
                 $title = 'Go to the All Courses tab to create a wishlist';
                 $btn_name = 'All courses';
             }
             return json_encode(['wishlist' => $wishlist, 'title' => $title, 'btn_name' => $btn_name]);
         }
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
    public function actionForgot()
    {
        // Mariam
        $session = Yii::$app->session;
        if (Yii::$app->request->isPost) {
            $email = Yii::$app->request->post('email');
            $user = User::findOne(['email' => $email]);
            if ($user !== null) {
                $token = rand(10000, 99999);
                $user->password_reset_token = $token;
                $user->save(false);
                $resetLink = Yii::$app->urlManager->createAbsoluteUrl(['site/verification', 'token' => $token]);
                $message = "Your password recovery code is $token <br/>" .
                    "<a href='{$resetLink}'>Click Here to Reset Password</a>";
                $result = Yii::$app->mailer->compose('welcome', ['message' => $message])
                    ->setFrom('user2002mm@gmail.com')
                    ->setTo($email)
                    ->setSubject('Recovery password')
                    ->send();
                Yii::$app->session->setFlash('forgot', 'Instructions to reset your password have been sent to your email.');
                $session->set('email', $email);
                if (Yii::$app->request->post('message')){
                    return $this->redirect('verification');
                }
                if ($result) {
                    return $this->redirect('check-email');
                }
            } else {
                Yii::$app->session->setFlash('forgot', 'No user is registered with this email address.');
            }
        }
        return $this->render('forgot');
    }
    public function actionCheckEmail() {
        // Mariam
        return $this->render('check-email');
    }
    public function actionVerification()
    {
        // Mariam
        $session = Yii::$app->session;
        $email = $session->get('email');
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $number3 = $_POST['number3'];
        $number4 = $_POST['number4'];
        $number5 = $_POST['number5'];
        $combinedCode = $number1 . $number2 . $number3 . $number4 . $number5;
        if(isset($_POST)  && $combinedCode != '')
        {
            $model = User::findOne(['password_reset_token' => $combinedCode]);
            if($model != null && $model->password_reset_token === $combinedCode){
                $model->password_reset_token = "NULL";
                $model->save(false);
                return $this->redirect('new-password');
            }
        }
        return $this->render('verification',[
            'email' => $email,
        ]);
    }
    public function actionNewPassword()
    {
        date_default_timezone_set('Asia/Yerevan');
        if(isset($_POST) && $_POST['newpassword'])
        {
            $password = $_POST['newpassword'];
            $confirm = $_POST['confirmpassword'];
            $session = Yii::$app->session;
            $email = $session->get('email');
            if($password === $confirm) {
                $hash = Yii::$app->getSecurity()->generatePasswordHash($password);
                $user = User::findOne(['email' => $email]);
                $user->password = $hash;
                $user->auth_key = $this->generateRandomString();
                $user->updated_at = date('Y-m-d H:i:s');
                $user->save(false);
                return $this->redirect('password-updated');
            }
        }
        return $this->render('new-password');
    }
    public function actionPasswordUpdated(){
        // Mariam
        return $this->render('password-updated');
    }
    public function actionSearch() {
        // Mariam
        $searchval = Yii::$app->request->get('input_val');
        $language = $_COOKIE['language'];
        $searchval = mb_convert_encoding($searchval, 'UTF-8', mb_detect_encoding($searchval));
        $blogs = AcBlog::find()
            ->select(['id', 'page_name_am', 'page_name_ru', 'page_name_en'])
            ->where(['status' => '1'])
            ->andWhere(['or',
                ['like', 'page_name_am', $searchval],
                ['like', 'page_name_ru', $searchval],
                ['like', 'page_name_en', $searchval],
                ['like', 'page_keywords_am', $searchval],
                ['like', 'page_keywords_ru', $searchval],
                ['like', 'page_keywords_en', $searchval],
            ])
            ->asArray()
            ->all();
        $lessons = AcLessons::find()
            ->select(['id', 'lesson_name_am', 'lesson_name_ru', 'lesson_name_en', 'url'])
            ->where(['status' => '1'])
            ->andWhere(['or',
                ['like', 'lesson_name_am', $searchval],
                ['like', 'lesson_name_ru', $searchval],
                ['like', 'lesson_name_en', $searchval],
                ['like', 'lesson_keywords_am', $searchval],
                ['like', 'lesson_keywords_ru', $searchval],
                ['like', 'lesson_keywords_en', $searchval],
            ])
            ->asArray()
            ->all();
        return $this->asJson([
            'html' => $this->renderAjax('search', [
                'blogs' => $blogs,
                'lessons' => $lessons,
                'language' => $language,
            ]),
        ]);
    }
    public function actionSiteMap(){
        $lang = $_COOKIE['language'];
        $lessons = AcLessons::find()->select('url,lesson_name_'.$lang.' as lesson_name')->where(['status' => '1'])->asArray()->all();
        return $this->render('map',['lessons' => $lessons]);

    }
    public function actionTermsAndConditions(){
        $language = $_COOKIE['language'];
        $lesson = AcLessons::find()->select('id,lesson_name_'.$language.' as lesson_name,')->where(['status' => '1'])->asArray()->all();
        return $this->render('terms',['lesson' => $lesson]);
    }
    public function actionPolicy(){
        // Mariam
        return $this->render('policy');
    }
    public function actionMethodology(){
        // Harut
        return $this->render('methodology');
    }
}
