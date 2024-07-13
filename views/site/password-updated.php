<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/verification.css');
?>
<div class="passwordUpdated">
    <div class="passwordUpdatedContent">
        <video id="myVideo" src="/images/AnimationPasswordUpdated.webm" alt="" autoplay muted></video>
<!--        <img src="/images/AnimationPasswordUpdated.gif" alt="" loop="">-->
        <div class="passwordUpdatedTitle">PASSWORD UPDATED!</div>
        <div class="successfully">Your password has been changed successfully.</div>
    </div>
</div>
<script>
    document.getElementById('myVideo').addEventListener('ended', function() { });
</script>