<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/user-profile.css');
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
            <img src="/images/backButtonCheckout.png" alt="" class="backButtonCheckout">
            <div><?=$GLOBALS['text']['tabletachievement']?></div>
        </div>
        <div class="userProfileMenuField">
            <span><?=$GLOBALS['text']['achievementsTitle']?></span>
            <ul class="userProfileMenu">
                <li><a href="/user-profile/achievements"><?=$GLOBALS['text']['tabletachievement']?></a></li>
                <li><a href="/courses/my-courses"><?=$GLOBALS['text']['tabletMyCourse']?></a></li>
                <li><a href="/wishlist/index"><?=$GLOBALS['text']['tabletWishlist']?></a></li>
                <li><a href="/my-card/index"><?=$GLOBALS['text']['tabletCard']?></a></li>
            </ul>
        </div>
        <div class="profilBody">
            <div class="myCoursesProfileField">
                <div class="myCoursesFieldSection">
                    <div class="myCoursesFieldSectionLeft">
                        <img src="/images/profileimage.png" alt="">
                        <span>Ani Martirosian</span>
                        <div class="usersProfileInfo">
                            <div class="usersProfileInfoPhone">
                                <img src="/images/phonAchievements.png" alt="">
                                <span>369 258 147</span>
                            </div>
                            <div class="usersProfileInfoEmail">
                                <img src="/images/mailAchievements.png" alt="">
                                <span>a@martirosian.com</span>
                            </div>
                            <div class="usersProfileInfoLinkdin">
                                <img src="/images/linkdinAchievements.png" alt="">
                                <span>Ani Martirosian</span>
                            </div>
                        </div>
                    </div>
                    <div class="myCoursesFieldSectionRight">
                        <a href="/user-profile/achievements-edit"><img src="/images/editIconMyCourses.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="certificate">
                            <div class="cartificateImg">
                                <img src="/images/certificateAchievements.png" alt="">
                            </div>
                            <div class="cartificateImgTxt">
                                <span>1C: Payroll and personnel management</span>
                                <img src="/images/downloade.png" alt="">
                            </div>
                        </div>
                    </div>
<!-- Եթե այլ սերտիֆիկատներ կան օգտագործել այս կոդն -->
<!--                    <div class="swiper-slide">-->
<!--                        <div class="certificate">-->
<!--                            <div class="cartificateImg">-->
<!--                                <img src="/images/certificateAchievements.png" alt="">-->
<!--                            </div>-->
<!--                            <div class="cartificateImgTxt">-->
<!--                                <span>1C: Payroll and personnel management</span>-->
<!--                                <img src="/images/downloade.png" alt="">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</div>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
