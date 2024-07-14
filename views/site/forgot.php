<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/forgot.css');
?>
<div class="forgot">
    <div class="contentForgot">
        <div class="lostPassword"><?=$GLOBALS['text']['lostPassword']?></div>
        <div class="enterMail"><?=$GLOBALS['text']['enterMail']?></div>
        <form action="forgot" method="POST">
            <div class="inputMail">
                <input type="email" placeholder="<?=$GLOBALS['text']['inputEmail']?>" name="email" >
            </div>
            <button type="submit" class="sendForgot">
                <img src="/images/Vector.png" alt="">
                <span><?=$GLOBALS['text']['send']?></span>
            </button>
        </form>
    </div>
</div>
