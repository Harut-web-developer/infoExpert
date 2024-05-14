<?php
use yii\web\View;
use yii\web\YiiAsset;

/** @var yii\web\View $this */
$this->registerCssFile('@web/css/blog.css');

$this->registerJsFile('@web/js/blog.js', ['position' => \yii\web\View::POS_END,'depends' => [YiiAsset::class],]);
$this->registerJsFile('https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js', ['position' => View::POS_END]);
$this->registerJsFile('https://cdn.jsdelivr.net/npm/mo-js', ['position' => View::POS_END]);
?>
<div class="blog">
    <div class="blogContent">
        <div class="title">
            <img class="backButton" src="/images/backButton.png" alt="">
            <h1 class="blogTitle"><?=$GLOBALS['text']['blogTitle']?></h1>
        </div>
        <div class="card-content bodyBlog">
            <div class="mainBlog">
                <div id="paginated-list" data-current-page="1" aria-live="polite">
                    <div class="grid-container">
                        <div class="card_">
                            <div class="card-image"><img src="/images/1.png" alt=""></div>
                            <div class="card-info">
                                <p class="textCard">Grid of different categories of accounting lessons</p>
                                <p class="date"> <img src="/images/date.png"> Jan 24, 2025</p>
                                <p class="textCard"> Grid of different categories of accounting lessons</p>
                                <div class='divImg'>
                                    <a href="/blog/categorie">READ MORE</a>
                                    <div class="like-container">
                                        <div class="like-cnt unchecked likeColor">
                                            <i class="like-btn material-icons heart-icon">
                                                <img class="heart2" src="/images/innerHeart2.png" alt="" draggable="false">
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card_">
                            <div class="card-image"><img src="/images/1.png" alt=""></div>
                            <div class="card-info">
                                <p class="textCard">Grid of different categories of accounting lessons</p>
                                <p class="date"> <img src="/images/date.png"> Jan 24, 2025</p>
                                <p class="textCard"> Grid of different categories of accounting lessons</p>
                                <div class='divImg'>
                                    <a href="/blog/categorie">READ MORE</a>
                                    <div class="like-container">
                                        <div class="like-cnt unchecked likeColor">
                                            <i class="like-btn material-icons heart-icon">
                                                <img class="heart2" src="/images/innerHeart2.png" alt="" draggable="false">
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card_">
                            <div class="card-image"><img src="/images/1.png" alt=""></div>
                            <div class="card-info">
                                <p class="textCard">Grid of different categories of accounting lessons</p>
                                <p class="date"> <img src="/images/date.png"> Jan 24, 2025</p>
                                <p class="textCard"> Grid of different categories of accounting lessons</p>
                                <div class='divImg'>
                                    <a href="/blog/categorie">READ MORE</a>
                                    <div class="like-container">
                                        <div class="like-cnt unchecked likeColor">
                                            <i class="like-btn material-icons heart-icon">
                                                <img class="heart2" src="/images/innerHeart2.png" alt="" draggable="false">
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card_">
                            <div class="card-image"><img src="/images/1.png" alt=""></div>
                            <div class="card-info">
                                <p class="textCard">Grid of different categories of accounting lessons</p>
                                <p class="date"> <img src="/images/date.png"> Jan 24, 2025</p>
                                <p class="textCard"> Grid of different categories of accounting lessons</p>
                                <div class='divImg'>
                                    <a href="/blog/categorie">READ MORE</a>
                                    <div class="like-container">
                                        <div class="like-cnt unchecked likeColor">
                                            <i class="like-btn material-icons heart-icon">
                                                <img class="heart2" src="/images/innerHeart2.png" alt="" draggable="false">
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card_">
                            <div class="card-image"><img src="/images/1.png" alt=""></div>
                            <div class="card-info">
                                <p class="textCard">Grid of different categories of accounting lessons</p>
                                <p class="date"> <img src="/images/date.png"> Jan 24, 2025</p>
                                <p class="textCard"> Grid of different categories of accounting lessons</p>
                                <div class='divImg'>
                                    <a href="/blog/categorie">READ MORE</a>
                                    <div class="like-container">
                                        <div class="like-cnt unchecked likeColor">
                                            <i class="like-btn material-icons heart-icon">
                                                <img class="heart2" src="/images/innerHeart2.png" alt="" draggable="false">
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card_">
                            <div class="card-image"><img src="/images/1.png" alt=""></div>
                            <div class="card-info">
                                <p class="textCard">Grid of different categories of accounting lessons</p>
                                <p class="date"> <img src="/images/date.png"> Jan 24, 2025</p>
                                <p class="textCard"> Grid of different categories of accounting lessons</p>
                                <div class='divImg'>
                                    <a href="/blog/categorie">READ MORE</a>
                                    <div class="like-container">
                                        <div class="like-cnt unchecked likeColor">
                                            <i class="like-btn material-icons heart-icon">
                                                <img class="heart2" src="/images/innerHeart2.png" alt="" draggable="false">
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card_">
                            <div class="card-image"><img src="/images/1.png" alt=""></div>
                            <div class="card-info">
                                <p class="textCard">Grid of different categories of accounting lessons</p>
                                <p class="date"> <img src="/images/date.png"> Jan 24, 2025</p>
                                <p class="textCard"> Grid of different categories of accounting lessons</p>
                                <div class='divImg'>
                                    <a href="/blog/categorie">READ MORE</a>
                                    <div class="like-container">
                                        <div class="like-cnt unchecked likeColor">
                                            <i class="like-btn material-icons heart-icon">
                                                <img class="heart2" src="/images/innerHeart2.png" alt="" draggable="false">
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card_">
                            <div class="card-image"><img src="/images/1.png" alt=""></div>
                            <div class="card-info">
                                <p class="textCard">Grid of different categories of accounting lessons</p>
                                <p class="date"> <img src="/images/date.png"> Jan 24, 2025</p>
                                <p class="textCard"> Grid of different categories of accounting lessons</p>
                                <div class='divImg'>
                                    <a href="/blog/categorie">READ MORE</a>
                                    <div class="like-container">
                                        <div class="like-cnt unchecked likeColor">
                                            <i class="like-btn material-icons heart-icon">
                                                <img class="heart2" src="/images/innerHeart2.png" alt="" draggable="false">
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card_">
                            <div class="card-image"><img src="/images/1.png" alt=""></div>
                            <div class="card-info">
                                <p class="textCard">Grid of different categories of accounting lessons</p>
                                <p class="date"> <img src="/images/date.png"> Jan 24, 2025</p>
                                <p class="textCard"> Grid of different categories of accounting lessons</p>
                                <div class='divImg'>
                                    <a href="/blog/categorie">READ MORE</a>
                                    <div class="like-container">
                                        <div class="like-cnt unchecked likeColor">
                                            <i class="like-btn material-icons heart-icon">
                                                <img class="heart2" src="/images/innerHeart2.png" alt="" draggable="false">
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card_">
                            <div class="card-image"><img src="/images/1.png" alt=""></div>
                            <div class="card-info">
                                <p class="textCard">Grid of different categories of accounting lessons</p>
                                <p class="date"> <img src="/images/date.png"> Jan 24, 2025</p>
                                <p class="textCard"> Grid of different categories of accounting lessons</p>
                                <div class='divImg'>
                                    <a href="/blog/categorie">READ MORE</a>
                                    <div class="like-container">
                                        <div class="like-cnt unchecked likeColor">
                                            <i class="like-btn material-icons heart-icon">
                                                <img class="heart2" src="/images/innerHeart2.png" alt="" draggable="false">
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card_">
                            <div class="card-image"><img src="/images/1.png" alt=""></div>
                            <div class="card-info">
                                <p class="textCard">Grid of different categories of accounting lessons</p>
                                <p class="date"> <img src="/images/date.png"> Jan 24, 2025</p>
                                <p class="textCard"> Grid of different categories of accounting lessons</p>
                                <div class='divImg'>
                                    <a href="/blog/categorie">READ MORE</a>
                                    <div class="like-container">
                                        <div class="like-cnt unchecked likeColor">
                                            <i class="like-btn material-icons heart-icon">
                                                <img class="heart2" src="/images/innerHeart2.png" alt="" draggable="false">
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card_">
                            <div class="card-image"><img src="/images/1.png" alt=""></div>
                            <div class="card-info">
                                <p class="textCard">Grid of different categories of accounting lessons</p>
                                <p class="date"> <img src="/images/date.png"> Jan 24, 2025</p>
                                <p class="textCard"> Grid of different categories of accounting lessons</p>
                                <div class='divImg'>
                                    <a href="/blog/categorie">READ MORE</a>
                                    <div class="like-container">
                                        <div class="like-cnt unchecked likeColor">
                                            <i class="like-btn material-icons heart-icon">
                                                <img class="heart2" src="/images/innerHeart2.png" alt="" draggable="false">
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card_">
                            <div class="card-image"><img src="/images/1.png" alt=""></div>
                            <div class="card-info">
                                <p class="textCard">Grid of different categories of accounting lessons</p>
                                <p class="date"> <img src="/images/date.png"> Jan 24, 2025</p>
                                <p class="textCard"> Grid of different categories of accounting lessons</p>
                                <div class='divImg'>
                                    <a href="/blog/categorie">READ MORE</a>
                                    <div class="like-container">
                                        <div class="like-cnt unchecked likeColor">
                                            <i class="like-btn material-icons heart-icon">
                                                <img class="heart2" src="/images/innerHeart2.png" alt="" draggable="false">
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card_">
                            <div class="card-image"><img src="/images/1.png" alt=""></div>
                            <div class="card-info">
                                <p class="textCard">Grid of different categories of accounting lessons</p>
                                <p class="date"> <img src="/images/date.png"> Jan 24, 2025</p>
                                <p class="textCard"> Grid of different categories of accounting lessons</p>
                                <div class='divImg'>
                                    <a href="/blog/categorie">READ MORE</a>
                                    <div class="like-container">
                                        <div class="like-cnt unchecked likeColor">
                                            <i class="like-btn material-icons heart-icon">
                                                <img class="heart2" src="/images/innerHeart2.png" alt="" draggable="false">
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card_">
                            <div class="card-image"><img src="/images/1.png" alt=""></div>
                            <div class="card-info">
                                <p class="textCard">Grid of different categories of accounting lessons</p>
                                <p class="date"> <img src="/images/date.png"> Jan 24, 2025</p>
                                <p class="textCard"> Grid of different categories of accounting lessons</p>
                                <div class='divImg'>
                                    <a href="/blog/categorie">READ MORE</a>
                                    <div class="like-container">
                                        <div class="like-cnt unchecked likeColor">
                                            <i class="like-btn material-icons heart-icon">
                                                <img class="heart2" src="/images/innerHeart2.png" alt="" draggable="false">
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card_">
                            <div class="card-image"><img src="/images/1.png" alt=""></div>
                            <div class="card-info">
                                <p class="textCard">Grid of different categories of accounting lessons</p>
                                <p class="date"> <img src="/images/date.png"> Jan 24, 2025</p>
                                <p class="textCard"> Grid of different categories of accounting lessons</p>
                                <div class='divImg'>
                                    <a href="/blog/categorie">READ MORE</a>
                                    <div class="like-container">
                                        <div class="like-cnt unchecked likeColor">
                                            <i class="like-btn material-icons heart-icon">
                                                <img class="heart2" src="/images/innerHeart2.png" alt="" draggable="false">
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card_">
                            <div class="card-image"><img src="/images/1.png" alt=""></div>
                            <div class="card-info">
                                <p class="textCard">Grid of different categories of accounting lessons</p>
                                <p class="date"> <img src="/images/date.png"> Jan 24, 2025</p>
                                <p class="textCard"> Grid of different categories of accounting lessons</p>
                                <div class='divImg'>
                                    <a href="/blog/categorie">READ MORE</a>
                                    <div class="like-container">
                                        <div class="like-cnt unchecked likeColor">
                                            <i class="like-btn material-icons heart-icon">
                                                <img class="heart2" src="/images/innerHeart2.png" alt="" draggable="false">
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card_">
                            <div class="card-image"><img src="/images/1.png" alt=""></div>
                            <div class="card-info">
                                <p class="textCard">Grid of different categories of accounting lessons</p>
                                <p class="date"> <img src="/images/date.png"> Jan 24, 2025</p>
                                <p class="textCard"> Grid of different categories of accounting lessons</p>
                                <div class='divImg'>
                                    <a href="/blog/categorie">READ MORE</a>
                                    <div class="like-container">
                                        <div class="like-cnt unchecked likeColor">
                                            <i class="like-btn material-icons heart-icon">
                                                <img class="heart2" src="/images/innerHeart2.png" alt="" draggable="false">
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card_">
                            <div class="card-image"><img src="/images/1.png" alt=""></div>
                            <div class="card-info">
                                <p class="textCard">Grid of different categories of accounting lessons</p>
                                <p class="date"> <img src="/images/date.png"> Jan 24, 2025</p>
                                <p class="textCard"> Grid of different categories of accounting lessons</p>
                                <div class='divImg'>
                                    <a href="/blog/categorie">READ MORE</a>
                                    <div class="like-container">
                                        <div class="like-cnt unchecked likeColor">
                                            <i class="like-btn material-icons heart-icon">
                                                <img class="heart2" src="/images/innerHeart2.png" alt="" draggable="false">
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card_">
                            <div class="card-image"><img src="/images/1.png" alt=""></div>
                            <div class="card-info">
                                <p class="textCard">Grid of different categories of accounting lessons</p>
                                <p class="date"> <img src="/images/date.png"> Jan 24, 2025</p>
                                <p class="textCard"> Grid of different categories of accounting lessons</p>
                                <div class='divImg'>
                                    <a href="/blog/categorie">READ MORE</a>
                                    <div class="like-container">
                                        <div class="like-cnt unchecked likeColor">
                                            <i class="like-btn material-icons heart-icon">
                                                <img class="heart2" src="/images/innerHeart2.png" alt="" draggable="false">
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card_">
                            <div class="card-image"><img src="/images/1.png" alt=""></div>
                            <div class="card-info">
                                <p class="textCard">Grid of different categories of accounting lessons</p>
                                <p class="date"> <img src="/images/date.png"> Jan 24, 2025</p>
                                <p class="textCard"> Grid of different categories of accounting lessons</p>
                                <div class='divImg'>
                                    <a href="/blog/categorie">READ MORE</a>
                                    <div class="like-container">
                                        <div class="like-cnt unchecked likeColor">
                                            <i class="like-btn material-icons heart-icon">
                                                <img class="heart2" src="/images/innerHeart2.png" alt="" draggable="false">
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card_">
                            <div class="card-image"><img src="/images/1.png" alt=""></div>
                            <div class="card-info">
                                <p class="textCard">Grid of different categories of accounting lessons</p>
                                <p class="date"> <img src="/images/date.png"> Jan 24, 2025</p>
                                <p class="textCard"> Grid of different categories of accounting lessons</p>
                                <div class='divImg'>
                                    <a href="/blog/categorie">READ MORE</a>
                                    <div class="like-container">
                                        <div class="like-cnt unchecked likeColor">
                                            <i class="like-btn material-icons heart-icon">
                                                <img class="heart2" src="/images/innerHeart2.png" alt="" draggable="false">
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card_">
                            <div class="card-image"><img src="/images/1.png" alt=""></div>
                            <div class="card-info">
                                <p class="textCard">Grid of different categories of accounting lessons</p>
                                <p class="date"> <img src="/images/date.png"> Jan 24, 2025</p>
                                <p class="textCard"> Grid of different categories of accounting lessons</p>
                                <div class='divImg'>
                                    <a href="/blog/categorie">READ MORE</a>
                                    <div class="like-container">
                                        <div class="like-cnt unchecked likeColor">
                                            <i class="like-btn material-icons heart-icon">
                                                <img class="heart2" src="/images/innerHeart2.png" alt="" draggable="false">
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card_">
                            <div class="card-image"><img src="/images/1.png" alt=""></div>
                            <div class="card-info">
                                <p class="textCard">Grid of different categories of accounting lessons</p>
                                <p class="date"> <img src="/images/date.png"> Jan 24, 2025</p>
                                <p class="textCard"> Grid of different categories of accounting lessons</p>
                                <div class='divImg'>
                                    <a href="/blog/categorie">READ MORE</a>
                                    <div class="like-container">
                                        <div class="like-cnt unchecked likeColor">
                                            <i class="like-btn material-icons heart-icon">
                                                <img class="heart2" src="/images/innerHeart2.png" alt="" draggable="false">
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card_">
                            <div class="card-image"><img src="/images/1.png" alt=""></div>
                            <div class="card-info">
                                <p class="textCard">Grid of different categories of accounting lessons</p>
                                <p class="date"> <img src="/images/date.png"> Jan 24, 2025</p>
                                <p class="textCard"> Grid of different categories of accounting lessons</p>
                                <div class='divImg'>
                                    <a href="/blog/categorie">READ MORE</a>
                                    <div class="like-container">
                                        <div class="like-cnt unchecked likeColor">
                                            <i class="like-btn material-icons heart-icon">
                                                <img class="heart2" src="/images/innerHeart2.png" alt="" draggable="false">
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination-container">
                    <button class="pagination-button" id="prev-button" aria-label="Previous page" title="Previous page">
                        <img src="/images/left.png" alt="">
                    </button>

                    <div id="pagination-numbers">

                    </div>

                    <button class="pagination-button" id="next-button" aria-label="Next page" title="Next page">
                        <img src="/images/right.png" alt="">
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
