<?php
/** @var yii\web\View $this */
//$this->registerCssFile('@web/css/my-card.css');
?>
<style>
    .congratulation{
        width: 100%;
        height: 885px;
        background-image: url("../images/background-congratulation-on-achievement-messages.png");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .congratulationMain{
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-direction: column;
        height: 260px;
    }
    .spanHed{
        font-family: "RobotoSlab_",sans-serif;
        font-size: 48px;
        font-weight: 600;
        line-height: 63.3px;
        color: #F36528;
        text-align: center;
        margin: 0;
    }
    .spanAllCourses{
        font-family: "Roboto_",sans-serif;
        font-size: 35px;
        font-weight: 600;
        line-height: 41.02px;
        text-align: center;
        color: #FFFFFF;
        margin: 0;
    }
    .CongratulationApplyNowBtnField{
        /*position: relative;*/
        width: max-content;
        text-align: center;
    }
    .CongratulationApplyNowBtnField > a{
        background: transparent;
        border: none;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .CongratulationApplyNowBtnField > a:hover img{
        content: url("../images/conbtnhover.png");
    }
    .CongratulationApplyNowBtnField > a > span{
        color: #F36528;
        /*margin: 25px 0;*/
        position: absolute;
        /*left: 0px;*/
        font-family: 'Roboto_',sans-serif;
        font-size: 13px;
        font-weight: 600;
        /*line-height: 18.2px;*/
        text-align: center;
        text-decoration: none;
        width: 100%;
    }
    .CongratulationApplyNowBtnField > a:hover span{
        color: white;
    }
    @media screen and (max-width: 1100px) {
        .congratulationMain {
            height: 160px;
        }

        .CongratulationApplyNowBtnField > a > span {
            font-family: 'Roboto_',sans-serif;
            font-size: 8px;
            font-weight: 600;
            /*line-height: 9.38px;*/
            /*margin: 16px 0;*/
        }

        .congratulation {
            height: 480px;
        }
        .CongratulationApplyNowBtnField{
            width: 93.73px;
            height: 40px;
            padding-top: 0;
        }
        .CongratulationApplyNowBtnField > a > span{
            font-size: 8px;
            font-weight: 600;
            /*line-height: 9.38px;*/
            text-align: left;
            width: max-content;
            /*margin: 15px 16px;*/
        }
        .CongratulationApplyNowBtnField img{
            width: 93.73px;
            height: 40px;
        }
        .spanHed{
            font-size: 22px;
            font-weight: 600;
            line-height: 29.01px;
            text-align: left;
        }
        .spanAllCourses{
            font-size: 20px;
            font-weight: 600;
            line-height: 23.44px;
            text-align: left;
        }
    }
    @media screen and (max-width: 600px) {
        .congratulation {
            background: #5D9A9D;
            height: 700px;
        }
    }
</style>

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
