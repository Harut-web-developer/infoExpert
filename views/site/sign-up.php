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
                <div class="circleTextTop">UP YOUR <span>SKILLS</span> TO <span>ADVANCE</span> YOUR <span>CAREER</span> PATH</div>
                <div class="circleTextBottom">Just a couple of clicks and we start</div>
            </div>
        </div>
        <form action="" class="signupForm">
            <span>GET STARTED NOW</span>
            <div class="signupMenu">
                <input type="text" placeholder="Name" name="name">
                <input type="email" placeholder="Email Address" name="email">
                <div class="passEye">
                    <input type="password" placeholder="Password" name="password">
                    <img src="/images/signEye.png" alt="">
                </div>
            </div>
            <div class="rememberSignupField">
                <input id="checkboxSignIn" type="checkbox" >
                <label for="checkboxSignIn">I agree to the <a href="">terms and policy</a></label>
            </div>
            <button type="submit" class="container_signup">
                <img src="/images/Vector.png" alt="">
                <span>SIGN UP</span>
            </button>
            <div class="signUp">
                <span>Have an account?</span>
                <a href="/site/login">Sign In</a>
            </div>
        </form>
    </div>
</div>


