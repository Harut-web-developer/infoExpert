<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/verification.css');
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"/>
<div class="newPassword">
    <form action="new-password" class="newPasswordForm" method="post">
        <span class="createNewPassword"><?=$GLOBALS['text']['createNewPassword']?></span>
        <div class="inputContent">
            <div class="container_">
                <div class="input-box">
                    <i class="fas fa-eye-slash show_hide"></i>
                    <input spellcheck="false" type="password" placeholder="<?=$GLOBALS['text']['newpassword']?>" name="newpassword" required>
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
            <?php
            $error = Yii::$app->session->getFlash('error');
            if ($error !== null) {?>
                <div class="errorText" role="alert"><?=$error?></div>
            <?php }?>
            <div class="input-box-2">
                <i class="fas fa-eye-slash show_hide-2"></i>
                <input class="confirmpassword" type="password" placeholder="<?=$GLOBALS['text']['confirmpassword']?>" name="confirmpassword" required>
            </div>
        </div>
        <button type="submit" class="newPasswordButton" id="submitButton" disabled>
            <img src="/images/securityBtn.png" alt="">
            <span id="signupButtonText"><?=$GLOBALS['text']['confirmpasswordupper']?></span>
        </button>
    </form>
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
        inputTwo = document.querySelector(".input-box-2 input"),
        showHide = document.querySelector(".show_hide"),
        showHideTwo = document.querySelector(".show_hide-2"),
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
    showHideTwo.addEventListener("click", ()=>{
        if(inputTwo.type === "password"){
            inputTwo.type = "text";
            showHideTwo.classList.replace("fa-eye-slash","fa-eye");
        }else {
            inputTwo.type = "password";
            showHideTwo.classList.replace("fa-eye","fa-eye-slash");
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
            $('#submitButton').prop('disabled', false);

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
            $('#submitButton').prop('disabled', true);

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
            $('#submitButton').prop('disabled', true);
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
            $('#submitButton').prop('disabled', true);
        }
    });
</script>