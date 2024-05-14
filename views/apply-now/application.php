<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/apply-now.css');
?>
<div class="application">
    <div class="applicationTextFields">
        <div class="applyApplicationTexts">
            <div class="applicationTitle"><?=$GLOBALS['text']['applicationTitle']?></div>
            <div class="applicationTextUnderline"><?=$GLOBALS['text']['applicationText']?></div>
        </div>
        <div class="applicationButton">
            <button>
                <img src="/images/applicationBtn.png" alt="">
                <span><?=$GLOBALS['text']['applicationBtn']?></span>
            </button>
        </div>
    </div>
</div>
