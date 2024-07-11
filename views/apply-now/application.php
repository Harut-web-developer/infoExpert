<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/apply-now.css?v=1');
?>
<div class="application">
    <div class="applicationTextFields">
        <div class="applyApplicationTexts">
            <div class="applicationTitle"><?=$GLOBALS['text']['applicationTitle']?></div>
            <div class="applicationTextUnderline"><?=$GLOBALS['text']['applicationText']?></div>
        </div>
        <div class="applicationButton">
            <a href="/">
                <img src="/images/applicationBtn.png" alt="">
                <div><?=$GLOBALS['text']['applicationBtn']?></div>
            </a>
        </div>
    </div>
</div>
