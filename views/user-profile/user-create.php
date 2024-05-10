<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/user-profile.css');
?>
<div class="userCreateBg">
    <div class="userCreateField">
        <div class="userProfileMenuField">
            <span><?=$GLOBALS['text']['profileTitle']?></span>
            <ul class="userProfileMenu">
                <li><a href="/user-profile/achievements"><?=$GLOBALS['text']['tabletachievement']?></a></li>
                <li><a href="/courses/my-courses"><?=$GLOBALS['text']['tabletMyCourse']?></a></li>
                <li><a href="/wishlist/index"><?=$GLOBALS['text']['tabletWishlist']?></a></li>
                <li><a href="/my-card/index"><?=$GLOBALS['text']['tabletCard']?></a></li>
            </ul>
        </div>
        <div class="userCreateFieldForms">
            <form action="">
                <div class="userPhotoFields">
<!--                    <img src="/images/usersAchievements.png" alt="">-->
<!--                    nkar yntreluc petqa es img i mech baci-->
                    <span class="userAddPhotoText"><?=$GLOBALS['text']['usercreatePhoto']?></span>
                    <input type="file">
                </div>
                <div class="userInputsFields">
                    <div class="userFormsInput">
                        <label for=""><?=$GLOBALS['text']['usercreateName']?></label>
                        <input type="text">
                    </div>
                    <div class="userFormsInput">
                        <label for=""><?=$GLOBALS['text']['usercreatePhone']?></label>
                        <input type="number">
                    </div>
                    <div class="userFormsInput">
                        <label for=""><?=$GLOBALS['text']['usercreateMail']?></label>
                        <input type="email">
                    </div>
                    <div class="userFormsInput">
                        <label for=""><?=$GLOBALS['text']['usercreateLinkdin']?></label>
                        <input type="text">
                    </div>
                    <div class="userFormsInput">
                        <label for="attachCv"><?=$GLOBALS['text']['usercreateCv']?></label>
                        <div id="attachCv" class="cvFileField">
                            <input class="cvFile" type="file">
                            <div class="attachCv">
                                <span><?=$GLOBALS['text']['usercreateAttach']?></span>
                                <img src="/images/scriptIcon.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="userFormsBtn">
                        <button>
                            <img src="/images/userSaveBtn.png" alt="">
                            <span><?=$GLOBALS['text']['usercreateSave']?></span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $this->registerJsFile('@web/js/user-create.js', ['defer' => true]); ?>
