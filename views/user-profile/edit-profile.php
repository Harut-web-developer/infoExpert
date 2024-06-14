<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/user-profile.css?v=1');
?>
<div class="usersAchievements usersProfileHeight"
    <div class="userAchievementsSection">
        <div class="userCreateField">
            <div class="userCreateTitleField">
                <img src="/images/backButtonCheckout.png" alt="" class="backButtonCheckout">
                <div><?=$GLOBALS['text']['editProfileTitle']?></div>
            </div>
            <span class="userCreateMoreInfo"><?=$GLOBALS['text']['editProfileMoreInfo']?></span>
            <div class="userCreateFieldFormsMobile">
                <form action="">
                    <div class="userPhotoFieldsMobile">
                        <span class="userAddPhotoTextMobile"><?=$GLOBALS['text']['editProfilePhoto']?></span>
                        <input type="file">
                    </div>
                    <div class="userInputsFieldsMobile">
                        <div class="userFormsInputMobile">
                            <input type="text" placeholder="<?=$GLOBALS['text']['editProfileName']?>">
                        </div>
                        <div class="userFormsInputMobile">
                            <input type="number" placeholder="<?=$GLOBALS['text']['editProfilePhone']?>">
                        </div>
                        <div class="userFormsInputMobile">
                            <input type="email" placeholder="<?=$GLOBALS['text']['editProfileMail']?>">
                        </div>
                        <div class="userFormsInputMobile">
                            <input type="text" placeholder="<?=$GLOBALS['text']['editProfileLinkdin']?>">
                        </div>
                        <div class="userFormsInputMobile">
                            <div id="attachCvMobile" class="cvFileFieldMobile">
                                <input class="cvFileMobile" type="file">
                                <div class="attachCvMobile">
                                    <span><?=$GLOBALS['text']['editProfileCv']?></span>
                                    <img src="/images/scriptIcon.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="userFormsBtn">
                            <button>
                                <img src="/images/userSaveBtn.png" alt="">
                                <span><?=$GLOBALS['text']['editProfileSave']?></span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $this->registerJsFile('@web/js/user-create.js', ['defer' => true]); ?>
