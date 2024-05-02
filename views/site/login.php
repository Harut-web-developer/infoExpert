<?php

/** @var yii\web\View $this */

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
$this->registerCssFile('@web/css/login.css');
if (isset($_COOKIE['email'])){
    $email = $_COOKIE['email'];
}else{
    $email = '';
}
?>
<div class="login">
    <div class="loginField">
        <div class="textCircle">
            <div class="mainTextCircle">
                <div class="circleTextTop">Up Your <span>Skills</span> To <span>Advance</span> Your <span>Career</span> Path</div>
                <div class="circleTextBottom">Just a couple of clicks and we start</div>
            </div>
        </div>
        <form action="" class="signin" method="post">
            <input type="hidden" name="<?= $this->renderDynamic('return Yii::$app->request->csrfParam;'); ?>" value="<?= $this->renderDynamic('return Yii::$app->request->csrfToken;'); ?>" />

            <span>WELCOME BACK</span>
            <div class="signinMenu">
                <input type="email" value="<?=$email?>" placeholder="Email Address" name="email">
                <div class="passEye">
                    <input type="password" placeholder="Password" name="password">
                    <img src="/images/signEye.png" alt="">
                </div>
                <div class="rememberField">
                    <div class="mainCheck">
                        <input id="checkboxSignIn" type="checkbox" name="rememberme">
                        <label for="checkboxSignIn">remember</label>
                    </div>
                    <a href="">Lost your password?</a>
                </div>
            </div>
            <button type="submit" class="container_signin">
                <img src="/images/Vector.png" alt="">
                <span>SIGN IN</span>
            </button>
            <div class="signUp">
                <span>Not a member ?</span>
                <a href="/signup">Sign Up now</a>
            </div>
        </form>
    </div>
</div>

