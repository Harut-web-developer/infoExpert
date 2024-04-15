<?php

/** @var yii\web\View $this */

$this->title = 'Sign-up';
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
                <p class="text1">Up Your<span> Skills </span>To <span>Advance</span> Your <span>Career</span> Path </p>
                <p class="text2">Just a couple of clicks and we start</p>
            </div>
        </div>
        <form action="" class="signin signup">
            <h1>GET STARTED NOW</h1>
            <div class="signinMenu">
                <input type="text" placeholder="Name">
                <input type="email" placeholder="Email Address" name="email">
                <input type="password" placeholder="Password" name="password">
                <div class="checkSignup">
                    <span class="checkboxSignup">
                        <label class="container_checked_signup">
                            <input type="checkbox" checked="checked">
                            <span class="checkmarkSignup"></span>
                        </label>
                        <p>I agree to the <a href=""> terms & policy</a></p>
                    </span>
                </div>
            </div>
            <button><img src="/images/sign-up.png" alt=""></button>
            <p class="signUp">have an account ? <a href=""> SIGN UP </a></p>
        </form>
    </div>

</section>


