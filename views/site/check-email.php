<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/forgot.css?v=2');
?>
<div class="checkEmailDiv">
    <div class="contentCheckEmail">
        <video id="letter" src="/images/letter.webm" alt="letter" autoplay muted loop></video>
        <div class="checkEmail"><?=$GLOBALS['text']['checkEmail']?></div>
        <div class="digitCode"><?=$GLOBALS['text']['digitCode']?></div>
        <div class="didNotReceive"><?=$GLOBALS['text']['didNotReceive']?></div>
        <div class="checkSpam"><?=$GLOBALS['text']['checkSpam']?></div>
    </div>
</div>
