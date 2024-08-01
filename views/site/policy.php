<!-- Mariam-->
<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/policy.css');
?>
<div class="policy">
    <div class="bodyPolicy">
        <div class="policyTitleAll">
            <a href="javascript:history.go(-1)" class="policyBackButton">
                <img class="backButton" src="/images/backButton.png" alt="">
                <img class="ellipseButton" src="/images/Ellipse2.png" alt="">
            </a>
            <div class="policyTitle"><?=$GLOBALS['text']['policy']?></div>
        </div>
        <div class="policiyTxt"><?=$GLOBALS['text']['privacyTexts']?></div>
    </div>

</div>

