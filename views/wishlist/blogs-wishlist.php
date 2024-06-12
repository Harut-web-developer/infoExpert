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
        <div class="wishlistMobileSection">
            <div class="wishlistBlogBtn">
                <a href="/wishlist/index"><?= $GLOBALS['text']['footerCourses']?></a>
                <span><?= $GLOBALS['text']['footerBlog']?></span>
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
                    <div class="individualCards_">
                        <img src="/images/blogimg.png" alt="" draggable="false">
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
                </div>
                <div class="wishlistCardsField">
                    <div class="individualCards_">
                        <img src="/images/blogimg.png" alt="" draggable="false">
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
                </div>
                <div class="wishlistCardsField">
                    <div class="individualCards_">
                        <img src="/images/blogimg.png" alt="" draggable="false">
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