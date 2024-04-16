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
                    <div class="userAchievementsEditLeft">
                            <div class="usersCardHead_">
                                <img class="cardImg_" src="/images/usersAchievements.png" alt="">
                                <div class="middle">
                                    <span class="editPhoto" href="">Edit photo</span>
                                    <input type="file">
                                </div>
                            </div>
                            <span>Ani Martirosian</span>
                            <div class="usersCardMain_">
                                <div class="sameInfo">
                                    <img src="/images/phonAchievements.png" alt="">
                                    <span>369 258 147</span>
                                </div>
                                <div class="sameInfo">
                                    <img src="/images/mailAchievements.png" alt="">
                                    <span>a@martirosian.com</span>
                                </div>
                                <div class="sameInfo">
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
                            <label for="attachCvEdit">CV</label>
                            <div id="attachCvEdit" class="cvFileFieldEdit">
                                <input class="cvFileEdit" type="file">
                                <div class="attachCvEdit">
                                    <span>Attach file</span>
                                    <img class="attachCvImg" src="/images/scriptIcon.png" alt="">
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
<?php $this->registerJsFile('@web/js/user-create.js', ['defer' => true]); ?>