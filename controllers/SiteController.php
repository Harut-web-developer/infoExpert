<?php

namespace app\controllers;

use app\models\AcAnswers;
use app\models\AcBlog;
use app\models\AcCallback;
use app\models\AcLessons;
use app\models\AcPartners;
use app\models\AcReviews;
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
        $page['about'] = 2;
        $page['sign-up'] = 18;
        $page['login'] = 19;
        $page['account-security'] = 26;
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
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
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
//exit();
        $lessons = AcLessons::find()->select('lesson_name_'.$language.' as lesson_name')->where(['status' => '1'])->asArray()->all();
        $partners = AcPartners::find()->asArray()->all();
        $testimonials = AcReviews::find()->select('text_'.$language.' as text,from_'.$language.' as name, url')->where(['status' => '1'])->asArray()->all();
        $answers = AcAnswers::find()->select('question_'.$language.' as question, answer_'.$language.' as answer')->where(['status' => null])->asArray()->all();
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
            'img'
        ])->where(['status' => '1'])->limit(3)->asArray()->all();
        $blogs_mobile = AcBlog::find()->select([
            'id',
            'page_name_' . $language . ' as page_name',
            'page_title_' . $language . ' as page_title',
            'page_content_' . $language . ' as page_content',
            "DATE_FORMAT(create_date, '%b %d, %Y') as create_date",
            'img'
        ])->where(['status' => '1'])->asArray()->all();
        return $this->render('index',[
            'partners' => $partners,
            'testimonials' => $testimonials,
            'first_part_faq' => $first_part_faq,
            'second_par_faq' => $second_par_faq,
            'total_rows_faq' => $total_rows_faq,
            'answers' => $answers,
            'blogs' => $blogs,
            'blogs_mobile' => $blogs_mobile,
            'lessons' => $lessons
        ]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin(){
        $session = Yii::$app->session;
        $model = new LoginForm();
//        echo "<pre>";
//        var_dump($_POST);
//        die;
        if($_POST){
            if($model->load(Yii::$app->request->post(), '') && $model->login()){
                if (isset($_POST['rememberme'])){
                    setcookie('email',Yii::$app->user->identity->email, time()+60 * 5, '/');
                }
                $identity = Yii::$app->user->identity;
//                var_dump($identity);
                $session->set('user_id',$identity->id);
                $session->set('user_name',$identity->username);
                $session->set('user_email',$identity->email);
                $session->set('logged',true);
//                var_dump(isset($session['user_id']));
//                var_dump($session['logged']);
//                exit;
                return $this->redirect('/');
            }else{
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
        $this->enableCsrfValidation = false;
        session_destroy();
        Yii::$app->user->logout();
        return $this->goHome();
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
                if($model->save()){
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
        if ($this->request->isPost) {
            $current_password = $this->request->post('currentPassword');
            $new_password = $this->request->post('newPassword');
            $confirmPassword = $this->request->post('confirmPassword');
            $user = User::findOne(['status' => '1', 'id' => Yii::$app->user->identity->id]);
            $password_hash = $user->password;
//            echo "<pre>";
//            var_dump($this->request->isPost);
//            var_dump($current_password);
//            var_dump($new_password);
//            var_dump($confirmPassword);
//            var_dump($new_password === $confirmPassword);
//            die;
            if (!is_null($current_password) && Yii::$app->getSecurity()->validatePassword($current_password, $password_hash)) {
                if ($new_password === $confirmPassword){
                    $user->password = Yii::$app->getSecurity()->generatePasswordHash($new_password);
                    if ($user->save(false)) {
                        Yii::$app->session->setFlash('success', 'Password successfully changed.');
                        return $this->redirect(['/']);
                    } else {
                        Yii::$app->session->setFlash('failedChangePassword', 'Failed to change password.');
                        return $this->render('security');
                    }
                } else {
                    Yii::$app->session->setFlash('newIncorrectPassword', 'The new password is incorrect');
                    return $this->render('security');
                }
            } else {
                Yii::$app->session->setFlash('oldIncorrectPassword', 'Old password is incorrect.');
                return $this->render('security');
            }
        }

        return $this->render('security');
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
}
