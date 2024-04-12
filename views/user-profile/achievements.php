<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/user-profile.css');
?>
<div class="usersAchievements">
    <div class="userAchievementsSection">
        <div class="userProfileMenuField">
            <span>My Profile</span>
            <ul class="userProfileMenu">
                <li><a href="/user-profile/achievements">My achievements</a></li>
                <li><a href="">My courses</a></li>
                <li><a href="/wishlist/index">Wishlist</a></li>
                <li><a href="">My card</a></li>
            </ul>
        </div>
        <div class="profilBody">
            <div class="usersCard">
                <div class="usersCardHead">
                    <img src="/images/usersAchievements.png" alt="">
                    <a href="/user-profile/achievements-edit"><img src="/images/editProfilAchievements.png" alt=""></a>
                </div>
                <div class="usersCardMain">
                    <h1>Ani Martirosian</h1>
                    <div class="info1">
                        <img src="/images/phonAchievements.png" alt="">
                        <span>369 258 147</span>
                    </div>
                    <div class="info2">
                        <img src="/images/mailAchievements.png" alt="">
                        <span>a@martirosian.com</span>
                    </div>
                    <div class="info3">
                        <img src="/images/linkdinAchievements.png" alt="">
                        <span>Ani Martirosian</span>
                    </div>
                </div>
            </div>
            <div class="certificate">
                <div class="cartificateImg">
                    <img src="/images/certificateAchievements.png" alt="">
                </div>
                <div class="cartificateImgTxt">
                    <span>1C: Payroll and personnel management</span>
                    <img style="float: right" src="/images/downloade.png" alt="">
                </div>

            </div>
        </div>
    </div>
</div>
