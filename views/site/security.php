<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/security.css?v=1');
?>

<div class="securitySection">
    <div class="securityFields">
        <form class="securityMainField" action="" method="post">
            <span class="securityTitle"><?=$GLOBALS['text']['securityTitle']?></span>
            <div class="passwordField">
                <div class="passwordInput">
                    <label for="passwordLabel"><?= $GLOBALS['text']['inputPassword'] ?></label>
                    <input type="password" id="passwordLabel" placeholder="<?= $GLOBALS['text']['inputCurrentPassword'] ?>" name="currentPassword" required>
                    <?php if (Yii::$app->session->hasFlash('oldIncorrectPassword')): ?>
                        <div class="warning">
                            <?= Yii::$app->session->getFlash('oldIncorrectPassword') ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="container_">
                    <div class="input-box">
<!--                        <input spellcheck="false" type="password" placeholder="--><?php //=$GLOBALS['text']['signupFormPassword']?><!--" name="User[password]" required>-->
                        <input spellcheck="false" type="password" placeholder="<?= $GLOBALS['text']['inputNewPassword'] ?>" name="newPassword" required>
                        <?php if (Yii::$app->session->hasFlash('newIncorrectPassword')): ?>
                            <div class="warning">
                                <?= Yii::$app->session->getFlash('newIncorrectPassword') ?>
                            </div>
                        <?php endif; ?>
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
                <input type="password" placeholder="<?= $GLOBALS['text']['inputConfirmPassword'] ?>" name="confirmPassword" required>
                <?php if (Yii::$app->session->hasFlash('newIncorrectPassword')): ?>
                    <div class="warning">
                        <?= Yii::$app->session->getFlash('newIncorrectPassword') ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php if (Yii::$app->session->hasFlash('failedChangePassword')): ?>
                <div class="warning">
                    <?= Yii::$app->session->getFlash('failedChangePassword') ?>
                </div>
            <?php endif; ?>
            <div class="buttonField">
                <button type="submit" id="submitButton" disabled>
                    <img src="/images/securityBtn.png" alt="">
                    <span id="signupButtonText"><?=$GLOBALS['text']['btnChangePassword']?></span>
                </button>
            </div>
        </form>
    </div>
</div>
<script>
    const input = document.querySelector(".input-box input"),
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
            text.textContent = "Password is strong";
            input.style.borderColor = "#22C32A";
            iconText.style.color = "#22C32A";
            uppercase_.style.color = "#22C32A";
            lowercase_.style.color = "#22C32A";
            numbers_.style.color = "#22C32A";
            symbols_.style.color = "#22C32A";
            charactersSize_.style.color = "#22C32A";
            passwordMustInclude.style.color = "#22C32A";
            $('#submitButton').prop('disabled', false);
        } else if(val.match(uppercase) && val.match(lowercase) && val.match(numbers) && val.length >= 6){
            text.textContent = "Password is medium";
            input.style.borderColor = "#cc8500";
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
            text.textContent = "Password is weak";
            input.style.borderColor = "#F36528";
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