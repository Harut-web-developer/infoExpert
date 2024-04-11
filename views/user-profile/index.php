<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/user-profile.css');
?>
<div class="usersProfile">
    <div class="userProfileSection">
        <div class="userProfileMenuField">
            <span>My Profile</span>
            <ul class="userProfileMenu">
                <li><a href="">My achievements</a></li>
                <li><a href="">My courses</a></li>
                <li><a href="">Wishlist</a></li>
                <li><a href="">My card</a></li>
            </ul>
        </div>
        <div class="userProfileMoreAboutField">
            <div class="fieldMoreAbout">
                <span>Let us know more about you</span>
                <a href="/user-profile/user-create"><img src="/images/user-edit.png" alt=""></a>
            </div>
        </div>
    </div>
</div>
