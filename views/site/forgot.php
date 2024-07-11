<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/forgot.css?v=2');
?>
<div class="forgot">
    <div class="contentForgot">
        <div class="lostPassword">LOST YOUR PASSWORD?</div>
        <div class="enterMail">Enter the email associated with your account and we'll send an email to change your password</div>
        <form action="forgot" method="POST">
            <div class="inputMail">
                <input type="email" placeholder="<?= 'Email Address' ?>" name="email" >
            </div>
            <button type="submit" class="sendForgot">
                <img src="/images/Vector.png" alt="">
                <span>SEND</span>
            </button>
        </form>
    </div>
</div>
