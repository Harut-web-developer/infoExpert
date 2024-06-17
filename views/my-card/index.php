<?php
use yii\web\View;
use yii\web\YiiAsset;

/** @var yii\web\View $this */
$this->registerCssFile('@web/css/my-card.css?as=132');

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
                            <img src="/images/profileimage.png" alt="">
                            <span>Ani Martirosian</span>
                            <div class="usersProfileInfo">
                                <div class="usersProfileInfoPhone">
                                    <img src="/images/phonAchievements.png" alt="">
                                    <span>369 258 147</span>
                                </div>
                                <div class="usersProfileInfoEmail">
                                    <img src="/images/mailAchievements.png" alt="">
                                    <span>a@martirosian.com</span>
                                </div>
                                <div class="usersProfileInfoLinkdin">
                                    <img src="/images/linkdinAchievements.png" alt="">
                                    <span>Ani Martirosian</span>
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
                            <li class="myCardBlocksField">
                                <div class="myCoursesBlocksField">
                                    <div class="myCoursesBlocksFieldMain">
                                        <div class="myCardImageBlock">
                                            <img src="/images/courseimage.png" alt="" draggable="false">
                                            <div class="myCardNameRating">
                                                <span>1C: and Accounting for Begginers</span>
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
                                                    <span>Number of courses: 14+1 exam / 2days a week</span>
                                                </div>
                                                <div class="myCardInfoTextIconSecond">
                                                    <img src="/images/mycardicon2.png" alt="">
                                                    <span>Certificate / in Armenian and English/</span>
                                                </div>
                                            </div>
                                            <div class="myCardInfoButtonField">
                                                <button>
                                                    <img src="/images/btnBuyIcon.png" alt="">
                                                    <span><?=$GLOBALS['text']['myCardBtn']?></span>
                                                </button>
                                                <div class="btnGroupLikeMarket">
                                                    <div class='large-font largeFont'>
                                                        <ion-icon name="heart" class="iconLike">
                                                            <div class='red-bg'></div>
                                                        </ion-icon>
                                                    </div>
                                                    <img src="/images/iconmarketmycard.png" alt="" class="footerImg">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="myCardBlockButtons">
                                    <span><?=$GLOBALS['text']['myCardRemove']?></span>
                                    <span><?=$GLOBALS['text']['myCardMove']?></span>
                                </div>
                            </li>
                            <li class="myCardBlocksField">
                                <div class="myCoursesBlocksField">
                                    <div class="myCoursesBlocksFieldMain">
                                        <div class="myCardImageBlock">
                                            <img src="/images/courseimage.png" alt="" draggable="false">
                                            <div class="myCardNameRating">
                                                <span>1C: Accounting 8.3</span>
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
                                                    <span>Number of courses: 14+1 exam / 2days a week</span>
                                                </div>
                                                <div class="myCardInfoTextIconSecond">
                                                    <img src="/images/mycardicon2.png" alt="">
                                                    <span>Certificate / in Armenian and English/</span>
                                                </div>
                                            </div>
                                            <div class="myCardInfoButtonField">
                                                <button>
                                                    <img src="/images/btnBuyIcon.png" alt="">
                                                    <span><?=$GLOBALS['text']['myCardBtn']?></span>
                                                </button>
                                                <div class="btnGroupLikeMarket">
                                                    <div class='large-font largeFont'>
                                                        <ion-icon name="heart" class="iconLike">
                                                            <div class='red-bg'></div>
                                                        </ion-icon>
                                                    </div>
                                                    <img src="/images/iconmarketmycard.png" alt="" class="footerImg">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="myCardBlockButtons">
                                    <span><?=$GLOBALS['text']['myCardRemove']?></span>
                                    <span><?=$GLOBALS['text']['myCardMove']?></span>
                                </div>
                            </li>
                            <li class="myCardBlocksField">
                                <div class="myCoursesBlocksField">
                                    <div class="myCoursesBlocksFieldMain">
                                        <div class="myCardImageBlock">
                                            <img src="/images/courseimage.png" alt="" draggable="false">
                                            <div class="myCardNameRating">
                                                <span>1C: Accounting 8.3</span>
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
                                                    <span>Number of courses: 14+1 exam / 2days a week</span>
                                                </div>
                                                <div class="myCardInfoTextIconSecond">
                                                    <img src="/images/mycardicon2.png" alt="">
                                                    <span>Certificate / in Armenian and English/</span>
                                                </div>
                                            </div>
                                            <div class="myCardInfoButtonField">
                                                <button>
                                                    <img src="/images/btnBuyIcon.png" alt="">
                                                    <span><?=$GLOBALS['text']['myCardBtn']?></span>
                                                </button>
                                                <div class="btnGroupLikeMarket">
                                                    <div class='large-font largeFont'>
                                                        <ion-icon name="heart" class="iconLike">
                                                            <div class='red-bg'></div>
                                                        </ion-icon>
                                                    </div>
                                                    <img src="/images/iconmarketmycard.png" alt="" class="footerImg">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="myCardBlockButtons">
                                    <span><?=$GLOBALS['text']['myCardRemove']?></span>
                                    <span><?=$GLOBALS['text']['myCardMove']?></span>
                                </div>
                            </li>
                            <li class="myCardBlocksField">
                                <div class="myCoursesBlocksField">
                                    <div class="myCoursesBlocksFieldMain">
                                        <div class="myCardImageBlock">
                                            <img src="/images/courseimage.png" alt="" draggable="false">
                                            <div class="myCardNameRating">
                                                <span>1C: Accounting 8.3</span>
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
                                                    <span>Number of courses: 14+1 exam / 2days a week</span>
                                                </div>
                                                <div class="myCardInfoTextIconSecond">
                                                    <img src="/images/mycardicon2.png" alt="">
                                                    <span>Certificate / in Armenian and English/</span>
                                                </div>
                                            </div>
                                            <div class="myCardInfoButtonField">
                                                <button>
                                                    <img src="/images/btnBuyIcon.png" alt="">
                                                    <span><?=$GLOBALS['text']['myCardBtn']?></span>
                                                </button>
                                                <div class="btnGroupLikeMarket">
                                                    <div class='large-font largeFont'>
                                                        <ion-icon name="heart" class="iconLike">
                                                            <div class='red-bg'></div>
                                                        </ion-icon>
                                                    </div>
                                                    <img src="/images/iconmarketmycard.png" alt="" class="footerImg">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="myCardBlockButtons">
                                    <span><?=$GLOBALS['text']['myCardRemove']?></span>
                                    <span><?=$GLOBALS['text']['myCardMove']?></span>
                                </div>
                            </li>
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
                <div class="myCardBlocksField">
                    <div class="myCoursesBlocksField">
                        <img src="/images/courseimage.png" alt="" draggable="false">
                        <div class="myCoursesBlocksFieldMain">
                            <div class="blogsBottomInfoField">
                                <div class="myCardNameRating">
                                    <span>1C: and Accounting for Begginers</span>
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
                                            <span>Number of courses: 14+1 exam / 2days a week</span>
                                        </div>
                                        <div class="myCardInfoTextIconSecond">
                                            <img src="/images/mycardicon2.png" alt="">
                                            <span>Certificate / in Armenian and English/</span>
                                        </div>
                                    </div>
                                    <div class="myCardInfoButtonField">
                                        <button>
                                            <img src="/images/btnBuyIcon.png" alt="">
                                            <span><?=$GLOBALS['text']['myCardBtn']?></span>
                                        </button>
                                        <div class="btnGroupLikeMarket">
                                            <div class='large-font largeFont'>
                                                <ion-icon name="heart" class="iconLike">
                                                    <div class='red-bg'></div>
                                                </ion-icon>
                                            </div>
                                            <img src="/images/iconmarketmycard.png" alt="" class="footerImg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="myCardBlockButtons">
                        <span><?=$GLOBALS['text']['myCardRemove']?></span>
                        <span><?=$GLOBALS['text']['myCardMove']?></span>
                    </div>
                </div>
                <div class="myCardBlocksField">
                    <div class="myCoursesBlocksField">
                        <img src="/images/courseimage.png" alt="" draggable="false">
                        <div class="myCoursesBlocksFieldMain">
                            <div class="blogsBottomInfoField">
                                <div class="myCardNameRating">
                                    <span>1C: and Accounting for Begginers</span>
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
                                            <span>Number of courses: 14+1 exam / 2days a week</span>
                                        </div>
                                        <div class="myCardInfoTextIconSecond">
                                            <img src="/images/mycardicon2.png" alt="">
                                            <span>Certificate / in Armenian and English/</span>
                                        </div>
                                    </div>
                                    <div class="myCardInfoButtonField">
                                        <button>
                                            <img src="/images/btnBuyIcon.png" alt="">
                                            <span><?=$GLOBALS['text']['myCardBtn']?></span>
                                        </button>
                                        <div class="btnGroupLikeMarket">
                                            <div class='large-font largeFont'>
                                                <ion-icon name="heart" class="iconLike">
                                                    <div class='red-bg'></div>
                                                </ion-icon>
                                            </div>
                                            <img src="/images/iconmarketmycard.png" alt="" class="footerImg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="myCardBlockButtons">
                        <span><?=$GLOBALS['text']['myCardRemove']?></span>
                        <span><?=$GLOBALS['text']['myCardMove']?></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="totalPriceField" id="totalPriceField">
            <div class="totalPriceFieldSection">
                <div class="myCardTotalPrice">
                    <span><?=$GLOBALS['text']['myCardTotal']?>:  $70000</span>
                    <button>
                        <img src="/images/btncheckoutcard.png" alt="">
                        <a href="/my-card/checkout"><?=$GLOBALS['text']['myCardCheckout']?></a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
