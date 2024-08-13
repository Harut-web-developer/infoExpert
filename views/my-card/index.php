<!-- Mariam 50 ev Harut 50-->
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
                </ul>
            </div>
            <div class="myCardFields">
                <div class="myCoursesProfileField">
                    <div class="myCoursesBlocksFieldMainPerson">
                        <div class="myCoursesFieldSectionLeft">
                            <div class="imgFieldCard">
                                <?php if(!empty(Yii::$app->user->identity->image)){?>
                                    <img src="/<?=Yii::$app->user->identity->image?>" alt="">
                                <?php }else{?>
                                    <img src="/images/avatar.png" alt="">
                                <?php } ?>
                            </div>
                            <span><?php if(!empty(Yii::$app->user->identity->username)){echo Yii::$app->user->identity->username;}?></span>
                            <div class="usersProfileInfo">
                                <?php if (Yii::$app->user->identity->phone) { ?>
                                    <div class="usersProfileInfoPhone">
                                        <img src="/images/phonAchievements.png" alt="">
                                        <span><?php if(!empty(Yii::$app->user->identity->phone)){echo Yii::$app->user->identity->phone;}?></span>
                                    </div>
                                <?php } ?>
                                <?php if (Yii::$app->user->identity->email) { ?>
                                    <div class="usersProfileInfoEmail">
                                        <img src="/images/mailAchievements.png" alt="">
                                        <span><?php if(!empty(Yii::$app->user->identity->email)){echo Yii::$app->user->identity->email;}?></span>
                                    </div>
                                <?php } ?>
                                <?php if (Yii::$app->user->identity->linkdin_url) { ?>
                                    <div class="usersProfileInfoLinkdin">
                                        <img src="/images/linkdinAchievements.png" alt="">
                                        <?php if(!empty(Yii::$app->user->identity->linkdin_url)){?>
                                            <a href="<?=Yii::$app->user->identity->linkdin_url?>" target="_blank"><?=Yii::$app->user->identity->username?></a>
                                        <?php }?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="myCoursesFieldSectionRight">
                            <a href="/user-profile/achievements-edit"><img src="/images/editIconMyCourses.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <?php if (!empty($my_card)){?>
                    <div class="cardCourses">
                        <div class="wrapper">
                            <ul class="myCardFieldAcceptCourses">
                                <?php foreach ($my_card as $item){ ?>
                                    <li class="myCardBlocksField">
                                        <div class="myCoursesBlocksField">
                                            <div class="myCoursesBlocksFieldMain">
                                                <div class="myCardImageBlock">
                                                    <div class="cardImgField">
                                                        <img src="/<?=$item['img']?>" alt="" draggable="false">
                                                    </div>
                                                    <div class="myCardNameRating">
                                                        <span><?=$item['lesson_name']?></span>
                                                        <div class="rightContentMyCard">
                                                            <div class="starDiv">
                                                                <?php
                                                                $count = $item['rating'];
                                                                $img = '';
                                                                for ($i = 1; $i <= 5; $i++){
                                                                    if ($i <= $count){
                                                                        $img .= '<img src="/images/cardStar.png" alt="" draggable="false">';
                                                                    }else{
                                                                        $img .= '<img src="/images/cardStarWhite.png" alt="" draggable="false">';
                                                                    }
                                                                }
                                                                echo $img;
                                                                ?>
                                                            </div>
                                                            <h1 class="span2_2"><?=$item['price']?> <span class="spanAmd">AMD</span></h1>
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
                                                            <span><?=$item['lesson_certificate']?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="myCardBlockButtons">
                                            <span class="removeItem" data-remove="<?=$item['my_card_id']?>"><?=$GLOBALS['text']['myCardRemove']?></span>
                                            <span class="moveItem" data-lesson="<?=$item['lesson_id']?>" data-move="<?=$item['my_card_id']?>"><?=$GLOBALS['text']['myCardMove']?></span>
                                        </div>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                <?php }else{?>
                    <div class="textForEmpty">
                        <span><?=$GLOBALS['text']['emptyCourses']?></span>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="myCardMobileField">
            <div class="myCoursesTitleField">
                <a href="javascript:history.go(-1)" class="managmentBackMyCard">
                    <img src="/images/backButtonCheckout.png" alt="" class="backButtonCheckout">
                </a>
                <div><?=$GLOBALS['text']['tabletCard']?></div>
            </div>
            <?php if (!empty($my_card)){?>
            <div class="myCardBlogsSection">
                <?php foreach ($my_card as $item){ ?>
                    <div class="myCardBlocksField">
                        <div class="myCoursesBlocksField">
                            <div class="cardImgField">
                                <img src="/<?=$item['img']?>" alt="" draggable="false">
                            </div>
                            <div class="myCoursesBlocksFieldMain">
                                <div class="blogsBottomInfoField">
                                    <div class="myCardNameRating">
                                        <span><?=$item['lesson_name']?></span>
                                        <div class="rightContentMyCard">
                                            <div class="starDiv">
                                                <?php
                                                $count = $item['rating'];
                                                $img = '';
                                                for ($i = 1; $i <= 5; $i++){
                                                    if ($i <= $count){
                                                        $img .= '<img src="/images/cardStar.png" alt="" draggable="false">';
                                                    }else{
                                                        $img .= '<img src="/images/cardStarWhite.png" alt="" draggable="false">';
                                                    }
                                                }
                                                echo $img;
                                                ?>
                                            </div>
                                            <span class="span2_2"><?=$item['price']?> <span class="spanAmd">AMD</span></span>
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
                                                <span><?=$item['lesson_certificate']?></span>
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
                <?php } ?>
            </div>
            <?php }else{?>
                <div class="textForEmpty">
                    <span><?=$GLOBALS['text']['emptyCourses']?></span>
                </div>
            <?php } ?>
        </div>
        <div class="totalPriceField" id="totalPriceField">
            <div class="totalPriceFieldSection">
                <div class="myCardTotalPrice">

                    <?php
                    $total = 0;
                    if (!empty($my_card)){
                        foreach ($my_card as $item){
                            $total += $item['price'];
                        }} ?>
                    <span><?=$GLOBALS['text']['myCardTotal']?>:  ֏ <span class="totalPriceLesson"><?=$total?></span></span>
                    <a href="/my-card/checkout">
                        <img src="/images/btncheckoutcard.png" alt="">
                        <span><?=$GLOBALS['text']['myCardCheckout']?></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
