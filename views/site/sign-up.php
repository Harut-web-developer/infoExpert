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
                <div class="circleTextTop"><?=$GLOBALS['text']['signupTextOne']?> <span><?=$GLOBALS['text']['signupTextTwo']?></span> <?=$GLOBALS['text']['signupTextThree']?> <span><?=$GLOBALS['text']['signupTextFour']?></span> <?=$GLOBALS['text']['signupTextFive']?> <span><?=$GLOBALS['text']['signupTextSix']?></span> <?=$GLOBALS['text']['signupTextSeven']?></div>
                <div class="circleTextBottom"><?=$GLOBALS['text']['signupTextCouple']?></div>
            </div>
        </div>
        <form action="" class="signupForm" method="post">
            <input type="hidden" name="<?= $this->renderDynamic('return Yii::$app->request->csrfParam;'); ?>" value="<?= $this->renderDynamic('return Yii::$app->request->csrfToken;'); ?>" />
            <span><?=$GLOBALS['text']['signupFormTitle']?></span>
            <div class="signupMenu">
                <input type="text" placeholder="<?=$GLOBALS['text']['signupFormName']?>" name="User[username]" required>
                <input type="email" placeholder="<?=$GLOBALS['text']['signupFormEmail']?>" name="User[email]" required>
                <div class="passEye">
                    <input type="password" placeholder="<?=$GLOBALS['text']['signupFormPassword']?>" name="User[password]" required>
                    <img src="/images/signEye.png" alt="">
                </div>
            </div>
            <div class="rememberSignupField">
                <input id="checkboxSignIn" type="checkbox" >
                <label for="checkboxSignIn"><?=$GLOBALS['text']['signupFormAgree']?> <a href=""><?=$GLOBALS['text']['signupFormTerms']?></a></label>
            </div>
            <?php
            $error = Yii::$app->session->getFlash('error');
            if ($error !== null) {?>
                <div class="errorText" role="alert"><?=$error?></div>
            <?php }?>
            <button type="submit" class="container_signup" id="submitButton" disabled>
                <img src="/images/Vector.png" alt="">
                <span id="signupButtonText"><?=$GLOBALS['text']['signupBtn']?></span>
            </button>
            <div class="signUp">
                <span><?=$GLOBALS['text']['signupAccount']?></span>
                <a href="/login"><?=$GLOBALS['text']['signupAccountSignin']?></a>
            </div>
        </form>
    </div>
</div>


