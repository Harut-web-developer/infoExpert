<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/user-profile.css?v=3');
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
<div class="userCreateBg <?php echo $class1; ?>">
    <div class="userCreateField">
        <div class="userCreateTitleField">
            <a href="javascript:history.go(-1)" class="managmentBack">
                <img src="/images/backButtonCheckout.png" alt="" class="backButtonCheckout">
            </a>
            <div><?=$GLOBALS['text']['profileTitle']?></div>
        </div>
        <span class="userCreateMoreInfo"><?=$GLOBALS['text']['userCreateMoreInfo']?></span>
        <div class="userProfileMenuField bbbbb">
            <span><?=$GLOBALS['text']['profileTitle']?></span>
            <ul class="userProfileMenu">
                <li><a href="/user-profile/achievements"><?=$GLOBALS['text']['tabletachievement']?></a></li>
                <li><a href="/courses/my-courses"><?=$GLOBALS['text']['tabletMyCourse']?></a></li>
                <li><a href="/wishlist/index"><?=$GLOBALS['text']['tabletWishlist']?></a></li>
                <li><a href="/my-card/index"><?=$GLOBALS['text']['tabletCard']?></a></li>
            </ul>
        </div>
        <div class="userCreateFieldForms">
            <form action="" method="post" enctype='multipart/form-data'>
                <div class="userPhotoFields">
<!--                    <img src="/images/usersAchievements.png" alt="">-->
<!--                    nkar yntreluc petqa es img i mech baci-->
                    <span class="userAddPhotoText"><?=$GLOBALS['text']['usercreatePhoto']?></span>
                    <input type="file" name="image" required>
                </div>
                <div class="userInputsFields">
                    <div class="userFormsInput">
                        <label for=""><?=$GLOBALS['text']['usercreateName']?></label>
                        <input type="text" name="username" required>
                    </div>
                    <div class="userFormsInput">
                        <label for=""><?=$GLOBALS['text']['usercreatePhone']?></label>
                        <input type="number" name="phone" required>
                    </div>
                    <div class="userFormsInput">
                        <label for=""><?=$GLOBALS['text']['usercreateMail']?></label>
                        <input type="email" name="email" required>
                    </div>
                    <div class="userFormsInput">
                        <label for=""><?=$GLOBALS['text']['usercreateLinkdin']?></label>
                        <input type="text" name="linkdin_url" required>
                    </div>
                    <div class="userFormsInput">
                        <label for="attachCv"><?=$GLOBALS['text']['usercreateCv']?></label>
                        <div id="attachCv" class="cvFileField">
                            <input class="cvFile" type="file" name="cv" required>
                            <div class="attachCv">
                                <span><?=$GLOBALS['text']['usercreateAttach']?></span>
                                <img src="/images/scriptIcon.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="userFormsBtn">
                        <button type="submit">
                            <img src="/images/userSaveBtn.png" alt="">
                            <span><?=$GLOBALS['text']['usercreateSave']?></span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="userCreateFieldFormsMobile">
            <form action="">
                <div class="userPhotoFieldsMobile">
                    <span class="userAddPhotoTextMobile"><?=$GLOBALS['text']['usercreatePhoto']?></span>
                    <input type="file">
                </div>
                <div class="userInputsFieldsMobile">
                    <div class="userFormsInputMobile">
                        <input type="text" placeholder="<?=$GLOBALS['text']['usercreateName']?>">
                    </div>
                    <div class="userFormsInputMobile">
                        <input type="number" placeholder="<?=$GLOBALS['text']['usercreatePhone']?>">
                    </div>
                    <div class="userFormsInputMobile">
                        <input type="email" placeholder="<?=$GLOBALS['text']['usercreateMail']?>">
                    </div>
                    <div class="userFormsInputMobile">
                        <input type="text" placeholder="<?=$GLOBALS['text']['usercreateLinkdin']?>">
                    </div>
                    <div class="userFormsInputMobile">
                        <div id="attachCvMobile" class="cvFileFieldMobile">
                            <input class="cvFileMobile" type="file">
                            <div class="attachCvMobile">
                                <span><?=$GLOBALS['text']['usercreateCv']?></span>
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