<?php

/** @var yii\web\View $this */

$this->title = 'Sign-up';
$this->params['breadcrumbs'][] = $this->title;
$this->registerCssFile('@web/css/sign-up.css?v=1');

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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"/>
<div class="login">
    <div class="loginField  <?php echo $class1; ?>">
        <div class="signupFormTitle">
            <?=$GLOBALS['text']['signupFormTitle']?>
        </div>
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
                <div class="container_">
                    <div class="input-box">
                        <i class="fas fa-eye-slash show_hide"></i>
                        <input spellcheck="false" type="password" placeholder="<?=$GLOBALS['text']['signupFormPassword']?>" name="User[password]" required>
                    </div>
                    <div class="requirements">
                        <p><?=$GLOBALS['text']['passwordInclude']?></p>
                        <ul>
                            <li class="uppercase"><?=$GLOBALS['text']['uppercaseLetters']?></li>
                            <li class="lowercase"><?=$GLOBALS['text']['lowercaseLetters']?></li>
                            <li class="numbers"><?=$GLOBALS['text']['numbers']?></li>
                            <li class="symbol"><?=$GLOBALS['text']['symbols']?></li>
                            <li class="charactersSize"><?=$GLOBALS['text']['characters']?></li>
                        </ul>
                    </div>
                    <div class="indicator">
                        <div class="icon-text">
                            <i class="fas fa-exclamation-circle error_icon"></i>
                            <h6 class="text"></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rememberSignupField">
                <input id="checkboxSignIn" type="checkbox" >
                <label for="checkboxSignIn"><?=$GLOBALS['text']['signupFormAgree']?> <a href=""><?=$GLOBALS['text']['signupFormTerms']?></a></label>
                <input type="hidden" id="postValue" value="false" />
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    function getCookie(name) {
        var cookieArr = document.cookie.split(";");

        for(var i = 0; i < cookieArr.length; i++) {
            var cookiePair = cookieArr[i].split("=");

            if(name == cookiePair[0].trim()) {
                return decodeURIComponent(cookiePair[1]);
            }
        }
        return null;
    }
    let language = getCookie('language');
    var message = '';
    const input = document.querySelector(".input-box input"),
        showHide = document.querySelector(".show_hide"),
        requirements = document.querySelector(".requirements"),
        indicator = document.querySelector(".indicator"),
        iconText = document.querySelector(".icon-text"),
        text = document.querySelector(".text"),
        uppercase_ = document.querySelector(".uppercase"),
        lowercase_ = document.querySelector(".lowercase"),
        numbers_ = document.querySelector(".numbers"),
        symbols_ = document.querySelector(".symbol");
        passwordMustInclude = document.querySelector(".requirements p");
        charactersSize_ = document.querySelector(".charactersSize");
    showHide.addEventListener("click", ()=>{
        if(input.type === "password"){
            input.type = "text";
            showHide.classList.replace("fa-eye-slash","fa-eye");
        }else {
            input.type = "password";
            showHide.classList.replace("fa-eye","fa-eye-slash");
        }
    });

    let uppercase = /[A-Z]/,
        lowercase = /[a-z]/,
        numbers = /[0-9]/,
        symbols = /[\W_]/,
        charactersSize = 8;

    input.addEventListener("focus", ()=>{
        requirements.classList.add("active");
    });

    input.addEventListener("blur", ()=>{
        requirements.classList.remove("active");
    });

    input.addEventListener("keyup", ()=>{
        indicator.classList.add("active");
        let val = input.value;
        if(val.match(uppercase) && val.match(lowercase) && val.match(numbers) && val.match(symbols) && val.length >= charactersSize){
            message = 'Password is strong';
            if (language === 'ru')
                message = 'Пароль надежный';
            else if(language === 'am')
                message = 'Գաղտնաբառը ուժեղ է';
            text.textContent = message;
            input.style.borderColor = "#22C32A";
            showHide.style.color = "#22C32A";
            iconText.style.color = "#22C32A";
            uppercase_.style.color = "#22C32A";
            lowercase_.style.color = "#22C32A";
            numbers_.style.color = "#22C32A";
            symbols_.style.color = "#22C32A";
            charactersSize_.style.color = "#22C32A";
            passwordMustInclude.style.color = "#22C32A";
            $('#postValue').val('true');
            if ($('#checkboxSignIn').prop('checked') && $('#postValue').val() === 'true') {
                $('#submitButton').prop('disabled', false);
                $('#signupButtonText').css('color', '#F36528');
            } else {
                $('#submitButton').prop('disabled', true);
                $('#signupButtonText').css('color', '#D9E3E4');
            }
        } else if(val.match(uppercase) && val.match(lowercase) && val.match(numbers) && val.length >= 6){
            message = 'Password is medium';
            if (language === 'ru')
                message = 'Пароль средний';
            else if(language === 'am')
                message = 'Գաղտնաբառը միջին է';
            text.textContent = message;
            input.style.borderColor = "#cc8500";
            showHide.style.color = "#cc8500";
            iconText.style.color = "#cc8500";
            if (val.match(uppercase)) {
                uppercase_.style.color = "#22C32A";
            } else {
                uppercase_.style.color = "#F36528";
            }
            if (val.match(lowercase)) {
                lowercase_.style.color = "#22C32A";
            } else {
                lowercase_.style.color = "#F36528";
            }
            if (val.match(numbers)) {
                numbers_.style.color = "#22C32A";
            } else {
                numbers_.style.color = "#F36528";
            }
            if (val.match(symbols)) {
                symbols_.style.color = "#22C32A";
            } else {
                symbols_.style.color = "#F36528";
            }
            if (val.length >= 8) {
                charactersSize_.style.color = "#22C32A";
            } else {
                charactersSize_.style.color = "#F36528";
            }
            passwordMustInclude.style.color = "#F36528";
            $('#postValue').val('false');
            if ($('#checkboxSignIn').prop('checked') && $('#postValue').val() === 'true') {
                $('#submitButton').prop('disabled', false);
                $('#signupButtonText').css('color', '#F36528');
            } else {
                $('#submitButton').prop('disabled', true);
                $('#signupButtonText').css('color', '#D9E3E4');
            }
        } else {
            message = 'Password is weak';
            if (language === 'ru')
                message = 'Пароль слабый';
            else if(language === 'am')
                message = 'Գաղտնաբառը թույլ է';
            text.textContent = message;
            input.style.borderColor = "#F36528";
            showHide.style.color = "#F36528";
            iconText.style.color = "#F36528";
            if (val.match(uppercase)) {
                uppercase_.style.color = "#22C32A";
            } else {
                uppercase_.style.color = "#F36528";
            }
            if (val.match(lowercase)) {
                lowercase_.style.color = "#22C32A";
            } else {
                lowercase_.style.color = "#F36528";
            }
            if (val.match(numbers)) {
                numbers_.style.color = "#22C32A";
            } else {
                numbers_.style.color = "#F36528";
            }
            if (val.match(symbols)) {
                symbols_.style.color = "#22C32A";
            } else {
                symbols_.style.color = "#F36528";
            }
            if (val.length >= 8) {
                charactersSize_.style.color = "#22C32A";
            } else {
                charactersSize_.style.color = "#F36528";
            }
            passwordMustInclude.style.color = "#F36528";
            $('#postValue').val('false');
            if ($('#checkboxSignIn').prop('checked') && $('#postValue').val() === 'true') {
                $('#submitButton').prop('disabled', false);
                $('#signupButtonText').css('color', '#F36528');
            } else {
                $('#submitButton').prop('disabled', true);
                $('#signupButtonText').css('color', '#D9E3E4');
            }
        }
        if(val === ""){
            indicator.classList.remove("active");
            input.style.borderColor = "#74A8AB";
            showHide.style.color = "#74A8AB";
            iconText.style.color = "#74A8AB";
            uppercase_.style.color = "#F36528";
            lowercase_.style.color = "#F36528";
            numbers_.style.color = "#F36528";
            symbols_.style.color = "#F36528";
            passwordMustInclude.style.color = "#F36528";
            $('#postValue').val('false');
            if ($('#checkboxSignIn').prop('checked') && $('#postValue').val() === 'true') {
                $('#submitButton').prop('disabled', false);
                $('#signupButtonText').css('color', '#F36528');
            } else {
                $('#submitButton').prop('disabled', true);
                $('#signupButtonText').css('color', '#D9E3E4');
            }
        }

    });
    $('#checkboxSignIn').change(function(){
        let submitButton = $('#submitButton');
        let signupButtonText = $('#signupButtonText');
        if ($(this).prop('checked') && $('#postValue').val() === 'true') {
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
</script>


