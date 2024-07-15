<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/verification.css');
?>
<div class="passwordUpdated">
    <div class="passwordUpdatedContent">
        <video id="myVideo" src="/images/AnimationPasswordUpdated.webm" alt="" autoplay muted></video>
        <div class="passwordUpdatedTitle"><?=$GLOBALS['text']['passwordUpdatedTitle']?></div>
        <div class="successfully"><?=$GLOBALS['text']['successfully']?></div>
    </div>
</div>
<script>
    document.getElementById('myVideo').addEventListener('ended', function() { });
</script>