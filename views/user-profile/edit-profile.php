<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/user-profile.css?v=4');
?>
<div class="usersAchievements usersProfileHeight"
    <div class="userAchievementsSection">
        <div class="userCreateField">
            <div class="userCreateTitleField">
                <a href="javascript:history.go(-1)" class="managmentBack">
                    <img src="/images/backButtonCheckout.png" alt="" class="backButtonCheckout">
                </a>
                <div><?=$GLOBALS['text']['editProfileTitle']?></div>
            </div>
            <span class="userCreateMoreInfo"><?=$GLOBALS['text']['editProfileMoreInfo']?></span>
            <div class="userCreateFieldFormsMobile">
                <form action="" method="post" enctype="multipart/form-data" >
                    <div class="userPhotoFieldsMobile">
                        <span class="userAddPhotoTextMobile"><?=$GLOBALS['text']['editProfilePhoto']?></span>
                        <input type="file" name="image" required>
                    </div>
                    <div class="userInputsFieldsMobile">
                        <div class="userFormsInputMobile">
                            <input type="text" placeholder="<?=$GLOBALS['text']['editProfileName']?>" name="username" required>
                        </div>
                        <div class="userFormsInputMobile">
                            <input type="number" placeholder="<?=$GLOBALS['text']['editProfilePhone']?>" name="phone" required>
                        </div>
                        <div class="userFormsInputMobile">
                            <input type="email" placeholder="<?=$GLOBALS['text']['editProfileMail']?>" name="email" required>
                        </div>
                        <div class="userFormsInputMobile">
                            <input type="text" placeholder="<?=$GLOBALS['text']['editProfileLinkdin']?>" name="linkdin_url" required>
                        </div>
                        <div class="userFormsInputMobile">
                            <div id="attachCvMobile" class="cvFileFieldMobile">
                                <input class="cvFileMobile" type="file" name="cv" required>
                                <div class="attachCvMobile">
                                    <span><?=$GLOBALS['text']['editProfileCv']?></span>
                                    <img src="/images/scriptIcon.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="userFormsBtn">
                            <button type="submit">
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
