<!-- Mariam 50 ev Harut 50-->
<?php
use yii\web\View;
use yii\web\YiiAsset;
use app\models\AcWishlist;

/** @var yii\web\View $this */

$this->registerCssFile('@web/css/wishlist.css');
$this->registerJsFile('@web/js/wishlist.js', ['position' => \yii\web\View::POS_END,'depends' => [YiiAsset::class],]);
$this->registerJsFile('https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js', ['type' => "module"]);
$this->registerJsFile('https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js', ['nomodule' => true]);
?>
<?php
$first_word = explode(' ' , Yii::$app->user->identity->username);
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
            <a href="javascript:history.go(-1)" class="managmentBack">
                <img src="/images/backButtonCheckout.png" alt="" class="backButtonCheckout">
            </a>
            <div><?=$GLOBALS['text']['tabletWishlist']?></div>
        </div>
        <div class="userProfileMenuField">
            <span><?=$GLOBALS['text']['wishlistTitle']?></span>
            <ul class="userProfileMenu">
                <li><a href="/my-card/payments"><?=$GLOBALS['text']['paymentPage']?></a></li>
                <li><a href="/user-profile/achievements"><?=$GLOBALS['text']['tabletachievement']?></a></li>
                <li><a href="/courses/my-courses"><?=$GLOBALS['text']['tabletMyCourse']?></a></li>
                <li><a href="/wishlist/index"><?=$GLOBALS['text']['tabletWishlist']?></a></li>
            </ul>
        </div>
        <div class="mainContent">
            <div class="myCoursesProfileField">
                <div class="myCoursesFieldSection">
                    <div class="myCoursesFieldSectionLeft">
                        <div class="imgFieldWishlist">
                            <?php if(!empty(Yii::$app->user->identity->image)){?>
                                <img src="/<?=Yii::$app->user->identity->image?>" alt="">
                            <?php }else{?>
                                <img src="/images/avatar.png" alt="">
                            <?php } ?>
                        </div>
                        <?php if (count($first_word) > 1){?>
                            <span><?=$first_word[0] .' '. $first_word[1]?></span>
                        <?php }elseif (count($first_word) == 1){?>
                            <span><?=$first_word[0]?></span>
                        <?php } ?>
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
            <div class="CoursesAndCategoriesCard">
                <div class="topSlider">
                    <?php if (!empty($wishlist_courses)){?>
                        <div class="changeBody2">
                            <ul class="carousel_2">
                                <?php foreach ($wishlist_courses as $wishlist_cours){ ?>
                                    <li class="card_2">
                                        <div class="img_2">
                                            <img src="/<?=$wishlist_cours['img']?>" alt="" draggable="false">
                                        </div>
                                        <div class="cardContent">
                                            <div class="cardBody_2">
                                                <span class="span1_2"><?=$wishlist_cours['lesson_name']?></span>
                                                <div class="starAndTxt_2">
                                                    <?php if ($wishlist_cours['rating_exist'] == 1){?>
                                                        <div class="starDivWishlistCourses">
                                                            <?php
                                                            $count = $wishlist_cours['rating'];
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
                                                    <?php } ?>
                                                    <h1 class="span2_2"><?=$wishlist_cours['price']?> <span class="spanAmd">AMD</span></h1>
                                                </div>
                                            </div>
                                            <div class="cardCenter_2">
                                                <div class="cardtxt1_2">
                                                    <img src="/images/courses1.png" alt="">
                                                    <span><?=$wishlist_cours['lesson_title']?></span>
                                                </div>
                                                <div class="cardtxt2_2">
                                                    <img src="/images/courses2.png" alt="">
                                                    <span><?=$wishlist_cours['lesson_certificate']?></span>
                                                </div>
                                            </div>
                                            <div class="footerCard_2">
                                                <div class="wishlistBtnField">
                                                    <a href="/my-card/checkout?lesson_id=<?=$wishlist_cours['lessons_id']?>">
                                                        <img src="/images/wishlist1.png" alt="">
                                                        <span><?=$GLOBALS['text']['seeMoreBtn']?></span>
                                                    </a>
                                                </div>
                                                <div class="booterImgs">
                                                    <div class='large-font largeFont'>
                                                        <ion-icon name="heart" class="iconLike"  data-id="<?=$wishlist_cours['lessons_id']?>" data-active="<?=AcWishlist::getWishlist($wishlist_cours['lessons_id'],1) ? AcWishlist::getWishlist($wishlist_cours['lessons_id'],1) : 0?>" data-type="1">
                                                            <div class='red-bg'></div>
                                                        </ion-icon>
                                                    </div>
                                                    <img data-id="<?=$wishlist_cours['lessons_id']?>" class="footerImg3 addMyCard" src="/images/courses5.png" alt="" draggable="false">
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    <?php }else{ ?>
                        <div class="changeBody1">
                            <span class="title"><?=$GLOBALS['text']['titleOfLink']?></span>
                            <div class="applyNowBtnField">
                                <a class="coursesHref" href="/courses/index">
                                    <img src="/images/buttonImg.png" alt="">
                                    <span><?=$GLOBALS['text']['titleOfBtn']?></span>
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <hr class="new1">
                <div class="bottomSlider">
                    <ul class="carousel_">
                        <?php if (!empty($wishlist_blogs)){foreach ($wishlist_blogs as $wishlist_blog){?>
                            <li class="card_">
                                <div class="individualCards_">
                                    <div class="cardsimg_">
                                        <img src="/<?=$wishlist_blog['img']?>" alt="" draggable="false">
                                    </div>
                                    <div class="cardsText_">
                                        <div class="cardsTextField_">
                                            <div class="cardsTextInfo_">
                                                <div class="cardsInfo_"><?=$wishlist_blog['page_name']?></div>
                                                <div class="cardsDate_">
                                                    <img src="/images/calendarimg.png" alt="">
                                                    <div class="articleDate_"><?=$wishlist_blog['create_date']?></div>
                                                </div>
                                                <div class="cardsInfo_"><?=$wishlist_blog['page_content']?></div>
                                            </div>
                                            <div class="cardsLike_">
                                                <a href="<?= Yii::$app->urlManager->createUrl(['blog/categorie?id='.$wishlist_blog['blog_id']]) ?>"><?= $GLOBALS['text']['mainReadMore']?></a>
                                                <div class='large-font'>
                                                    <ion-icon name="heart" data-id="<?=$wishlist_blog['blog_id']?>" data-active="<?=AcWishlist::getWishlist($wishlist_blog['blog_id'],2) ? AcWishlist::getWishlist($wishlist_blog['blog_id'],2) : 0?>" data-type="2">
                                                        <div class='red-bg'></div>
                                                    </ion-icon>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php }} ?>
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
                <?php if (!empty($wishlist_courses)){?>
                    <ul class="wishlistCardsField mobileCourses">
                        <?php foreach ($wishlist_courses as $wishlist_cours){ ?>
                            <li class="card_2">
                                <div class="mobileImgField">
                                    <img src="/<?=$wishlist_cours['img']?>" alt="" draggable="false">
                                </div>
                                <div class="cardContent">
                                    <div class="cardContentField">
                                        <div class="cardBody_2">
                                            <span class="span1_2"><?=$wishlist_cours['lesson_name']?></span>
                                            <div class="starAndTxt_2">
                                                <?php if ($wishlist_cours['rating_exist'] == 1){?>
                                                    <div class="starDivWishlistCourses">
                                                        <?php
                                                        $count = $wishlist_cours['rating'];
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
                                                <?php } ?>
                                                <span class="span2_2"><?=$wishlist_cours['price']?> <span class="spanAmd">AMD</span></span>
                                            </div>
                                        </div>
                                        <div class="cardCenter_2">
                                            <div class="cardtxt1_2">
                                                <img src="/images/courses1.png" alt="">
                                                <span><?=$wishlist_cours['lesson_title']?></span>
                                            </div>
                                            <div class="cardtxt2_2">
                                                <img src="/images/courses2.png" alt="">
                                                <span><?=$wishlist_cours['lesson_certificate']?></span>
                                            </div>
                                        </div>
                                        <div class="footerCard_2">
                                            <a href="/my-card/checkout?lesson_id=<?=$wishlist_cours['lessons_id']?>">
                                                <img src="/images/wishlist1.png" alt="">
                                                <span><?=$GLOBALS['text']['seeMoreBtn']?></span>
                                            </a>
                                            <div class="booterImgs">
                                                <div class='large-font largeFont'>
                                                    <ion-icon name="heart" class="iconLike" data-id="<?=$wishlist_cours['lessons_id']?>" data-active="<?=AcWishlist::getWishlist($wishlist_cours['lessons_id'],1) ? AcWishlist::getWishlist($wishlist_cours['lessons_id'],1) : 0?>" data-type="1">
                                                        <div class='red-bg'></div>
                                                    </ion-icon>
                                                </div>
                                                <img data-id="<?=$wishlist_cours['lessons_id']?>" class="footerImg3 addMyCard" src="/images/courses5.png" alt="" draggable="false">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                    <div class="courseMobileBtn">
                        <button id="coursesBtnMobile">
                            <img src="/images/coursesBtn.png" alt="">
                        </button>
                    </div>
                <?php }else{?>
                    <div class="changeBody1">
                        <span class="title"><?=$GLOBALS['text']['titleOfLink']?></span>
                        <div class="applyNowBtnField">
                            <a class="coursesHref" href="/courses/index">
                                <img src="/images/buttonImg.png" alt="">
                                <span><?=$GLOBALS['text']['titleOfBtn']?></span>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
