<!-- Mariam ev Harut-->
<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/user-profile.css?v=4');
?>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<?php
$language = $_COOKIE['language'];
$class1 = '';
if ($language == 'en') {
    $class1 = 'usersProfileEn';
} elseif ($language == 'am') {
    $class1 = 'usersProfileAm';

} elseif ($language == 'ru') {
    $class1 = 'usersProfileRu';
}
?>
<div class="usersAchievementsH usersAchievements <?php echo $class1; ?>">
    <div class="userAchievementsSection llllll">
        <div class="userCreateTitleField">
            <a href="javascript:history.go(-1)" class="managmentBack">
                <img src="/images/backButtonCheckout.png" alt="" class="backButtonCheckout">
            </a>
            <div><?=$GLOBALS['text']['tabletachievement']?></div>
        </div>
        <div class="userProfileMenuField">
            <span><?=$GLOBALS['text']['achievementsTitle']?></span>
            <ul class="userProfileMenu">
                <li><a href="/user-profile/achievements"><?=$GLOBALS['text']['tabletachievement']?></a></li>
                <li><a href="/courses/my-courses"><?=$GLOBALS['text']['tabletMyCourse']?></a></li>
                <li><a href="/wishlist/index"><?=$GLOBALS['text']['tabletWishlist']?></a></li>
            </ul>
        </div>
        <div class="profilBody">
            <div class="myCoursesProfileField">
                <div class="myCoursesFieldSection">
                    <div class="myCoursesFieldSectionLeft">
                        <?php if(!empty(Yii::$app->user->identity->image)){?>
                            <img src="/<?=Yii::$app->user->identity->image?>" alt="">
                        <?php }else{?>
                            <img src="/images/avatar.png" alt="">
                        <?php } ?>
                        <span><?php if(!empty(Yii::$app->user->identity->username)){echo Yii::$app->user->identity->username;}?></span>
                        <div class="usersProfileInfo">
                            <?php if (Yii::$app->user->identity->phone) { ?>
                                <div class="usersProfileInfoPhone">
                                    <img src="/images/phonAchievements.png" alt="">
                                    <span><?php if(!empty(Yii::$app->user->identity->phone)){echo Yii::$app->user->identity->phone;}?></span>
                                </div>
                            <?php } ?>
                            <?php if (Yii::$app->user->identity->email) { ?>
                                <div class="usersProfileInfoEmail">
                                    <img src="/images/mailAchievements.png" alt="">
                                    <span><?php if(!empty(Yii::$app->user->identity->email)){echo Yii::$app->user->identity->email;}?></span>
                                </div>
                            <?php } ?>
                            <?php if (Yii::$app->user->identity->linkdin_url) { ?>
                                <div class="usersProfileInfoLinkdin">
                                    <img src="/images/linkdinAchievements.png" alt="">
                                    <?php if(!empty(Yii::$app->user->identity->linkdin_url)){?>
                                        <a href="<?=Yii::$app->user->identity->linkdin_url?>" target="_blank"><?=Yii::$app->user->identity->username?></a>
                                    <?php }?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="myCoursesFieldSectionRight">
                        <a href="/user-profile/achievements-edit"><img src="/images/editIconMyCourses.png" alt=""></a>
                    </div>
                </div>
            </div>
            <?php if (!empty($certificates)){?>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php foreach ($certificates as $certificate){?>
                        <div class="swiper-slide">
                            <div class="certificate">
                                <div class="cartificateImg">
                                    <img src="<?= $certificate['certificate_img'] ?>" alt="">
                                </div>
                                <div class="cartificateImgTxt">
                                    <span><?= $certificate['lesson_name'] ?></span>
                                    <img src="/images/downloade.png" alt="" class="downloadeButton">
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <?php }else{?>
                <div class="textForEmpty">
                    <span><?=$GLOBALS['text']['emptyArchievement']?></span>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
    // download sertificate
    $('.downloadeButton').on("click", function () {
        var imageSrc = $(this).closest('.certificate').find('.cartificateImg img').attr('src');
        var link = document.createElement('a');
        link.href = imageSrc;
        link.download = imageSrc.split('/').pop();
        link.click();
    });
</script>
