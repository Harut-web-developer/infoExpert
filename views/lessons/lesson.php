<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/lessons.css?v=2');
$this->registerJsFile('https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js', ['type' => "module"]);
$this->registerJsFile('https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js', ['nomodule' => true]);
?>
<div class="personelManagement">
    <div class="titleMan">
        <a href="javascript:history.go(-1)" class="managmentBackButton">
            <img class="ellipseButton" src="/images/Ellipse2.png" alt="">
            <img class="backButton" src="/images/backButton.png" alt="">
        </a>
        <span><?=$lesson['lesson_name']?></span>
        <div class="sizeLikeField">
            <div class='large-font'>
                <ion-icon name="heart">
                    <div class='red-bg'></div>
                </ion-icon>
            </div>
        </div>
    </div>
    <div class="topDivFlex">
        <div class="infotxt">
            <div class="leftDipl diplomW">
                <span><?=$GLOBALS['text']['lessonBeYour']?></span>
                <img src="/images/personal-management-sertifikat.png" alt="">
            </div>
            <img class="rightImg" src="/images/personel-management-1.png" alt="">
            <p><?=$lesson['lesson_content']?></p>
        </div>
    </div>
    <div class="divBottom">
        <div class="bottomDiv">
            <div class="leftDipl diplomM">
                <span><?=$GLOBALS['text']['lessonBeYour']?></span>
                <img src="/images/personal-management-sertifikat.png" alt="">
            </div>
            <div class="rightImgBottom">
                <span><?= $GLOBALS['text']['lessonsTutors']?></span>
                <div class="card_">
                    <div class="card-image"><img src="/images/alumnigirl.png" alt=""></div>
                    <div class="card-info">
                        <p class="nameCard">Manana Davtyan</p>
                        <p class="textCard">iNFOEXPERT Academy trainer, Head of Service Department, qualified 1C program specialist in RA․</p>
                        <img src="/images/linkedinLesson.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="bottomImages" class="bottomImages">
        <span class="amdFix">XXXXX AMD</span>
        <div class="buttonDiv">
            <div class="managementBtnDiv">
                <button>
                    <img src="/images/buycoursebtn.png" alt="">
                    <span class="button1"><?=$GLOBALS['text']['buyNowBtn']?></span>
                </button>
            </div>
            <div class="managementBtnDivCourse">
                <a href="/courses/index">
                    <img src="/images/seeallcourse.png" alt="">
                    <span class="button2"><?=$GLOBALS['text']['seeAllCoursesBtn']?></span>
                </a>
            </div>
        </div>
    </div>
</div>
<!--Like js-->
<script>
    document.querySelectorAll('.personelManagement ion-icon').forEach(icon => {
        icon.addEventListener('click', function() {
            this.classList.toggle('active');
        });
    });
</script>