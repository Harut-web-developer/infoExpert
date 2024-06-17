<?php

namespace app\controllers;

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
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin(){
        $session = Yii::$app->session;
        $model = new LoginForm();
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
                Yii::$app->session->setFlash('error', 'This email is already registered.');
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
        $email_value = Yii::$app->user->identity->email;
        return $this->render('security',[
            'email_value' => $email_value,
        ]);
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
