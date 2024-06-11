<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/security.css');
?>

<div class="securitySection">
    <div class="securityFields">
        <form class="securityMainField">
            <span class="securityTitle"><?=$GLOBALS['text']['securityTitle']?></span>
            <div class="emailField">
                <label for="emailSecurity"><?=$GLOBALS['text']['inputEmail']?></label>
                <div class="emailInput">
                    <input type="text" id="emailSecurity" value="hovsepyanh@994@gmail.com">
                    <img class="modalOpenBtn" src="/images/pencilModal.png" alt="">
                </div>
            </div>
            <div class="passwordField">
                <div class="passwordInput">
                    <label for="passwordLabel"><?=$GLOBALS['text']['inputPassword']?></label>
                    <input type="text" id="passwordLabel" placeholder="<?=$GLOBALS['text']['inputCurrentPassword']?>">
                </div>
                <input type="text" placeholder="<?=$GLOBALS['text']['inputNewPassword']?>">
                <input type="text" placeholder="<?=$GLOBALS['text']['inputConfirmPassword']?>">
            </div>
            <div class="buttonField">
                <button>
                    <img src="/images/securityBtn.png" alt="">
                    <span><?=$GLOBALS['text']['btnChangePassword']?></span>
                </button>
            </div>
        </form>
    </div>
    <div class="securityModal">
        <div class="securityContentModal">
            <form class="modalMainField">
                <span class="modalTitle"><?=$GLOBALS['text']['securityTitle']?></span>
                <div class="modalInputField">
                    <div class="modalEmailField">
                        <label for="modalEmail"><?=$GLOBALS['text']['inputEmail']?></label>
                        <input type="text" id="modalEmail" value="hovsepyanh1994@gmail.com">
                    </div>
                    <div class="modalPasswordField">
                        <label for="modalPassword"><?=$GLOBALS['text']['inputPassword']?></label>
                        <input type="password" id="modalPassword" value="asdv4as5df6bad4h">
                        <img class="modalEye" src="/images/signEyeClose.png" alt="">
                    </div>
                </div>
                <div class="modalBtnField">
                    <button>
                        <img src="/images/securityBtn.png" alt="">
                        <span><?=$GLOBALS['text']['btnSave']?></span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
