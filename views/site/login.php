<?php

/** @var yii\web\View $this */

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
$this->registerCssFile('@web/css/login.css?v=1');
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
$session = Yii::$app->session;
$wrond_mess = $session->get('wrond-mess');
$message = '';
if($_COOKIE['language'] == 'am' && $wrond_mess){
    $message = 'Գաղտնաբառն կամ էլ․ հասցեն սխալ է։';
}elseif ($_COOKIE['language'] == 'ru'  && $wrond_mess){
    $message = 'Пароль или адрес эл. почты это неверно.';
}elseif ($_COOKIE['language'] == 'en'  && $wrond_mess){
    $message = 'Password or email it is wrong.';
}
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"/>
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
                    <i class="fas fa-eye-slash show_hide"></i>
                </div>
                <div class="rememberField">
                    <div class="mainCheck">
                        <input id="checkboxSignIn" type="checkbox" name="rememberme">
                        <label for="checkboxSignIn"><?=$GLOBALS['text']['signinRemember']?></label>
                    </div>
                    <a href="site/forgot"><?=$GLOBALS['text']['signinLost']?></a>
                </div>
            </div>
            <div class="errormes"><?=$message?></div>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $('#checkboxSignIn').change(function(){
        let submitButton = $('#submitButton');
        let signupButtonText = $('#signupButtonText');

        if ($(this).prop('checked')) {
            submitButton.prop('disabled', false);
            signupButtonText.css('color', '#F36528');

        } else {
            submitButton.prop('disabled', true);
            signupButtonText.css('color', '#D9E3E4');
        }
    });
    $("#submitButton").hover(
        function () {
            if (!$(this).prop("disabled")) {
                $(this).find("img").attr("src", "/images/Vectorhover.png");
                $(this).find("span").css("color", "white");
            }
        },
        function () {
            if (!$(this).prop("disabled")) {
                $(this).find("img").attr("src", "/images/Vector.png");
                $(this).find("span").css("color", "#F36528");
            }
        }
    );
    const showHide = document.querySelector(".show_hide"),
          input = document.querySelector(".passEye input");
        showHide.addEventListener("click", ()=>{
        if(input.type === "password"){
            input.type = "text";
            showHide.classList.replace("fa-eye-slash","fa-eye");
        }else {
            input.type = "password";
            showHide.classList.replace("fa-eye","fa-eye-slash");
        }
    });
</script>