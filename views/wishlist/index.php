<?php
use yii\web\View;
use yii\web\YiiAsset;

/** @var yii\web\View $this */

$this->registerCssFile('@web/css/wishlist.css');
$this->registerJsFile('@web/js/wishlist.js', ['position' => \yii\web\View::POS_END,'depends' => [YiiAsset::class],]);
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
<div class="usersProfile wishlist <?php echo $class1; ?>">
    <div class="userProfileSection">
        <div class="myCoursesTitleField">
            <img src="/images/backButtonCheckout.png" alt="" class="backButtonCheckout">
            <div><?=$GLOBALS['text']['tabletWishlist']?></div>
        </div>
        <div class="userProfileMenuField">
            <span><?=$GLOBALS['text']['wishlistTitle']?></span>
            <ul class="userProfileMenu">
                <li><a href="/user-profile/achievements"><?=$GLOBALS['text']['tabletachievement']?></a></li>
                <li><a href="/courses/my-courses"><?=$GLOBALS['text']['tabletMyCourse']?></a></li>
                <li><a href="/wishlist/index"><?=$GLOBALS['text']['tabletWishlist']?></a></li>
                <li><a href="/my-card/index"><?=$GLOBALS['text']['tabletCard']?></a></li>
            </ul>
        </div>
        <div class="mainContent">
            <div class="myCoursesProfileField">
                <div class="myCoursesFieldSection">
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
            <div class="CoursesAndCategoriesCard">
                <div class="topSlider">
<!--                    <div class="changeBody1">-->
<!--                        <span class="title">Go to the All Courses tab to create a wishlist </span>-->
<!--                        <div class="applyNowBtnField">-->
<!--                            <a class="coursesHref" href="/courses/index">-->
<!--                                <img src="/images/buttonImg.png" alt="">-->
<!--                                <span>All courses</span>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </div>-->
                    <div class="changeBody2">
                        <ul class="carousel_2">
                            <li class="card_2">
                                <div class="img_2"><img src="/images/cardImageCourses.png" alt="" draggable="false"> </div>
                                <div class="cardContent">
                                    <div class="cardBody_2">
                                        <span class="span1_2">1C: and Accounting for Begginers</span>
                                        <div class="starAndTxt_2">
                                            <div class="starDivWishlistCourses">
                                                <img src="/images/cardStar.png" alt="" draggable="false">
                                                <img src="/images/cardStar.png" alt="" draggable="false">
                                                <img src="/images/cardStar.png" alt="" draggable="false">
                                                <img src="/images/cardStar.png" alt="" draggable="false">
                                                <img src="/images/cardStarWhite.png" alt="" draggable="false">
                                            </div>
                                            <h1 class="span2_2">xxxxx <span class="spanAmd">AMD</span></h1>
                                        </div>
                                    </div>
                                    <div class="cardCenter_2">
                                        <div class="cardtxt1_2">
                                            <img src="/images/courses1.png" alt="">
                                            <span>Number of courses: 29+1 exam /3 days a week/</span>
                                        </div>
                                        <div class="cardtxt2_2">
                                            <img src="/images/courses2.png" alt="">
                                            <span>Certificate / in Armenian and English /</span>
                                        </div>
                                    </div>
                                    <div class="footerCard_2">
                                        <div class="wishlistBtnField">
                                            <button>
                                                <img src="/images/wishlist1.png" alt="">
                                                <span>Buy now</span>
                                            </button>
                                        </div>
                                        <div class="booterImgs">
                                            <div class='large-font largeFont'>
                                                <ion-icon name="heart" class="iconLike">
                                                    <div class='red-bg'></div>
                                                </ion-icon>
                                            </div>
                                            <img class="footerImg3" src="/images/courses5.png" alt="" draggable="false">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card_2">
                                <div class="img_2"><img src="/images/cardImageCourses.png" alt="" draggable="false"> </div>
                                <div class="cardContent">
                                    <div class="cardBody_2">
                                        <span class="span1_2">1C: Accounting 8.3</span>
                                        <div class="starAndTxt_2">
                                            <div class="starDivWishlistCourses">
                                                <img src="/images/cardStar.png" alt="" draggable="false">
                                                <img src="/images/cardStar.png" alt="" draggable="false">
                                                <img src="/images/cardStar.png" alt="" draggable="false">
                                                <img src="/images/cardStar.png" alt="" draggable="false">
                                                <img src="/images/cardStarWhite.png" alt="" draggable="false">
                                            </div>
                                            <h1 class="span2_2">xxxxx <span class="spanAmd">AMD</span></h1>
                                        </div>
                                    </div>
                                    <div class="cardCenter_2">
                                        <div class="cardtxt1_2">
                                            <img src="/images/courses1.png" alt="">
                                            <span>Number of courses: 29+1 exam /3 days a week/</span>
                                        </div>
                                        <div class="cardtxt2_2">
                                            <img src="/images/courses2.png" alt="">
                                            <span>Certificate / in Armenian and English /</span>
                                        </div>
                                    </div>
                                    <div class="footerCard_2">
                                        <div class="wishlistBtnField">
                                            <button>
                                                <img src="/images/wishlist1.png" alt="">
                                                <span>Buy now</span>
                                            </button>
                                        </div>
                                        <div class="booterImgs">
                                            <div class='large-font largeFont'>
                                                <ion-icon name="heart" class="iconLike">
                                                    <div class='red-bg'></div>
                                                </ion-icon>
                                            </div>
                                            <img class="footerImg3" src="/images/courses5.png" alt="" draggable="false">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card_2">
                                <div class="img_2"><img src="/images/cardImageCourses.png" alt="" draggable="false"> </div>
                                <div class="cardContent">
                                    <div class="cardBody_2">
                                        <span class="span1_2">1C: Accounting 8.3</span>
                                        <div class="starAndTxt_2">
                                            <div class="starDivWishlistCourses">
                                                <img src="/images/cardStar.png" alt="" draggable="false">
                                                <img src="/images/cardStar.png" alt="" draggable="false">
                                                <img src="/images/cardStar.png" alt="" draggable="false">
                                                <img src="/images/cardStar.png" alt="" draggable="false">
                                                <img src="/images/cardStarWhite.png" alt="" draggable="false">
                                            </div>
                                            <h1 class="span2_2">xxxxx <span class="spanAmd">AMD</span></h1>
                                        </div>
                                    </div>
                                    <div class="cardCenter_2">
                                        <div class="cardtxt1_2">
                                            <img src="/images/courses1.png" alt="">
                                            <span>Number of courses: 29+1 exam /3 days a week/</span>
                                        </div>
                                        <div class="cardtxt2_2">
                                            <img src="/images/courses2.png" alt="">
                                            <span>Certificate / in Armenian and English /</span>
                                        </div>
                                    </div>
                                    <div class="footerCard_2">
                                        <div class="wishlistBtnField">
                                            <button>
                                                <img src="/images/wishlist1.png" alt="">
                                                <span>Buy now</span>
                                            </button>
                                        </div>
                                        <div class="booterImgs">
                                            <div class='large-font largeFont'>
                                                <ion-icon name="heart" class="iconLike">
                                                    <div class='red-bg'></div>
                                                </ion-icon>
                                            </div>
                                            <img class="footerImg3" src="/images/courses5.png" alt="" draggable="false">
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr class="new1">
                <div class="bottomSlider">
                    <ul class="carousel_">
                        <li class="card_">
                            <div class="individualCards_">
                                <div class="cardsimg_">
                                    <img src="/images/blogimg.png" alt="" draggable="false">
                                </div>
                                <div class="cardsText_">
                                    <div class="cardsTextField_">
                                        <div class="cardsTextInfo_">
                                            <div class="cardsInfo_">Grid of different categories of accounting lessons</div>
                                            <div class="cardsDate_">
                                                <img src="/images/calendarimg.png" alt="">
                                                <div class="articleDate_"><?=date('M') . ' ' . date('d') . ', ' . date('Y') ?></div>
                                            </div>
                                            <div class="cardsInfo_">Grid of different categories of accounting lessons</div>
                                        </div>
                                        <div class="cardsLike_">
                                            <a href="<?= Yii::$app->urlManager->createUrl(['blog/categorie']) ?>"><?= $GLOBALS['text']['mainReadMore']?></a>
                                            <div class='large-font'>
                                                <ion-icon name="heart">
                                                    <div class='red-bg'></div>
                                                </ion-icon>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="card_">
                            <div class="individualCards_">
                                <div class="cardsimg_">
                                    <img src="/images/blogimg.png" alt="" draggable="false">
                                </div>
                                <div class="cardsText_">
                                    <div class="cardsTextField_">
                                        <div class="cardsTextInfo_">
                                            <div class="cardsInfo_">Grid of different categories of accounting lessons</div>
                                            <div class="cardsDate_">
                                                <img src="/images/calendarimg.png" alt="">
                                                <div class="articleDate_"><?=date('M') . ' ' . date('d') . ', ' . date('Y') ?></div>
                                            </div>
                                            <div class="cardsInfo_">Grid of different categories of accounting lessons</div>
                                        </div>
                                        <div class="cardsLike_">
                                            <a href="<?= Yii::$app->urlManager->createUrl(['blog/categorie']) ?>"><?= $GLOBALS['text']['mainReadMore']?></a>
                                            <div class='large-font'>
                                                <ion-icon name="heart">
                                                    <div class='red-bg'></div>
                                                </ion-icon>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="card_">
                            <div class="individualCards_">
                                <div class="cardsimg_">
                                    <img src="/images/blogimg.png" alt="" draggable="false">
                                </div>
                                <div class="cardsText_">
                                    <div class="cardsTextField_">
                                        <div class="cardsTextInfo_">
                                            <div class="cardsInfo_">Grid of different categories of accounting lessons</div>
                                            <div class="cardsDate_">
                                                <img src="/images/calendarimg.png" alt="">
                                                <div class="articleDate_"><?=date('M') . ' ' . date('d') . ', ' . date('Y') ?></div>
                                            </div>
                                            <div class="cardsInfo_">Grid of different categories of accounting lessons</div>
                                        </div>
                                        <div class="cardsLike_">
                                            <a href="<?= Yii::$app->urlManager->createUrl(['blog/categorie']) ?>"><?= $GLOBALS['text']['mainReadMore']?></a>
                                            <div class='large-font'>
                                                <ion-icon name="heart">
                                                    <div class='red-bg'></div>
                                                </ion-icon>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="card_">
                            <div class="individualCards_">
                                <div class="cardsimg_">
                                    <img src="/images/blogimg.png" alt="" draggable="false">
                                </div>
                                <div class="cardsText_">
                                    <div class="cardsTextField_">
                                        <div class="cardsTextInfo_">
                                            <div class="cardsInfo_">Grid of different categories of accounting lessons</div>
                                            <div class="cardsDate_">
                                                <img src="/images/calendarimg.png" alt="">
                                                <div class="articleDate_"><?=date('M') . ' ' . date('d') . ', ' . date('Y') ?></div>
                                            </div>
                                            <div class="cardsInfo_">Grid of different categories of accounting lessons</div>
                                        </div>
                                        <div class="cardsLike_">
                                            <a href="<?= Yii::$app->urlManager->createUrl(['blog/categorie']) ?>"><?= $GLOBALS['text']['mainReadMore']?></a>
                                            <div class='large-font'>
                                                <ion-icon name="heart">
                                                    <div class='red-bg'></div>
                                                </ion-icon>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="wishlistMobileSection">
            <div class="wishlistBlogBtn">
                <span><?= $GLOBALS['text']['footerCourses']?></span>
                <a href="/wishlist/blogs-wishlist"><?= $GLOBALS['text']['footerBlog']?></a>
            </div>
            <div class="wishlistMobile">
<!--                <div class="changeBody1">-->
<!--                    <span class="title">Go to the All Courses tab to create a wishlist </span>-->
<!--                    <div class="applyNowBtnField">-->
<!--                        <a class="coursesHref" href="/courses/index">-->
<!--                            <img src="/images/buttonImg.png" alt="">-->
<!--                            <span>All courses</span>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->
                <div class="wishlistCardsField">
                    <div class="card_2">
                        <img src="/images/cardImageCourses.png" alt="" draggable="false">
                        <div class="cardContent">
                            <div class="cardContentField">
                                <div class="cardBody_2">
                                    <span class="span1_2">1C: and Accounting for Begginers</span>
                                    <div class="starAndTxt_2">
                                        <div class="starDivWishlistCourses">
                                            <img src="/images/cardStar.png" alt="" draggable="false">
                                            <img src="/images/cardStar.png" alt="" draggable="false">
                                            <img src="/images/cardStar.png" alt="" draggable="false">
                                            <img src="/images/cardStar.png" alt="" draggable="false">
                                            <img src="/images/cardStarWhite.png" alt="" draggable="false">
                                        </div>
                                        <span class="span2_2">xxxxx <span class="spanAmd">AMD</span></span>
                                    </div>
                                </div>
                                <div class="cardCenter_2">
                                    <div class="cardtxt1_2">
                                        <img src="/images/courses1.png" alt="">
                                        <span>Number of courses: 29+1 exam /3 days a week/</span>
                                    </div>
                                    <div class="cardtxt2_2">
                                        <img src="/images/courses2.png" alt="">
                                        <span>Certificate / in Armenian and English /</span>
                                    </div>
                                </div>
                                <div class="footerCard_2">
                                    <button>
                                        <img src="/images/wishlist1.png" alt="">
                                        <span>Buy now</span>
                                    </button>
                                    <div class="booterImgs">
                                        <div class='large-font largeFont'>
                                            <ion-icon name="heart" class="iconLike">
                                                <div class='red-bg'></div>
                                            </ion-icon>
                                        </div>
                                        <img class="footerImg3" src="/images/courses5.png" alt="" draggable="false">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card_2">
                        <img src="/images/cardImageCourses.png" alt="" draggable="false">
                        <div class="cardContent">
                            <div class="cardContentField">
                                <div class="cardBody_2">
                                    <span class="span1_2">1C: and Accounting for Begginers</span>
                                    <div class="starAndTxt_2">
                                        <div class="starDivWishlistCourses">
                                            <img src="/images/cardStar.png" alt="" draggable="false">
                                            <img src="/images/cardStar.png" alt="" draggable="false">
                                            <img src="/images/cardStar.png" alt="" draggable="false">
                                            <img src="/images/cardStar.png" alt="" draggable="false">
                                            <img src="/images/cardStarWhite.png" alt="" draggable="false">
                                        </div>
                                        <span class="span2_2">xxxxx <span class="spanAmd">AMD</span></span>
                                    </div>
                                </div>
                                <div class="cardCenter_2">
                                    <div class="cardtxt1_2">
                                        <img src="/images/courses1.png" alt="">
                                        <span>Number of courses: 29+1 exam /3 days a week/</span>
                                    </div>
                                    <div class="cardtxt2_2">
                                        <img src="/images/courses2.png" alt="">
                                        <span>Certificate / in Armenian and English /</span>
                                    </div>
                                </div>
                                <div class="footerCard_2">
                                    <button>
                                        <img src="/images/wishlist1.png" alt="">
                                        <span>Buy now</span>
                                    </button>
                                    <div class="booterImgs">
                                        <div class='large-font largeFont'>
                                            <ion-icon name="heart" class="iconLike">
                                                <div class='red-bg'></div>
                                            </ion-icon>
                                        </div>
                                        <img class="footerImg3" src="/images/courses5.png" alt="" draggable="false">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="courseMobileBtn">
                    <button>
                        <img src="/images/coursesBtn.png" alt="">
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
