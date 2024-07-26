<!-- Mariam 50 ev Harut 50-->
<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/user-profile.css?v=3');
?>
<?php
$language = $_COOKIE['language'];
$class1 = '';
$class2 = '';
if ($language == 'en') {
    $class1 = 'usersProfileEn';
    $class2 = 'usersProfileHeightEn';
} elseif ($language == 'am') {
    $class1 = 'usersProfileAm';
    $class2 = 'usersProfileHeightAm';
} elseif ($language == 'ru') {
    $class1 = 'usersProfileRu';
    $class2 = 'usersProfileHeightRu';
}
?>
<div class="<?php echo $class2; ?> usersProfile <?php echo $class1; ?>">
    <div class="userProfileSection">
        <div class="userProfileMenuField">
            <span><?=$GLOBALS['text']['profileTitle']?></span>
            <ul class="userProfileMenu">
                <li><a href="/user-profile/achievements"><?=$GLOBALS['text']['tabletachievement']?></a></li>
                <li><a href="/courses/my-courses"><?=$GLOBALS['text']['tabletMyCourse']?></a></li>
                <li><a href="/wishlist/index"><?=$GLOBALS['text']['tabletWishlist']?></a></li>
            </ul>
        </div>
        <div class="userCreateTitleField">
            <a href="javascript:history.go(-1)" class="managmentBack">
                <img src="/images/backButtonCheckout.png" alt="" class="backButtonCheckout">
            </a>
            <div class="myProfileMobile"><?=$GLOBALS['text']['profileTitle']?></div>
        </div>
        <div class="userProfileMoreAboutField">
            <div class="fieldMoreAbout">
                <span><?=$GLOBALS['text']['userMoreInfo']?></span>
                <a href="/user-profile/user-create"><img src="/images/userAdd.png" alt=""></a>
            </div>
        </div>
    </div>
</div>
