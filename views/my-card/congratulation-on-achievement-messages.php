<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/my-card.css');
?>
<div class="congratulation">
    <div class="congratulationMain">
        <h1 class="spanHed"><?=$GLOBALS['text']['congratulationTitle']?></h1>
        <p class="spanAllCourses"><?=$GLOBALS['text']['congratulationText']?></p>
        <div class="CongratulationApplyNowBtnField">
            <a class="CongratulationCoursesHref" href="/personel-management/index">
                <img src="/images/conbtn.png" alt="">
                <span><?=$GLOBALS['text']['congratulationBtn']?></span>
            </a>
        </div>
    </div>
</div>
