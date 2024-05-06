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
                <li><a href="/courses/my-courses">My courses</a></li>
                <li><a href="/wishlist/index">Wishlist</a></li>
                <li><a href="/my-card/index">My card</a></li>
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
    </div>
</div>
