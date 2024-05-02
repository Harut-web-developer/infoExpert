<?php

/** @var yii\web\View $this */

$this->title = 'Sign-up';
$this->params['breadcrumbs'][] = $this->title;
$this->registerCssFile('@web/css/login.css');

?>
<div class="login">
    <div class="loginField">
        <div class="textCircle">
            <div class="mainTextCircle">
                <div class="circleTextTop">Up Your <span>Skills</span> To <span>Advance</span> Your <span>Career</span> Path</div>
                <div class="circleTextBottom">Just a couple of clicks and we start</div>
            </div>
        </div>
        <form action="" class="signupForm" method="post">
            <input type="hidden" name="<?= $this->renderDynamic('return Yii::$app->request->csrfParam;'); ?>" value="<?= $this->renderDynamic('return Yii::$app->request->csrfToken;'); ?>" />
            <span>GET STARTED NOW</span>
            <div class="signupMenu">
                <input type="text" placeholder="Name/Surname" name="User[username]" required>
                <input type="email" placeholder="Email Address" name="User[email]" required>
                <div class="passEye">
                    <input type="password" placeholder="Password" name="User[password]" required>
                    <img src="/images/signEye.png" alt="">
                </div>
            </div>
            <div class="rememberSignupField">
                <input id="checkboxSignIn" type="checkbox" >
                <label for="checkboxSignIn">I agree to the <a href="">terms and policy</a></label>
            </div>
            <?php
            $error = Yii::$app->session->getFlash('error');
            if ($error !== null) {?>
                <div class="errorText" role="alert"><?=$error?></div>
            <?php }?>
            <button type="submit" class="container_signup" id="submitButton" disabled>
                <img src="/images/Vector.png" alt="">
                <span id="signupButtonText">SIGN UP</span>
            </button>
            <div class="signUp">
                <span>Have an account?</span>
                <a href="/login">Sign In</a>
            </div>
        </form>
    </div>
</div>


