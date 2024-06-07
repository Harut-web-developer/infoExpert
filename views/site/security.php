<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/security.css');
?>

<div class="securitySection">
    <div class="securityFields">
        <form class="securityMainField">
            <span class="securityTitle">Account Security</span>
            <div class="emailField">
                <label for="emailSecurity">Email:</label>
                <div class="emailInput">
                    <input type="text" id="emailSecurity" value="hovsepyanh@994@gmail.com">
                    <img class="modalOpenBtn" src="/images/pencilModal.png" alt="">
                </div>
            </div>
            <div class="passwordField">
                <div class="passwordInput">
                    <label for="passwordLabel">Password:</label>
                    <input type="text" id="passwordLabel" placeholder="Enter current password">
                </div>
                <input type="text" placeholder="Enter new password">
                <input type="text" placeholder="Re-type new password">
            </div>
            <div class="buttonField">
                <button>
                    <img src="/images/securityBtn.png" alt="">
                    <span>CHANGE PASSWORD</span>
                </button>
            </div>
        </form>
    </div>
    <div class="securityModal">
        <div class="securityContentModal">
            <form class="modalMainField">
                <span class="modalTitle">Account Security</span>
                <div class="modalInputField">
                    <div class="modalEmailField">
                        <label for="modalEmail">Email:</label>
                        <input type="text" id="modalEmail" value="hovsepyanh1994@gmail.com">
                    </div>
                    <div class="modalPasswordField">
                        <label for="modalPassword">Password:</label>
                        <input type="password" id="modalPassword" value="asdv4as5df6bad4h">
                        <img class="modalEye" src="/images/signEyeClose.png" alt="">
                    </div>
                </div>
                <div class="modalBtnField">
                    <button>
                        <img src="/images/securityBtn.png" alt="">
                        <span>SAVE</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
