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
<?php
$language = $_COOKIE['language'];
$class1 = '';

if ($language == 'en') {
} elseif ($language == 'am') {
    $class1 = 'loginFieldAm';
} elseif ($language == 'ru') {
    $class1 = 'loginFieldAm';
}
?>
<div class="login">
    <div class="loginField <?php echo $class1; ?>">
        <div class="signupFormTitle">
            <?=$GLOBALS['text']['signinFormTitle']?>
        </div>
        <div class="textCircle">
            <div class="mainTextCircle">
                <div class="circleTextTop"><?=$GLOBALS['text']['signinTextOne']?> <span><?=$GLOBALS['text']['signinTextTwo']?></span> <?=$GLOBALS['text']['signinTextThree']?> <span><?=$GLOBALS['text']['signinTextFour']?></span> <?=$GLOBALS['text']['signinTextFive']?> <span><?=$GLOBALS['text']['signinTextSix']?></span> <?=$GLOBALS['text']['signinTextSeven']?></div>
                <div class="circleTextBottom"><?=$GLOBALS['text']['signinTextCouple']?></div>
            </div>
        </div>
        <form action="" class="signin" method="post">
            <input type="hidden" name="<?= $this->renderDynamic('return Yii::$app->request->csrfParam;'); ?>" value="<?= $this->renderDynamic('return Yii::$app->request->csrfToken;'); ?>" />

            <span><?=$GLOBALS['text']['signinFormTitle']?></span>
            <div class="signinMenu">
                <input type="email" value="<?=$email?>" placeholder="<?=$GLOBALS['text']['signinFormEmail']?>" name="email" required>
                <div class="passEye">
                    <input type="password" placeholder="<?=$GLOBALS['text']['signinFormPassword']?>" name="password" required>
                    <img class="togglePassword" src="/images/signEyeClose.png" alt="">
                </div>
                <div class="rememberField">
                    <div class="mainCheck">
                        <input id="checkboxSignIn" type="checkbox" name="rememberme">
                        <label for="checkboxSignIn"><?=$GLOBALS['text']['signinRemember']?></label>
                    </div>
                    <a href=""><?=$GLOBALS['text']['signinLost']?></a>
                </div>
            </div>
            <button type="submit" class="container_signin">
                <img src="/images/Vector.png" alt="">
                <span><?=$GLOBALS['text']['signinBtn']?></span>
            </button>
            <div class="signUp">
                <span><?=$GLOBALS['text']['signinMember']?></span>
                <a href="/signup"><?=$GLOBALS['text']['signinFormSignup']?></a>
            </div>
        </form>
    </div>
</div>

