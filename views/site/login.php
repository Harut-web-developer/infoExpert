<?php

/** @var yii\web\View $this */

$this->title = 'Login';
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
        <form action="" class="signin">
            <span>WELCOME BACK</span>
            <div class="signinMenu">
                <input type="email" placeholder="Email Address" name="email">
                <div class="passEye">
                    <input type="password" placeholder="Password" name="password">
                    <img src="/images/signEye.png" alt="">
                </div>
                <div class="rememberField">
                    <div class="mainCheck">
                        <input id="checkboxSignIn" type="checkbox" >
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
                <a href="">Sign Up now</a>
            </div>
        </form>
    </div>
</div>

