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
<div class="usersAchievements <?php echo $class1; ?>"  id="editContent">
    <div class="userAchievementsSection">
        <div class="userProfileMenuField">
            <span><?=$GLOBALS['text']['editProfileTitle']?></span>
            <ul class="userProfileMenu">
                <li><a href="/user-profile/achievements"><?=$GLOBALS['text']['tabletachievement']?></a></li>
                <li><a href="/courses/my-courses"><?=$GLOBALS['text']['tabletMyCourse']?></a></li>
                <li><a href="/wishlist/index"><?=$GLOBALS['text']['tabletWishlist']?></a></li>
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
                <form action="" method="post" enctype='multipart/form-data'>
                    <div class="userAchievementsEditLeft">
                        <div class="usersCardHead_">
                            <?php if(!empty(Yii::$app->user->identity->image)){?>
                                <img class="cardImg_" src="/<?=Yii::$app->user->identity->image?>" alt="">
                           <?php }else{?>
                                <img class="cardImg_" src="/images/avatar.png" alt="">
                           <?php } ?>
                            <div class="middle">
                                <span class="editPhoto" href=""><?=$GLOBALS['text']['editUserEditPhoto']?></span>
                                <input type="file" name="image">
                            </div>
                        </div>
                        <span><?php if(!empty(Yii::$app->user->identity->username)){echo Yii::$app->user->identity->username;}?></span>
                        <div class="usersCardMain_">
                            <div class="sameInfo">
                                <img src="/images/phonAchievements.png" alt="">
                                <span><?php if(!empty(Yii::$app->user->identity->phone)){echo Yii::$app->user->identity->phone;}?></span>
                            </div>
                            <div class="sameInfo">
                                <img src="/images/mailAchievements.png" alt="">
                                <span><?php if(!empty(Yii::$app->user->identity->email)){echo Yii::$app->user->identity->email;}?></span>
                            </div>
                            <div class="sameInfo">
                                <img src="/images/linkdinAchievements.png" alt="">
                                <?php if(!empty(Yii::$app->user->identity->linkdin_url)){?>
                                    <a href="<?=Yii::$app->user->identity->linkdin_url?>" target="_blank"><?=Yii::$app->user->identity->username?></a>
                                <?php }?>
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
                            <input type="text" name="username" required value="<?=Yii::$app->user->identity->username?>">
                        </div>
                        <div class="userFormsInput_">
                            <label for=""><?=$GLOBALS['text']['editUserPhone']?></label>
                            <input type="number" name="phone" required value="<?=Yii::$app->user->identity->phone?>">
                        </div>
                        <div class="userFormsInput_">
                            <label for=""><?=$GLOBALS['text']['editUserMail']?></label>
                            <input type="email" name="email" required value="<?=Yii::$app->user->identity->email?>">
                        </div>
                        <div class="userFormsInput_ lllyy">
                            <label for=""><?=$GLOBALS['text']['editUserLinkdin']?></label>
                            <input type="text" name="linkdin_url"  value="<?=Yii::$app->user->identity->linkdin_url?>">
                        </div>
                        <div class="userFormsInput_">
                            <label for="attachCvEdit"><?=$GLOBALS['text']['editUserCv']?></label>
                            <div id="attachCvEdit" class="cvFileFieldEdit">
                                <input class="cvFileEdit" type="file" name="cv">
                                <div class="attachCvEdit">
                                    <span><?=$GLOBALS['text']['editUserAttach']?></span>
                                    <img class="attachCvImg" src="/images/scriptIcon.png" alt="">
                                </div>
                                <?php if (!empty(Yii::$app->user->identity->cv)){ ?>
                                    <input class="nohidden" type="text" value="<?=Yii::$app->user->identity->cv?>">
                                <?php } ?>
                            </div>
                        </div>
                        <div class="userFormsBtn_">
                            <button type="submit">
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
