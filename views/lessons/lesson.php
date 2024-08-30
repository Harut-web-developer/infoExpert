<!-- Mariam 60 ev Harut 40-->
<?php
use app\models\AcWishlist;
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/lessons.css?v=2');
$this->registerJsFile('https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js', ['type' => "module"]);
$this->registerJsFile('https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js', ['nomodule' => true]);
?>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<div class="personelManagement">
    <div class="titleMan">
        <a href="javascript:history.go(-1)" class="managmentBackButton">
            <img class="ellipseButton" src="/images/Ellipse2.png" alt="">
            <img class="backButton" src="/images/backButton.png" alt="">
        </a>
        <span><?=$lesson['lesson_name']?></span>
        <div class="sizeLikeField">
            <div class='large-font'>
                <ion-icon name="heart" data-id="<?=$lesson['id']?>" data-active="<?=AcWishlist::getWishlist($lesson['id'],1) ? AcWishlist::getWishlist($lesson['id'],1) : 0?>" data-type="1">
                    <div class='red-bg'></div>
                </ion-icon>
            </div>
        </div>
    </div>
    <?php
    if (isset(Yii::$app->user->identity->id) && Yii::$app->user->identity->role == null){
    if (!empty($change_video) && $check_lesson_exist){?>
        <div class="divBottom iframeField">
            <div class="posLeft">
                <div class="videoField">
                    <span><?=$change_video['name']?></span>
                    <div class="backgroundField">
                        <div style="cursor:pointer" data-action="<?=$action_hybrid ? '1' : '0'?>" data-video="<?=$change_video['id']?>" class="<?=!$check_video_watched ? 'backgroundVideo' : 'd-none' ?>" ><?=$GLOBALS['text']['clickToWatch']?></div>
                        <iframe <?=$change_video['type'] == 1 ? 'sandbox=""' : ''?> src="<?=$change_video['type'] == 1 ? '/' : ''?><?=$change_video['video']?>" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="lessonsNumberField">
                    <?php if (!empty($lesson_count)){
                        for ($i = 0; $i < count($lesson_count); $i++){?>
                            <button data-lesson="<?=$lesson['id']?>" data-number="<?=$lesson_count[$i]['lesson_count']?>" class="lessNumField clickVideoLesson">
                                <img src="/images/Ellipse2.png" alt="">
                                <span class="lesNum"><?=$lesson_count[$i]['lesson_count']?></span>
                            </button>
                        <?php }} ?>
                </div>
            </div>
        </div>
    <?php  }} ?>
    <div class="topDivFlex">
        <div class="infotxt">
            <?php if (!empty($lesson['certificate_img'])){?>
                <div class="leftDipl diplomW">
                    <span><?=$GLOBALS['text']['lessonBeYour']?></span>
                    <img src="/<?=$lesson['certificate_img']?>" alt="">
                </div>
            <?php } ?>
            <?php if (!empty($lesson['img'])){?>
                <img class="rightImg" src="/<?=$lesson['img']?>" alt="">
            <?php } ?>
                <div class="zxc"><?=$lesson['lesson_content']?></div>
        </div>
    </div>
    <div class="divBottom">
        <div class="bottomDiv">
            <?php if (!empty($lesson['certificate_img'])){?>
                <div class="leftDipl diplomM">
                    <span><?=$GLOBALS['text']['lessonBeYour']?></span>
                    <img src="/<?=$lesson['certificate_img']?>" alt="">
                </div>
            <?php } ?>
            <div class="rightImgBottom">
                <span><?= $GLOBALS['text']['lessonsTutors']?></span>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php if (!empty($tutors)){foreach ($tutors as $tutor) {?>
                            <div class="swiper-slide">
                                <div class="card_">
                                    <div class="card-image">
                                        <?php if (!empty($tutor['img'])){?>
                                            <img src="/<?=$tutor['img']?>" alt="">
                                        <?php }else{?>
                                            <img src="/images/avatar.png" alt="">
                                        <?php } ?>
                                    </div>
                                    <div class="card-info">
                                        <span class="nameCard"><?=$tutor['username']?></span>
                                        <span class="textCard"><?=$tutor['text']?></span>
                                        <img src="/images/linkedinLesson.png">
                                    </div>
                                </div>
                            </div>
                        <?php }} ?>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
    <div id="bottomImages" class="bottomImages">
        <span class="amdFix"><?=$lesson['price']?> AMD</span>
        <div class="buttonDiv">
            <div class="managementBtnDiv">
                <a href="/my-card/checkout?lesson_id=<?=$lesson['id']?>">
                    <img src="/images/buycoursebtn.png" alt="">
                    <span class="button1"><?=$GLOBALS['text']['buyNowBtn']?></span>
                </a>
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
<div class="popup-wrap-logged-video">
    <div class="popup-box-logged-video">
        <div class="logged-content-video">
            <span class="logged-txt"><?=$GLOBALS['text']['videoLessonsText']?></span>
            <span class="close-btn popup-close close-logged">x</span>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
    function lessonsFieldFixed(){
        document.addEventListener('scroll', function() {
            const bottomImages = document.getElementById('bottomImages');
            const footerBackground = document.getElementById('footerBackgroundM');
            const footerTop = footerBackground.getBoundingClientRect().top;
            const bottomImagesHeight = bottomImages.offsetHeight;
            const windowHeight = window.innerHeight;
            if (footerTop + bottomImagesHeight <= windowHeight) {
                bottomImages.classList.remove('fixed');
                bottomImages.classList.add('none');
            } else {
                bottomImages.classList.remove('none');
                bottomImages.classList.add('fixed');
            }
        });
    }
    if ($(window).width() <= 600){
        lessonsFieldFixed()
    }
</script>