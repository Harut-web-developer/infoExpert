<!-- Mariam 50 ev Harut 50-->
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
                        <?php if(!empty(Yii::$app->user->identity->image)){?>
                            <img class="avatar" src="/<?=Yii::$app->user->identity->image?>" alt="">
                        <?php }else{?>
                            <img class="avatar" src="/images/avatar.png" alt="">
                        <?php } ?>
                        <span class="userAddPhotoTextMobile"><?=$GLOBALS['text']['editProfilePhoto']?></span>
                        <input type="file" name="image">
                    </div>
                    <div class="userInputsFieldsMobile">
                        <div class="userFormsInputMobile">
                            <input type="text" placeholder="<?=$GLOBALS['text']['editProfileName']?>" name="username" required value="<?=Yii::$app->user->identity->username?>">
                        </div>
                        <div class="userFormsInputMobile">
                            <input type="number" placeholder="<?=$GLOBALS['text']['editProfilePhone']?>" name="phone" required value="<?=Yii::$app->user->identity->phone?>">
                        </div>
                        <div class="userFormsInputMobile">
                            <input type="email" placeholder="<?=$GLOBALS['text']['editProfileMail']?>" name="email" required value="<?=Yii::$app->user->identity->email?>">
                        </div>
                        <div class="userFormsInputMobile">
                            <input type="text" placeholder="<?=$GLOBALS['text']['editProfileLinkdin']?>" name="linkdin_url" value="<?=Yii::$app->user->identity->linkdin_url?>">
                        </div>
                        <div class="userFormsInputMobileCv">
                            <div id="attachCvMobile" class="cvFileFieldMobile">
                                <input class="cvFileMobile" type="file" name="cv">
                                <div class="attachCvMobile">
                                    <span><?=$GLOBALS['text']['editProfileCv']?></span>
                                    <img src="/images/scriptIcon.png" alt="">
                                </div>
                                <?php if (Yii::$app->user->identity->cv){?>
                                    <input class="nohiddenMobile" type="text" value="<?=Yii::$app->user->identity->cv?>">
                                <?php }?>
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
