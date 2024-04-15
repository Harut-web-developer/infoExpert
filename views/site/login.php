<?php

/** @var yii\web\View $this */

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
$this->registerCssFile('@web/css/login.css');

?>
<section class="mainPoints">
    <div class="container">
        <div class="globus">
            <span class="globusPoints">
                <img src="/images/unsplash_6ie6OjshvWg.png" class="point1"></img>
                <p class="point2"></p>
                <img src="/images/unsplash_6ie6OjshvWg.png" class="point3"></img>
                <p class="point4"></p>
            </span>
            <div class="globusSmooll">
                <p class="text1">Up Your<span> Skills </span>To <span>Advance</span> Your <span>Career</span> Path</p>
                <p class="text2">Just a couple of clicks and we start</p>
            </div>
        </div>
        <form action="" class="signin">
            <h1>WELCOME BACK</h1>
            <div class="signinMenu">
                <input type="email" placeholder="Email Address" name="email">
                <input type="password" placeholder="Password" name="password">
                <div class="checkRem">
                    <label class="container_checked">
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                        <p>remember</p>
                    </label>
                    <span class="checkbox">
                    <a href="">Lost your password?</a>
                </span>
                </div>

            </div>
            <div class="container_signin">
                <img src="/images/Vector.png" alt="">
                <div class="centered">SIGN IN</div>
            </div>
            <p class="signUp">Not a member ? <a href="">Sign Up now</a></p>
        </form>
    </div>
</section>

