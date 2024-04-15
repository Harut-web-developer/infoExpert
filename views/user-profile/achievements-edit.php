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
        <div class="profilBody_">
            <div class="userCreateFieldForms_">
                <form action="">
                    <div class="userPhotoFields_">
                        <div class="usersCardHead_">
                            <img class="cardImg_" src="/images/usersAchievements.png" alt="">
                            <div class="middle">
                                <div class="text"><a class="editPhoto" href="">Edit photo</a></div>
                            </div>
                        </div>
                        <div class="usersCardMain_">
                            <h1>Ani Martirosian</h1>
                            <div class="info1_">
                                <img src="/images/phonAchievements.png" alt="">
                                <span>369 258 147</span>
                            </div>
                            <div class="info2_">
                                <img src="/images/mailAchievements.png" alt="">
                                <span>a@martirosian.com</span>
                            </div>
                            <div class="info3_">
                                <img src="/images/linkdinAchievements.png" alt="">
                                <span>Ani Martirosian</span>
                            </div>
                        </div>
                    </div>
                    <div class="userInputsFields_">
                        <div class="userFormsInput_">
                            <label for="">Name/Surname</label>
                            <input type="text">
                        </div>
                        <div class="userFormsInput_">
                            <label for="">Phone</label>
                            <input type="number">
                        </div>
                        <div class="userFormsInput_">
                            <label for="">Mail</label>
                            <input type="email">
                        </div>
                        <div class="userFormsInput_">
                            <label for="">Linkedin profile link</label>
                            <input type="text">
                        </div>
                        <div class="userFormsInput_">
                            <label for="attachCv">CV</label>
                            <div id="attachCv_" class="cvFileField_">
                                <input class="cvFile_" type="file">
                                <div class="attachCv_">
                                    <span>Attach file</span>
                                    <img src="/images/scriptIcon.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="userFormsBtn_">
                            <button>
                                <img src="/images/userSaveBtn.png" alt="">
                                <span>SAVE</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
