<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/user-profile.css');
?>
<div class="usersProfile">
    <div class="userProfileSection">
        <div class="userProfileMenuField">
            <span><?=$GLOBALS['text']['profileTitle']?></span>
            <ul class="userProfileMenu">
                <li><a href="/user-profile/achievements"><?=$GLOBALS['text']['tabletachievement']?></a></li>
                <li><a href="/courses/my-courses"><?=$GLOBALS['text']['tabletMyCourse']?></a></li>
                <li><a href="/wishlist/index"><?=$GLOBALS['text']['tabletWishlist']?></a></li>
                <li><a href="/my-card/index"><?=$GLOBALS['text']['tabletCard']?></a></li>
            </ul>
        </div>
        <div class="userProfileMoreAboutField">
            <div class="fieldMoreAbout">
                <span><?=$GLOBALS['text']['userMoreInfo']?></span>
                <a href="/user-profile/user-create"><img src="/images/userAdd.png" alt=""></a>
            </div>
        </div>
    </div>
</div>
