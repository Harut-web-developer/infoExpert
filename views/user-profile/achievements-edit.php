<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/user-profile.css?v=2');
?>
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
<div class="usersAchievements <?php echo $class1; ?>"  id="editContent">
    <div class="userAchievementsSection">
        <div class="userProfileMenuField">
            <span><?=$GLOBALS['text']['editProfileTitle']?></span>
            <ul class="userProfileMenu">
                <li><a href="/user-profile/achievements"><?=$GLOBALS['text']['tabletachievement']?></a></li>
                <li><a href="/courses/my-courses"><?=$GLOBALS['text']['tabletMyCourse']?></a></li>
                <li><a href="/wishlist/index"><?=$GLOBALS['text']['tabletWishlist']?></a></li>
                <li><a href="/my-card/index"><?=$GLOBALS['text']['tabletCard']?></a></li>
            </ul>
        </div>
        <div class="userCreateTitleField">
            <a href="javascript:history.go(-1)" class="managmentBack">
                <img src="/images/backButtonCheckout.png" alt="" class="backButtonCheckout">
            </a>
            <div><?=$GLOBALS['text']['editUserProfileTitle']?></div>
        </div>
        <div class="profilBody_">
            <div class="userCreateFieldForms_">
                <form action="">
                    <div class="userAchievementsEditLeft">
                        <div class="usersCardHead_">
                            <img class="cardImg_" src="/images/usersAchievements.png" alt="">
                            <div class="middle">
                                <span class="editPhoto" href=""><?=$GLOBALS['text']['editUserEditPhoto']?></span>
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
                    <div class="editAchievementsBtn">
                        <a href="/user-profile/edit-profile">
                            <img src="/images/userSaveBtn.png" alt="">
                            <div><?=$GLOBALS['text']['editAchievementsBtn']?></div>
                        </a>
                    </div>
                    <div class="userInputsFields_">
                        <div class="userFormsInput_">
                            <label for=""><?=$GLOBALS['text']['editUserName']?></label>
                            <input type="text">
                        </div>
                        <div class="userFormsInput_">
                            <label for=""><?=$GLOBALS['text']['editUserPhone']?></label>
                            <input type="number">
                        </div>
                        <div class="userFormsInput_">
                            <label for=""><?=$GLOBALS['text']['editUserMail']?></label>
                            <input type="email">
                        </div>
                        <div class="userFormsInput_ lllyy">
                            <label for=""><?=$GLOBALS['text']['editUserLinkdin']?></label>
                            <input type="text">
                        </div>
                        <div class="userFormsInput_">
                            <label for="attachCvEdit"><?=$GLOBALS['text']['editUserCv']?></label>
                            <div id="attachCvEdit" class="cvFileFieldEdit">
                                <input class="cvFileEdit" type="file">
                                <div class="attachCvEdit">
                                    <span><?=$GLOBALS['text']['editUserAttach']?></span>
                                    <img class="attachCvImg" src="/images/scriptIcon.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="userFormsBtn_">
                            <button>
                                <img src="/images/userSaveBtn.png" alt="">
                                <span><?=$GLOBALS['text']['editUserBtn']?></span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $this->registerJsFile('@web/js/user-create.js', ['defer' => true]); ?>
