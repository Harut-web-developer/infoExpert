<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/lessons.css');
$this->registerJsFile('https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js', ['type' => "module"]);
$this->registerJsFile('https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js', ['nomodule' => true]);
?>
<div class="personelManagement">
    <div class="titleMan">
        <a href="javascript:history.go(-1)" class="managmentBackButton">
            <img class="ellipseButton" src="/images/Ellipse2.png" alt="">
            <img class="backButton" src="/images/backButton.png" alt="">
        </a>
        1C: Payroll and personnel management
        <div class='large-font'>
            <ion-icon name="heart">
                <div class='red-bg'></div>
            </ion-icon>
        </div>
    </div>
    <div class="topDivFlex">
        <div class="infotxt">
            <img class="rightImg" src="/images/personel-management-1.png" alt="">
            The "1C։ Payroll and personnel management" course, offered by iNFOEXPERT Academy, will teach you the following in the<br>
            . Personnel management and payroll,<br>
            . Control of personnel policy,<br>
            . Calculation of wages and other equivalent payments,<br>
            . Planning, organization, and control of personnel work,<br>
            . Performance statistics<br><br class="brNone">
            <img class="rightImgM" src="/images/personel-management-1.png" alt="">
            Number of courses:&nbsp;9 + 1 exam /2 days a week/․<br>
            A Certificate is given at the end in both Armenian and English.<br><br class="brNone">
            <div class="leftDipl diplomW">
                <span>IT CAN BE YOURS</span>
                <img src="/images/personal-management-sertifikat.png" alt="">
            </div>
            Participating in the course at the iNFOEXPERT Academy has the following benefits: <br>
            . Free access to 1C base for the duration of studies and for one more month after graduation (access from any point and computer),<br>
            . Job offers to the best by the iNFOEXPERT company,<br>
            . 50% discount for course participation for students who choose accounting and/or finance,<br>
            . 20% discount on the price of the program if you buy it.
        </div>
    </div>
    <div class="divBottom">
        <div class="bottomDiv">
            <div class="leftDipl diplomM">
                <span>IT CAN BE YOURS</span>
                <img src="/images/personal-management-sertifikat.png" alt="">
            </div>
            <div class="rightImgBottom">
                <span>TUTORS - MEET YOUR HERO</span>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!--Like js-->
<script>
    document.querySelectorAll('.personelManagement ion-icon').forEach(icon => {
        icon.addEventListener('click', function() {
            this.classList.toggle('active');
        });
    });
    $(document).ready(function() {
        $('.managementBtnDiv button').on("click", function () {
            window.location.href = '/my-card/checkout';
        })
    })
</script>