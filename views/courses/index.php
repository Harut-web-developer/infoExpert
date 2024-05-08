<?php
use yii\web\View;
use yii\web\YiiAsset;

/** @var yii\web\View $this */

$this->registerCssFile('@web/css/courses.css');
$this->registerJsFile('@web/js/courses.js', ['position' => \yii\web\View::POS_END,'depends' => [YiiAsset::class],]);
$this->registerJsFile('https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js', ['position' => View::POS_END]);
$this->registerJsFile('https://cdn.jsdelivr.net/npm/mo-js', ['position' => View::POS_END]);
?>
<div class="courses">
    <div class="headerCourses">
        <img class="backButton" src="/images/backButton.png" alt="">
        <div>
            <span class="txt1">Our</span>
            <span class="txt2">Best Courses</span>
            <span class="txt1">Offered and Teach By</span>
            <span class="txt2">Best of The Instructors</span>
        </div>
    </div>
    <div class="cardCourses_">
        <div class="wrapper">
            <ul class="carouselCourses">
                <li class="cardCourses">
                    <div class="img"><img src="/images/cardImageCourses.png" alt="" draggable="false"> </div>
                    <div class="cardCoursesBody">
                        <div class="cardBody">
                            <span class="span1">1C: and Accounting for Beginners</span>
                            <div class="starAndTxt">
                                <div class="starDivCourses">
                                    <img src="/images/cardStar.png" alt="" draggable="false">
                                    <img src="/images/cardStar.png" alt="" draggable="false">
                                    <img src="/images/cardStar.png" alt="" draggable="false">
                                    <img src="/images/cardStar.png" alt="" draggable="false">
                                    <img src="/images/cardStarWhite.png" alt="" draggable="false">
                                </div>
                                <h1 class="span2">xxxxx <span class="amd"><span class="amd">AMD</span></span></h1>
                            </div>
                        </div>
                        <div class="cardCenter">
                            <div class="cardtxt1">
                                <img src="/images/courses1.png" alt="" draggable="false">
                                <span>Number of courses: 29+1 exam /3 days a week/</span>
                            </div>
                            <div class="cardtxt2">
                                <img src="/images/courses2.png" alt="" draggable="false">
                                <span>Certificate / in Armenian and English /</span>
                            </div>
                        </div>
                        <div class="footerCard">
                            <div class="coursisBtnField">
                                <button>
                                    <img class="footerImg1" src="/images/wishlist1.png" alt="" draggable="false">
                                    <span><a href="">Buy now</a></span>
                                </button>
                            </div>
                            <div class="booterImgs">
                                <div class="like-container">
                                    <div class="like-cnt unchecked">
                                        <i class="like-btn material-icons heart-icon">
                                            <img class="heart" src="/images/innerHeart.png" alt="" draggable="false">
                                        </i>
                                    </div>
                                </div>
                                <img class="footerImg3" src="/images/courses5.png" alt="" draggable="false">
                            </div>
                        </div>
                    </div>
                </li>
                <li class="cardCourses">
                    <div class="img"><img src="/images/cardImageCourses.png" alt="" draggable="false"> </div>
                    <div class="cardCoursesBody">
                        <div class="cardBody">
                            <span class="span1">1C: Accounting 8:3</span>
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
                                <span>Number of courses: 29+1 exam /3 days a week/</span>
                            </div>
                            <div class="cardtxt2">
                                <img src="/images/courses2.png" alt="" draggable="false">
                                <span>Certificate / in Armenian and English /</span>
                            </div>
                        </div>
                        <div class="footerCard">
                            <div class="coursisBtnField">
                                <button>
                                    <img class="footerImg1" src="/images/wishlist1.png" alt="" draggable="false">
                                    <span><a href="">Buy now</a></span>
                                </button>
                            </div>
                            <div class="booterImgs">
                                <div class="like-container">
                                    <div class="like-cnt unchecked">
                                        <i class="like-btn material-icons heart-icon">
                                            <img class="heart" src="/images/innerHeart.png" alt="" draggable="false">
                                        </i>
                                    </div>
                                </div>
                                <img class="footerImg3" src="/images/courses5.png" alt="" draggable="false">
                            </div>
                        </div>
                    </div>
                </li>
                <li class="cardCourses">
                    <div class="img"><img src="/images/cardImageCourses.png" alt="" draggable="false"> </div>
                    <div class="cardCoursesBody">
                        <div class="cardBody">
                            <span class="span1">1C: Payroll and personnel management</span>
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
                                <span>Number of courses: 29+1 exam /3 days a week/</span>
                            </div>
                            <div class="cardtxt2">
                                <img src="/images/courses2.png" alt="" draggable="false">
                                <span>Certificate / in Armenian and English /</span>
                            </div>
                        </div>
                        <div class="footerCard">
                            <div class="coursisBtnField">
                                <button>
                                    <img class="footerImg1" src="/images/wishlist1.png" alt="" draggable="false">
                                    <span><a href="">Buy now</a></span>
                                </button>
                            </div>
                            <div class="booterImgs">
                                <div class="like-container">
                                    <div class="like-cnt unchecked">
                                        <i class="like-btn material-icons heart-icon">
                                            <img class="heart" src="/images/innerHeart.png" alt="" draggable="false">
                                        </i>
                                    </div>
                                </div>
                                <img class="footerImg3" src="/images/courses5.png" alt="" draggable="false">
                            </div>
                        </div>
                    </div>
                </li>
                <li class="cardCourses">
                    <div class="img"><img src="/images/cardImageCourses.png" alt="" draggable="false"> </div>
                    <div class="cardCoursesBody">
                        <div class="cardBody">
                            <span class="span1">Trade management: marketing, sales BITRIX / CRM</span>
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
                                <span>Number of courses: 29+1 exam /3 days a week/</span>
                            </div>
                            <div class="cardtxt2">
                                <img src="/images/courses2.png" alt="" draggable="false">
                                <span>Certificate / in Armenian and English /</span>
                            </div>
                        </div>
                        <div class="footerCard">
                            <div class="coursisBtnField">
                                <button>
                                    <img class="footerImg1" src="/images/wishlist1.png" alt="" draggable="false">
                                    <span><a href="">Buy now</a></span>
                                </button>
                            </div>
                            <div class="booterImgs">
                                <div class="like-container">
                                    <div class="like-cnt unchecked">
                                        <i class="like-btn material-icons heart-icon">
                                            <img class="heart" src="/images/innerHeart.png" alt="" draggable="false">
                                        </i>
                                    </div>
                                </div>
                                <img class="footerImg3" src="/images/courses5.png" alt="" draggable="false">
                            </div>
                        </div>
                    </div>
                </li>
                <li class="cardCourses">
                    <div class="img"><img src="/images/cardImageCourses.png" alt="" draggable="false"> </div>
                    <div class="cardCoursesBody">
                        <div class="cardBody">
                            <span class="span1">1C: and Accounting for Beginners</span>
                            <div class="starAndTxt">
                                <div class="starDivCourses">
                                    <img src="/images/cardStar.png" alt="" draggable="false">
                                    <img src="/images/cardStar.png" alt="" draggable="false">
                                    <img src="/images/cardStar.png" alt="" draggable="false">
                                    <img src="/images/cardStar.png" alt="" draggable="false">
                                    <img src="/images/cardStarWhite.png" alt="" draggable="false">
                                </div>
                                <h1 class="span2">xxxxx <span class="amd"><span class="amd">AMD</span></span></h1>
                            </div>
                        </div>
                        <div class="cardCenter">
                            <div class="cardtxt1">
                                <img src="/images/courses1.png" alt="" draggable="false">
                                <span>Number of courses: 29+1 exam /3 days a week/</span>
                            </div>
                            <div class="cardtxt2">
                                <img src="/images/courses2.png" alt="" draggable="false">
                                <span>Certificate / in Armenian and English /</span>
                            </div>
                        </div>
                        <div class="footerCard">
                            <div class="coursisBtnField">
                                <button>
                                    <img class="footerImg1" src="/images/wishlist1.png" alt="" draggable="false">
                                    <span><a href="">Buy now</a></span>
                                </button>
                            </div>
                            <div class="booterImgs">
                                <div class="like-container">
                                    <div class="like-cnt unchecked">
                                        <i class="like-btn material-icons heart-icon">
                                            <img class="heart" src="/images/innerHeart.png" alt="" draggable="false">
                                        </i>
                                    </div>
                                </div>
                                <img class="footerImg3" src="/images/courses5.png" alt="" draggable="false">
                            </div>
                        </div>
                    </div>
                </li>
                <li class="cardCourses">
                    <div class="img"><img src="/images/cardImageCourses.png" alt="" draggable="false"> </div>
                    <div class="cardCoursesBody">
                        <div class="cardBody">
                            <span class="span1">1C: Accounting 8:3</span>
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
                                <span>Number of courses: 29+1 exam /3 days a week/</span>
                            </div>
                            <div class="cardtxt2">
                                <img src="/images/courses2.png" alt="" draggable="false">
                                <span>Certificate / in Armenian and English /</span>
                            </div>
                        </div>
                        <div class="footerCard">
                            <div class="coursisBtnField">
                                <button>
                                    <img class="footerImg1" src="/images/wishlist1.png" alt="" draggable="false">
                                    <span><a href="">Buy now</a></span>
                                </button>
                            </div>
                            <div class="booterImgs">
                                <div class="like-container">
                                    <div class="like-cnt unchecked">
                                        <i class="like-btn material-icons heart-icon">
                                            <img class="heart" src="/images/innerHeart.png" alt="" draggable="false">
                                        </i>
                                    </div>
                                </div>
                                <img class="footerImg3" src="/images/courses5.png" alt="" draggable="false">
                            </div>
                        </div>
                    </div>
                </li>
                <li class="cardCourses">
                    <div class="img"><img src="/images/cardImageCourses.png" alt="" draggable="false"> </div>
                    <div class="cardCoursesBody">
                        <div class="cardBody">
                            <span class="span1">1C: Payroll and personnel management</span>
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
                                <span>Number of courses: 29+1 exam /3 days a week/</span>
                            </div>
                            <div class="cardtxt2">
                                <img src="/images/courses2.png" alt="" draggable="false">
                                <span>Certificate / in Armenian and English /</span>
                            </div>
                        </div>
                        <div class="footerCard">
                            <div class="coursisBtnField">
                                <button>
                                    <img class="footerImg1" src="/images/wishlist1.png" alt="" draggable="false">
                                    <span><a href="">Buy now</a></span>
                                </button>
                            </div>
                            <div class="booterImgs">
                                <div class="like-container">
                                    <div class="like-cnt unchecked">
                                        <i class="like-btn material-icons heart-icon">
                                            <img class="heart" src="/images/innerHeart.png" alt="" draggable="false">
                                        </i>
                                    </div>
                                </div>
                                <img class="footerImg3" src="/images/courses5.png" alt="" draggable="false">
                            </div>
                        </div>
                    </div>
                </li>
                <li class="cardCourses">
                    <div class="img"><img src="/images/cardImageCourses.png" alt="" draggable="false"> </div>
                    <div class="cardCoursesBody">
                        <div class="cardBody">
                            <span class="span1">Trade management: marketing, sales BITRIX / CRM</span>
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
                                <span>Number of courses: 29+1 exam /3 days a week/</span>
                            </div>
                            <div class="cardtxt2">
                                <img src="/images/courses2.png" alt="" draggable="false">
                                <span>Certificate / in Armenian and English /</span>
                            </div>
                        </div>
                        <div class="footerCard">
                            <div class="coursisBtnField">
                                <button>
                                    <img class="footerImg1" src="/images/wishlist1.png" alt="" draggable="false">
                                    <span><a href="">Buy now</a></span>
                                </button>
                            </div>
                            <div class="booterImgs">
                                <div class="like-container">
                                    <div class="like-cnt unchecked">
                                        <i class="like-btn material-icons heart-icon">
                                            <img class="heart" src="/images/innerHeart.png" alt="" draggable="false">
                                        </i>
                                    </div>
                                </div>
                                <img class="footerImg3" src="/images/courses5.png" alt="" draggable="false">
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <h1 class="title0">Meet Our Tutors</h1>
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
