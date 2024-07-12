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
        <div class="wishlistMobileSection">
            <div class="wishlistBlogBtnMobile">
                <a href="/wishlist/index"><?= $GLOBALS['text']['footerCourses']?></a>
                <span><?= $GLOBALS['text']['footerBlog']?></span>
            </div>
            <ul class="wishlistMobile blogsWishlist">
<!--                <div class="changeBody1">-->
<!--                    <span class="title">Go to the All Courses tab to create a wishlist </span>-->
<!--                    <div class="applyNowBtnField">-->
<!--                        <a class="coursesHref" href="/courses/index">-->
<!--                            <img src="/images/buttonImg.png" alt="">-->
<!--                            <span>All courses</span>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->
                <?php if (!empty($wishlist_blogs)){foreach ($wishlist_blogs as $wishlist_blog){  ?>
                    <li class="wishlistCardsField blogsHidden">
                        <div class="individualCards_">
                            <img src="/<?=$wishlist_blog['img']?>" alt="" draggable="false">
                            <div class="cardsText_">
                                <div class="cardsTextField_">
                                    <div class="cardsTextInfo_">
                                        <div class="cardsInfo_"><?=$wishlist_blog['page_name']?></div>
                                        <div class="cardsDate_">
                                            <img src="/images/calendarimg.png" alt="">
                                            <div class="articleDate_"><?=$wishlist_blog['create_date']?></div>
                                        </div>
                                        <div class="cardsInfo_"><?=$wishlist_blog['page_title']?></div>
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
            <?php if (!empty($wishlist_blogs)){?>
                <div class="courseMobileBtnBlog">
                    <button id="blogsBtnMobile">
                        <img src="/images/coursesBtn.png" alt="">
                    </button>
                </div>
            <?php } ?>
        </div>
    </div>
</div>