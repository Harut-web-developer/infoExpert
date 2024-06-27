<?php
use yii\web\View;
use yii\web\YiiAsset;

/** @var yii\web\View $this */

$this->registerCssFile('@web/css/courses.css?as=4');
$this->registerJsFile('@web/js/courses.js', ['position' => \yii\web\View::POS_END,'depends' => [YiiAsset::class],]);
$this->registerJsFile('https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js', ['type' => "module"]);
$this->registerJsFile('https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js', ['nomodule' => true]);

?>
<div class="courses">
    <div class="headerCourses">
        <a href="javascript:history.go(-1)" class="coursesMobBackButton">
            <img class="backButton" src="/images/backButton.png" alt="">
            <img class="ellipseButton" src="/images/Ellipse2.png" alt="">
        </a>
        <div>
            <span class="txt1"><?=$GLOBALS['text']['mainCourseTitleFirst']?></span>
            <span class="txt2"><?=$GLOBALS['text']['mainCourseTitleSecond']?></span>
            <span class="txt1"><?=$GLOBALS['text']['mainCourseTitleThird']?></span>
            <span class="txt2"><?=$GLOBALS['text']['mainCourseTitleFour']?></span>
        </div>
    </div>
    <div class="cardCourses_">
        <div class="wrapper">
            <ul class="carouselCourses">
                <?php if(!empty($courses)){foreach ($courses as $course){?>
                    <li class="cardCourses">
                        <div class="img">
                            <img src="/images/coursesCardImg.png" alt="" draggable="false">
                        </div>
                        <div class="cardCoursesBody">
                            <div class="cardBody">
                                <span class="span1"><?=$course['lesson_name']?></span>
                                <div class="starAndTxt">
                                    <div class="starDivCourses">
                                        <img src="/images/cardStar.png" alt="" draggable="false">
                                        <img src="/images/cardStar.png" alt="" draggable="false">
                                        <img src="/images/cardStar.png" alt="" draggable="false">
                                        <img src="/images/cardStar.png" alt="" draggable="false">
                                        <img src="/images/cardStarWhite.png" alt="" draggable="false">
                                    </div>
                                    <h1 class="span2">xxxxx <span class="amd">AMD</span></h1>
                                </div>
                            </div>
                            <div class="cardCenter">
                                <div class="cardtxt1">
                                    <img src="/images/courses1.png" alt="" draggable="false">
                                    <span><?=$course['lesson_title']?></span>
                                </div>
                                <div class="cardtxt2">
                                    <img src="/images/courses2.png" alt="" draggable="false">
                                    <span><?=$course['lesson_content']?></span>
                                </div>
                            </div>
                            <div class="footerCard">
                                <div class="coursisBtnField">
                                    <button>
                                        <img class="footerImg1" src="/images/wishlist1.png" alt="" draggable="false">
                                        <span><?=$GLOBALS['text']['mycoursesBtn']?></span>
                                    </button>
                                </div>
                                <div class="booterImgs">
                                    <div class='large-font'>
                                        <ion-icon name="heart">
                                            <div class='red-bg'></div>
                                        </ion-icon>
                                    </div>
                                    <img class="footerImg3" src="/images/courses5.png" alt="" draggable="false">
                                </div>
                            </div>
                        </div>
                    </li>
                <?php }}?>
            </ul>
        </div>
    </div>
    <div class="cardCoursesMobile">
        <?php if(!empty($courses)){foreach ($courses as $course){?>
            <div class="cardCourses">
                <img class="img" src="/images/coursesCardImg.png" alt="" draggable="false">
                <div class="cardCoursesBody">
                    <div class="cardBottomMainField">
                        <div class="cardBody">
                            <span class="span1"><?=$course['lesson_name']?></span>
                            <div class="starAndTxt">
                                <div class="starDivCourses">
                                    <img src="/images/cardStar.png" alt="" draggable="false">
                                    <img src="/images/cardStar.png" alt="" draggable="false">
                                    <img src="/images/cardStar.png" alt="" draggable="false">
                                    <img src="/images/cardStar.png" alt="" draggable="false">
                                    <img src="/images/cardStarWhite.png" alt="" draggable="false">
                                </div>
                                <div class="span2">xxxxx <span class="amd">AMD</span></div>
                            </div>
                        </div>
                        <div class="cardCenter">
                            <div class="cardtxt1">
                                <img src="/images/courses1.png" alt="" draggable="false">
                                <span><?=$course['lesson_title']?></span>
                            </div>
                            <div class="cardtxt2">
                                <img src="/images/courses2.png" alt="" draggable="false">
                                <span><?=$course['lesson_content']?></span>
                            </div>
                        </div>
                        <div class="footerCard">
                            <button>
                                <img class="footerImg1" src="/images/wishlist1.png" alt="" draggable="false">
                                <span><?=$GLOBALS['text']['mycoursesBtn']?></span>
                            </button>
                            <div class="booterImgs">
                                <div class='large-font'>
                                    <ion-icon name="heart">
                                        <div class='red-bg'></div>
                                    </ion-icon>
                                </div>
                                <img class="footerImg3" src="/images/courses5.png" alt="" draggable="false">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php }}?>
    </div>
    <div class="mobilebtn">
        <button id="coursesBtnMobile">
            <img src="/images/coursesBtn.png" alt="">
        </button>
    </div>
    <h1 class="title0"><?=$GLOBALS['text']['mainCourseTutors']?></h1>
    <div class="cardCourses2">
        <div class="wrapper2">
            <ul class="carousel2">
                <li class="card2">
                    <div class="img2"><img src="/images/courses6.png" alt="" draggable="false"> </div>
                    <div class="cardBody2">
                        <h1 class="span1slider2">Manana Davtyan</h1>
                        <p class="span2slider2">Head of Service Department</p>
                    </div>
                </li>
                <li class="card2">
                    <div class="img2"><img src="/images/courses6.png" alt="" draggable="false"> </div>
                    <div class="cardBody2">
                        <h1 class="span1slider2">Manana Davtyan</h1>
                        <p class="span2slider2">Head of Service Department</p>
                    </div>
                </li>
                <li class="card2">
                    <div class="img2"><img src="/images/courses6.png" alt="" draggable="false"> </div>
                    <div class="cardBody2">
                        <h1 class="span1slider2">Manana Davtyan</h1>
                        <p class="span2slider2">Head of Service Department</p>
                    </div>
                </li>
                <li class="card2">
                    <div class="img2"><img src="/images/courses6.png" alt="" draggable="false"> </div>
                    <div class="cardBody2">
                        <h1 class="span1slider2">Manana Davtyan</h1>
                        <p class="span2slider2">Head of Service Department</p>
                    </div>
                </li>
                <li class="card2">
                    <div class="img2"><img src="/images/courses6.png" alt="" draggable="false"> </div>
                    <div class="cardBody2">
                        <h1 class="span1slider2">Manana Davtyan</h1>
                        <p class="span2slider2">Head of Service Department</p>
                    </div>
                </li>
                <li class="card2">
                    <div class="img2"><img src="/images/courses6.png" alt="" draggable="false"> </div>
                    <div class="cardBody2">
                        <h1 class="span1slider2">Manana Davtyan</h1>
                        <p class="span2slider2">Head of Service Department</p>
                    </div>
                </li>
                <li class="card2">
                    <div class="img2"><img src="/images/courses6.png" alt="" draggable="false"> </div>
                    <div class="cardBody2">
                        <h1 class="span1slider2">Manana Davtyan</h1>
                        <p class="span2slider2">Head of Service Department</p>
                    </div>
                </li>
                <li class="card2">
                    <div class="img2"><img src="/images/courses6.png" alt="" draggable="false"> </div>
                    <div class="cardBody2">
                        <h1 class="span1slider2">Manana Davtyan</h1>
                        <p class="span2slider2">Head of Service Department</p>
                    </div>
                </li>
                <li class="card2">
                    <div class="img2"><img src="/images/courses6.png" alt="" draggable="false"> </div>
                    <div class="cardBody2">
                        <h1 class="span1slider2">Manana Davtyan</h1>
                        <p class="span2slider2">Head of Service Department</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
