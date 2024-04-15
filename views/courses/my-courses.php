<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/courses.css');
?>
<div class="myCourses">
    <div class="myCoursesSection">
        <div class="userProfileMenuField">
            <span>My Profile</span>
            <ul class="userProfileMenu">
                <li><a href="/user-profile/achievements">My achievements</a></li>
                <li><a href="/courses/my-courses">My courses</a></li>
                <li><a href="/wishlist/index">Wishlist</a></li>
                <li><a href="/my-card/index">My card</a></li>
            </ul>
        </div>
        <div class="mainCoursesFields">
            <div class="myCoursesProfileField">
                <div class="myCoursesFieldSection">
                    <div class="myCoursesFieldSectionLeft">
                        <img src="/images/profileimage.png" alt="">
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
                        <a href=""><img src="/images/editIconMyCourses.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="myCoursesFieldAcceptCourses">
                <div class="myCoursesBlocksField">
                    <div class="myCoursesBlocksFieldMain">
                        <img src="/images/courseimage.png" alt="">
                        <span>1C: Accounting 8.3</span>
                        <div class="myCoursesBlocksFieldMainInfo">
                            <div class="myCoursesRating">
                                <div class="ratingStarMyourse">
                                    <img src="/images/ratingStar.png" alt="">
                                    <img src="/images/ratingStar.png" alt="">
                                    <img src="/images/ratingStar.png" alt="">
                                    <img src="/images/ratingStar.png" alt="">
                                    <img src="/images/ratingStar.png" alt="">
                                </div>
                                <span>Leave a rating</span>
                            </div>
                            <div class="progress" style="height: 3px;">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="myCourseercentText">46 % complete</span>
                        </div>
                    </div>
                </div>
                <div class="myCoursesBlocksField">
                    <div class="myCoursesBlocksFieldMain">
                        <img src="/images/courseimage.png" alt="">
                        <span>1C: Accounting 8.3</span>
                        <div class="myCoursesBlocksFieldMainInfo">
                            <div class="myCoursesRating">
                                <div class="ratingStarMyourse">
                                    <img src="/images/ratingStar.png" alt="">
                                    <img src="/images/ratingStar.png" alt="">
                                    <img src="/images/ratingStar.png" alt="">
                                    <img src="/images/ratingStar.png" alt="">
                                    <img src="/images/ratingStar.png" alt="">
                                </div>
                                <span>Leave a rating</span>
                            </div>
                            <div class="progress" style="height: 3px;">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="myCourseercentText">46 % complete</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
