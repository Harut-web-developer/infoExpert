<!-- Mariam 50 ev Harut 50-->
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
                            <?php if (Yii::$app->user->identity->phone) { ?>
                                <div class="sameInfo">
                                    <img src="/images/phonAchievements.png" alt="">
                                    <span><?php if(!empty(Yii::$app->user->identity->phone)){echo Yii::$app->user->identity->phone;}?></span>
                                </div>
                            <?php } ?>
                            <?php if (Yii::$app->user->identity->email) { ?>
                                <div class="sameInfo">
                                    <img src="/images/mailAchievements.png" alt="">
                                    <span><?php if(!empty(Yii::$app->user->identity->email)){echo Yii::$app->user->identity->email;}?></span>
                                </div>
                            <?php } ?>
                            <?php if (Yii::$app->user->identity->linkdin_url) { ?>
                                <div class="sameInfo">
                                    <img src="/images/linkdinAchievements.png" alt="">
                                    <?php if(!empty(Yii::$app->user->identity->linkdin_url)){?>
                                        <a href="<?=Yii::$app->user->identity->linkdin_url?>" target="_blank"><?=Yii::$app->user->identity->username?></a>
                                    <?php }?>
                                </div>
                            <?php } ?>
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
<!--popup-->
<div class="popup-wrap-courses" style="display: <?=!empty($course_exist) ? 'flex' : 'none'?>">
    <div class="popup-box-courses">
        <div class="courses-input-x">
            <form class="ratingForm" action="/user-profile/rating" method="post">
                <div class="titleRating"><?=$GLOBALS['text']['ratingTitlePopup']?></div>
                <div class="lessonName"><?=$course_exist['lesson_name']?></div>
                <span class="ratingText"><?=$GLOBALS['text']['ratingTextPopup']?></span>
                <input type="hidden" name="lesson_id" value="<?=$course_exist['lessons_id']?>">
                <input type="hidden" name="<?= $this->renderDynamic('return Yii::$app->request->csrfParam;'); ?>" value="<?= $this->renderDynamic('return Yii::$app->request->csrfToken;'); ?>" />
                <div class="ratingField">
                    <input type="radio" id="rate_1" name="rating" value="1">
                    <label for="rate_1"><img src="/images/ratingWhite.png" alt=""></label>
                    <input type="radio" id="rate_2" name="rating" value="2">
                    <label for="rate_2"><img src="/images/ratingWhite.png" alt=""></label>
                    <input type="radio" id="rate_3" name="rating" value="3">
                    <label for="rate_3"><img src="/images/ratingWhite.png" alt=""></label>
                    <input type="radio" id="rate_4" name="rating" value="4">
                    <label for="rate_4"><img src="/images/ratingWhite.png" alt=""></label>
                    <input type="radio" id="rate_5" name="rating" value="5">
                    <label for="rate_5"><img src="/images/ratingWhite.png" alt=""></label>
                </div>
                <div class="textareaRating">
                    <textarea name="message" placeholder="<?=$GLOBALS['text']['ratingMessagePopup']?>" class="raitngMessage"></textarea>
                </div>
                <div class="ratingBtn">
                    <button type="submit">
                        <img src="/images/userSaveBtn.png" alt="">
                        <span><?=$GLOBALS['text']['ratingBtnPopup']?></span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $this->registerJsFile('@web/js/user-create.js', ['defer' => true]); ?>

