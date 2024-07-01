<?php
use yii\web\View;
use yii\web\YiiAsset;

/** @var yii\web\View $this */
$this->registerCssFile('@web/css/blog.css');

$this->registerJsFile('@web/js/blog.js', ['position' => \yii\web\View::POS_END,'depends' => [YiiAsset::class],]);
$this->registerJsFile('https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js', ['type' => "module"]);
$this->registerJsFile('https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js', ['nomodule' => true]);
$itemsPerPage = 9;
if (isset($_COOKIE['screenWidth']) && ($_COOKIE['screenWidth'] > 926 && $_COOKIE['screenWidth'] <= 1100)){
    $itemsPerPage = 12;
}elseif (isset($_COOKIE['screenWidth']) && ($_COOKIE['screenWidth'] > 695 && $_COOKIE['screenWidth'] <= 926)){
    $itemsPerPage = 9;
}elseif (isset($_COOKIE['screenWidth']) && ($_COOKIE['screenWidth'] > 599 && $_COOKIE['screenWidth'] <= 695)){
    $itemsPerPage = 6;
}
$totalPages = ceil(count($blogs) / $itemsPerPage);
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$startIndex = ($page - 1) * $itemsPerPage;
$statisticsPerPage = array_slice($blogs, $startIndex, $itemsPerPage);
?>
<div class="blog">
    <div class="blogContent">
        <div class="title">
            <a href="javascript:history.go(-1)" class="blogBackButton">
                <img class="backButton" src="/images/backButton.png" alt="">
                <img class="ellipseButton" src="/images/Ellipse2.png" alt="">
            </a>
            <span class="blogTitle"><?= $GLOBALS['text']['blogTitle'] ?></span>
            <span class="discoverSpan">Let's discover something interesting</span>
        </div>
        <div class="bodyBlog">
            <div class="mainBlog">
                <div id="paginated-list" data-current-page="1" aria-live="polite">
                    <div class="grid-container">
                        <?php if(!empty($statisticsPerPage)) { foreach ($statisticsPerPage as $blog) { ?>
                            <div class="card_">
                                <div class="card-image">
                                    <img src="/<?= $blog['img'] ?>" alt="">
                                </div>
                                <div class="card-info">
                                    <span class="textCard"><?= $blog['page_name'] ?></span>
                                    <span class="date">
                                        <img src="/images/date.png"><span class="dateNumber"><?= $blog['create_date'] ?></span>
                                    </span>
                                    <span class="textCard"><?= $blog['page_title'] ?></span>
                                    <div class='divImg'>
                                        <a href="<?= Yii::$app->urlManager->createUrl(['blog/categorie?id='.$blog['id']]) ?>"><?= $GLOBALS['text']['mainReadMore'] ?></a>
                                        <div class='large-font'>
                                            <ion-icon name="heart">
                                                <div class='red-bg'></div>
                                            </ion-icon>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } } ?>
                    </div>
                </div>
                <?php if (count($blogs) > $itemsPerPage) { ?>
                    <nav aria-label="Page navigation">
                        <ul class="pagination pagination-sm customPages paginationBlog">
                            <li class="<?= $page == 1 ? 'prev disabled' : 'prev' ?> page-item pageItem">
                                <?php if ($page > 1) : ?>
                                    <a class="pageLink" href="?page=<?= $page - 1 ?>" aria-label="Previous"><</a>
                                <?php else : ?>
                                    <span><</span>
                                <?php endif; ?>
                            </li>

                            <?php
                            if ($totalPages <= 10) {
                                for ($i = 1; $i <= $totalPages; $i++) {
                                    echo '<li class="' . ($i == $page ? 'active' : '') . ' page-item pageItem"><a class="pageLink" href="?page=' . $i . '">' . $i . '</a></li>';
                                }
                            } else {
                                if ($page > 1) {
                                    echo '<li class="page-item pageItem"><a class="pageLink" href="?page=1">1</a></li>';
                                }
                                if ($page > 4) {
                                    echo '<li class="page-item"><span class="pageItem">...</span></li>';
                                }
                                for ($i = max(2, $page - 2); $i <= min($page + 2, $totalPages - 1); $i++) {
                                    echo '<li class="' . ($i == $page ? 'active' : '') . ' page-item pageItem"><a class="pageLink" href="?page=' . $i . '">' . $i . '</a></li>';
                                }
                            }
                            ?>
                            <li class="<?= $page == $totalPages ? 'next disabled' : 'next' ?> page-item pageItem">
                                <?php if ($page < $totalPages) : ?>
                                    <a class="pageLink" href="?page=<?= $page + 1 ?>" aria-label="Next">></a>
                                <?php else : ?>
                                    <span>></span>
                                <?php endif; ?>
                            </li>
                        </ul>
                    </nav>
                <?php } ?>
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
