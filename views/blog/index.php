<?php
use yii\web\View;
use yii\web\YiiAsset;

/** @var yii\web\View $this */
$this->registerCssFile('@web/css/blog.css');

$this->registerJsFile('@web/js/blog.js', ['position' => \yii\web\View::POS_END,'depends' => [YiiAsset::class],]);
$this->registerJsFile('https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js', ['type' => "module"]);
$this->registerJsFile('https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js', ['nomodule' => true]);

?>
<div class="blog">
    <div class="blogContent">
        <div class="title">
            <a href="javascript:history.go(-1)" class="blogBackButton">
                <img class="backButton" src="/images/backButton.png" alt="">
                <img class="ellipseButton" src="/images/Ellipse2.png" alt="">
            </a>
            <span class="blogTitle"><?=$GLOBALS['text']['blogTitle']?></span>
            <span class="discoverSpan">Let's discover something interesting</span>
        </div>
        <div class="bodyBlog">
            <div class="mainBlog">
                <div id="paginated-list" data-current-page="1" aria-live="polite">
                    <div class="grid-container">
                        <?php if(!empty($blogs)){ foreach ($blogs as $blog){?>
                            <div class="card_">
                                <div class="card-image">
                                    <img src="/<?=$blog['img']?>" alt="">
                                </div>
                                <div class="card-info">
                                    <span class="textCard"><?=$blog['page_name']?></span>
                                    <span class="date"> <img src="/images/date.png"><span class="dateNumber"><?=$blog['create_date']?></span></span>
                                    <span class="textCard"><?=$blog['page_title']?></span>
                                    <div class='divImg'>
                                        <a href="/blog/categorie?id=<?=$blog['id']?>"><?= $GLOBALS['text']['mainReadMore']?></a>
                                        <div class='large-font'>
                                            <ion-icon name="heart">
                                                <div class='red-bg'></div>
                                            </ion-icon>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }} ?>
                    </div>
                </div>
                <ul class="paginationBlog">
                    <li class="pageItem prev">
                        <a class="pageLink" href="">
                            <img src="/images/left.png" alt="">
                        </a>
                    </li>
                    <li class="pageItem">
                        <a class="pageLink" href="">1</a>
                    </li>
                    <li class="pageItem active">
                        <a class="pageLink" href="">2</a>
                    </li>
                    <li class="pageItem">
                        <a class="pageLink" href="">3</a>
                    </li>
                    <li class="pageItem next">
                        <a class="pageLink" href="">
                            <img src="/images/right.png" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="mobileBlogsFiled">
            <?php if (!empty($blogsMobile)){foreach ($blogsMobile as $item) {?>
                <div class="card_">
                    <div class="card-image">
                        <img src="/<?=$item['img']?>" alt="">
                    </div>
                    <div class="card-info">
                        <span class="textCard"><?=$item['page_name']?></span>
                        <span class="date"> <img src="/images/date.png"><span class="dateNumber"><?=$item['create_date']?></span></span>
                        <span class="textCard"><?=$item['page_title']?></span>
                        <div class='divImg'>
                            <a href="/blog/categorie?id=<?=$item['id']?>"><?= $GLOBALS['text']['mainReadMore']?></a>
                            <div class='large-font'>
                                <ion-icon name="heart">
                                    <div class='red-bg'></div>
                                </ion-icon>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }}?>
            <div class="containerSeeMoreBlog">
                <button id="blogsBtnMobile">
                    <img class="seeMoreBlog" src="/images/seeMoreBlog.png" alt="">
                    <span class="seeMoreText"><?=$GLOBALS['text']['sectionSixBtnMobile']?></span>
                </button>
            </div>
        </div>
    </div>
</div>
