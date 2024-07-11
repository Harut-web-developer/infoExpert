<?php
use yii\web\View;
use yii\web\YiiAsset;

/** @var yii\web\View $this */
$this->registerCssFile('@web/css/my-card.css?v=5');

$this->registerJsFile('@web/js/my-card.js', ['position' => \yii\web\View::POS_END,'depends' => [YiiAsset::class],]);
$this->registerJsFile('https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js', ['type' => "module"]);
$this->registerJsFile('https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js', ['nomodule' => true]);
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
<div class="myCard  <?php echo $class1; ?>">
    <div class="myCardContent">
        <div class="myCardMainField">
            <div class="userProfileMenuField">
                <span><?=$GLOBALS['text']['myCardTitle']?></span>
                <ul class="userProfileMenu">
                    <li><a href="/user-profile/achievements"><?=$GLOBALS['text']['tabletachievement']?></a></li>
                    <li><a href="/courses/my-courses"><?=$GLOBALS['text']['tabletMyCourse']?></a></li>
                    <li><a href="/wishlist/index"><?=$GLOBALS['text']['tabletWishlist']?></a></li>
                    <li><a href="/my-card/index"><?=$GLOBALS['text']['tabletCard']?></a></li>
                </ul>
            </div>
            <div class="myCardFields">
                <div class="myCoursesProfileField">
                    <div class="myCoursesBlocksFieldMainPerson">
                        <div class="myCoursesFieldSectionLeft">
                            <img src="/<?php if(!empty(Yii::$app->user->identity->image)){echo Yii::$app->user->identity->image;}?>" alt="">
                            <span><?php if(!empty(Yii::$app->user->identity->username)){echo Yii::$app->user->identity->username;}?></span>
                            <div class="usersProfileInfo">
                                <div class="usersProfileInfoPhone">
                                    <img src="/images/phonAchievements.png" alt="">
                                    <span><?php if(!empty(Yii::$app->user->identity->phone)){echo Yii::$app->user->identity->phone;}?></span>
                                </div>
                                <div class="usersProfileInfoEmail">
                                    <img src="/images/mailAchievements.png" alt="">
                                    <span><?php if(!empty(Yii::$app->user->identity->email)){echo Yii::$app->user->identity->email;}?></span>
                                </div>
                                <div class="usersProfileInfoLinkdin">
                                    <img src="/images/linkdinAchievements.png" alt="">
                                    <?php if(!empty(Yii::$app->user->identity->linkdin_url)){?>
                                        <a href="<?=Yii::$app->user->identity->linkdin_url?>" target="_blank"><?=Yii::$app->user->identity->username?></a>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                        <div class="myCoursesFieldSectionRight">
                            <a href="/user-profile/achievements-edit"><img src="/images/editIconMyCourses.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="cardCourses">
                    <div class="wrapper">
                        <ul class="myCardFieldAcceptCourses">
                            <?php if (!empty($my_card)){foreach ($my_card as $item){ ?>
                                <li class="myCardBlocksField">
                                    <div class="myCoursesBlocksField">
                                        <div class="myCoursesBlocksFieldMain">
                                            <div class="myCardImageBlock">
                                                <img src="/images/courseimage.png" alt="" draggable="false">
                                                <div class="myCardNameRating">
                                                    <span><?=$item['lesson_name']?></span>
                                                    <div class="rightContentMyCard">
                                                        <div class="starDiv">
                                                            <img src="/images/cardStar.png" alt="">
                                                            <img src="/images/cardStar.png" alt="">
                                                            <img src="/images/cardStar.png" alt="">
                                                            <img src="/images/cardStar.png" alt="">
                                                            <img src="/images/cardStar.png" alt="">
                                                        </div>
                                                        <h1 class="span2_2">xxxxx <span class="spanAmd">AMD</span></h1>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="myCardBlockInfo">
                                                <div class="myCardInfoTextIcon">
                                                    <div class="myCardInfoTextIconFirst">
                                                        <img src="/images/mycardicon1.png" alt="">
                                                        <span><?=$item['lesson_title']?></span>
                                                    </div>
                                                    <div class="myCardInfoTextIconSecond">
                                                        <img src="/images/mycardicon2.png" alt="">
                                                        <span><?=$item['lesson_content']?></span>
                                                    </div>
                                                </div>
<!--                                                <div class="myCardInfoButtonField">-->
<!--                                                    <button>-->
<!--                                                        <img src="/images/btnBuyIcon.png" alt="">-->
<!--                                                        <span>--><?php //=$GLOBALS['text']['myCardBtn']?><!--</span>-->
<!--                                                    </button>-->
<!--                                                    <div class="btnGroupLikeMarket">-->
<!--                                                        <div class='large-font largeFont'>-->
<!--                                                            <ion-icon name="heart" class="iconLike">-->
<!--                                                                <div class='red-bg'></div>-->
<!--                                                            </ion-icon>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="myCardBlockButtons">
                                        <span class="removeItem" data-remove="<?=$item['my_card_id']?>"><?=$GLOBALS['text']['myCardRemove']?></span>
                                        <span class="moveItem" data-lesson="<?=$item['lesson_id']?>" data-move="<?=$item['my_card_id']?>"><?=$GLOBALS['text']['myCardMove']?></span>
                                    </div>
                                </li>
                            <?php }} ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="myCardMobileField">
            <div class="myCoursesTitleField">
                <a href="javascript:history.go(-1)" class="managmentBackMyCard">
                    <img src="/images/backButtonCheckout.png" alt="" class="backButtonCheckout">
                </a>
                <div><?=$GLOBALS['text']['tabletCard']?></div>
            </div>
            <div class="myCardBlogsSection">
                <?php if (!empty($my_card)){foreach ($my_card as $item){ ?>
                    <div class="myCardBlocksField">
                        <div class="myCoursesBlocksField">
                            <img src="/images/courseimage.png" alt="" draggable="false">
                            <div class="myCoursesBlocksFieldMain">
                                <div class="blogsBottomInfoField">
                                    <div class="myCardNameRating">
                                        <span><?=$item['lesson_name']?></span>
                                        <div class="rightContentMyCard">
                                            <div class="starDiv">
                                                <img src="/images/cardStar.png" alt="">
                                                <img src="/images/cardStar.png" alt="">
                                                <img src="/images/cardStar.png" alt="">
                                                <img src="/images/cardStar.png" alt="">
                                                <img src="/images/cardStar.png" alt="">
                                            </div>
                                            <span class="span2_2">xxxxx <span class="spanAmd">AMD</span></span>
                                        </div>
                                    </div>
                                    <div class="myCardBlockInfo">
                                        <div class="myCardInfoTextIcon">
                                            <div class="myCardInfoTextIconFirst">
                                                <img src="/images/mycardicon1.png" alt="">
                                                <span><?=$item['lesson_title']?></span>
                                            </div>
                                            <div class="myCardInfoTextIconSecond">
                                                <img src="/images/mycardicon2.png" alt="">
                                                <span><?=$item['lesson_content']?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="myCardBlockButtons">
                            <span class="removeItem" data-remove="<?=$item['my_card_id']?>"><?=$GLOBALS['text']['myCardRemove']?></span>
                            <span class="moveItem" data-lesson="<?=$item['lesson_id']?>" data-move="<?=$item['my_card_id']?>"><?=$GLOBALS['text']['myCardMove']?></span>
                        </div>
                    </div>
                <?php }} ?>
            </div>
        </div>
        <div class="totalPriceField" id="totalPriceField">
            <div class="totalPriceFieldSection">
                <div class="myCardTotalPrice">
                    <span><?=$GLOBALS['text']['myCardTotal']?>:  $70000</span>
                    <button>
                        <img src="/images/btncheckoutcard.png" alt="">
                        <span><?=$GLOBALS['text']['myCardCheckout']?></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
