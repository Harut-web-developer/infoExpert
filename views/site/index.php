<?php
use yii\web\View;
use yii\web\YiiAsset;
/** @var yii\web\View $this */

$this->title = 'Infoexpert';
$this->registerJsFile('https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js', ['position' => View::POS_END]);
$this->registerJsFile('https://cdn.jsdelivr.net/npm/mo-js', ['position' => View::POS_END]);
?>

<div class="headerBackground">
    <div class="apply">
        <span class="applyMarket"><?=$GLOBALS['text']['sectionOneMarket']?></span>
        <span class="boundaries"><?=$GLOBALS['text']['sectionOneBoundaries']?></span>
        <a href="/apply-now/index">
            <img src="/images/apply.png" alt="">
            <span><?=$GLOBALS['text']['__applynow__']?></span>
        </a>
    </div>
</div>
<div class="sectionTwo">
    <div class="sectionInfo">
        <div class="numbersInfo">
            <img src="/images/partnerinfoimg.png" alt="">
            <div class="counter-container">
                <span class="numberSectionTwo">350</span>
                <span class="addSymbol">+</span>
            </div>
            <span class="textSectionTwo"><?=$GLOBALS['text']['sectionTwoPartner']?></span>
        </div>
        <div class="numbersInfo">
            <img src="/images/productinfoimg.png" alt="">
            <div class="counter-container">
                <span class="numberSectionTwo">17</span>
                <span class="addSymbol">+</span>
            </div>
            <span class="textSectionTwo"><?=$GLOBALS['text']['sectionTwoProduct']?></span>
        </div>
        <div class="numbersInfo">
            <img src="/images/programminfoimg.png" alt="">
            <div class="counter-container">
                <span class="numberSectionTwo">500</span>
                <span class="addSymbol">+</span>
            </div>
            <span class="textSectionTwo"><?=$GLOBALS['text']['sectionTwoProgram']?></span>
        </div>
    </div>
</div>
<div class="sectionThree">
    <div class="learn">
        <div class="learnInfo">
            <div class="coursesBg">
                <span><?=$GLOBALS['text']['sectionThreeCourses']?></span>
                <p><?=$GLOBALS['text']['sectionThreeLearn']?></p>
            </div>
            <div class="logoManagement">
                <div class="courseLogo">
                    <img src="/images/logomanagcourse.png" alt="">
                </div>
                <div class="courseTitle">
                    <span><?=$GLOBALS['text']['sectionThreePerson']?></span>
                    <span><?=$GLOBALS['text']['sectionThreeManag']?></span>
                </div>
            </div>
            <div class="managementBtn">
                <a href="/courses/index">
                    <img src="/images/logomanag.png" alt="">
                    <span><?=$GLOBALS['text']['sectionThreeBtn']?></span>
                </a>
            </div>
        </div>
        <div class="learnImg">
            <img src="/images/Group 85.png" alt="">
        </div>
    </div>
</div>
<div class="sectionFour">
    <div class="answers">
        <div class="frequency">
            <span class="freqAsked"><?=$GLOBALS['text']['sectionFourTitle']?></span>
            <span class="freqLook"><?=$GLOBALS['text']['sectionFourLooking']?></span>
        </div>
        <div class="questions">
            <div class="leftQuestions">
                <div class="answersField">
                    <div class="questionField">
                        <span>What Does Royalty Free Mean?</span>
                        <img src="/images/arrowDown.png" alt="">
                    </div>
                    <div class="answerQuestion">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae eum, molestiae mollitia
                        nesciunt perferendis reiciendis similique! Eligendi illo impedit nostrum quo voluptatibus?
                        Beatae commodi, nihil odio quas ut vel. Perspiciatis.
                    </div>
                </div>
                <div class="answersField">
                    <div class="questionField">
                        <span>What Does Royalty Free Mean?</span>
                        <img src="/images/arrowDown.png" alt="">
                    </div>
                    <div class="answerQuestion">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae eum, molestiae mollitia
                        nesciunt perferendis reiciendis similique! Eligendi illo impedit nostrum quo voluptatibus?
                        Beatae commodi, nihil odio quas ut vel. Perspiciatis.
                    </div>
                </div>
                <div class="answersField">
                    <div class="questionField">
                        <span>What Does Royalty Free Mean?</span>
                        <img src="/images/arrowDown.png" alt="">
                    </div>
                    <div class="answerQuestion">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae eum, molestiae mollitia
                        nesciunt perferendis reiciendis similique! Eligendi illo impedit nostrum quo voluptatibus?
                        Beatae commodi, nihil odio quas ut vel. Perspiciatis.
                    </div>
                </div>
            </div>
            <div class="rightQuestions">
                <div class="answersField">
                    <div class="questionField">
                        <span>What Does Royalty Free Mean?</span>
                        <img src="/images/arrowDown.png" alt="">
                    </div>
                    <div class="answerQuestion">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae eum, molestiae mollitia
                        nesciunt perferendis reiciendis similique! Eligendi illo impedit nostrum quo voluptatibus?
                        Beatae commodi, nihil odio quas ut vel. Perspiciatis.
                    </div>
                </div>
                <div class="answersField">
                    <div class="questionField">
                        <span>What Does Royalty Free Mean?</span>
                        <img src="/images/arrowDown.png" alt="">
                    </div>
                    <div class="answerQuestion">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae eum, molestiae mollitia
                        nesciunt perferendis reiciendis similique! Eligendi illo impedit nostrum quo voluptatibus?
                        Beatae commodi, nihil odio quas ut vel. Perspiciatis.
                    </div>
                </div>
                <div class="answersField">
                    <div class="questionField">
                        <span>What Does Royalty Free Mean?</span>
                        <img src="/images/arrowDown.png" alt="">
                    </div>
                    <div class="answerQuestion">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae eum, molestiae mollitia
                        nesciunt perferendis reiciendis similique! Eligendi illo impedit nostrum quo voluptatibus?
                        Beatae commodi, nihil odio quas ut vel. Perspiciatis.
                    </div>
                </div>
                <div class="answersField">
                    <div class="questionField">
                        <span>What Does Royalty Free Mean?</span>
                        <img src="/images/arrowDown.png" alt="">
                    </div>
                    <div class="answerQuestion">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae eum, molestiae mollitia
                        nesciunt perferendis reiciendis similique! Eligendi illo impedit nostrum quo voluptatibus?
                        Beatae commodi, nihil odio quas ut vel. Perspiciatis.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="sectionFive">
    <div class="partnerSection slider">
        <span class="partnersTitle"><?=$GLOBALS['text']['sectionFiveTitle']?></span>
        <div class="carousel">
            <ul class="carousel-slides">
                <li class="carousel-slide">
                    <img class="img-prev" src="/images/partner1.png" alt="">
                    <img src="/images/partner1_hov.png" class="img-top" alt="Card Front">
                </li>
                <li class="carousel-slide">
                    <img class="img-prev" src="/images/partner2.png" alt="">
                    <img src="/images/partner2_hov.png" class="img-top" alt="Card Front">
                </li>
                <li class="carousel-slide">
                    <img class="img-prev" src="/images/partner3.png" alt="">
                    <img src="/images/partner3_hov.png" class="img-top" alt="Card Front">
                </li>
                <li class="carousel-slide">
                    <img class="img-prev" src="/images/partner4.png" alt="">
                    <img src="/images/partner4_hov.png" class="img-top" alt="Card Front">
                </li>
                <li class="carousel-slide">
                    <img class="img-prev" src="/images/partner5.png" alt="">
                    <img src="/images/partner5_hov.png" class="img-top" alt="Card Front">
                </li>
                <li class="carousel-slide">
                    <img class="img-prev" src="/images/partner6.png" alt="">
                    <img src="/images/partner6_hov.png" class="img-top" alt="Card Front">
                </li>
                <li class="carousel-slide">
                    <img class="img-prev" src="/images/partner7.png" alt="">
                    <img src="/images/partner7_hov.png" class="img-top" alt="Card Front">
                </li>
                <li class="carousel-slide">
                    <img class="img-prev" src="/images/partner8.png" alt="">
                    <img src="/images/partner8_hov.png" class="img-top" alt="Card Front">
                </li>
                <li class="carousel-slide">
                    <img class="img-prev" src="/images/partner9.png" alt="">
                    <img src="/images/partner9_hov.png" class="img-top" alt="Card Front">
                </li>
                <li class="carousel-slide">
                    <img class="img-prev" src="/images/partner10.png" alt="">
                    <img src="/images/partner10_hov.png" class="img-top" alt="Card Front">
                </li>
                <li class="carousel-slide">
                    <img class="img-prev" src="/images/partner11.png" alt="">
                    <img src="/images/partner11_hov.png" class="img-top" alt="Card Front">
                </li>
                <li class="carousel-slide">
                    <img class="img-prev" src="/images/partner12.png" alt="">
                    <img src="/images/partner12_hov.png" class="img-top" alt="Card Front">
                </li>
                <li class="carousel-slide">
                    <img class="img-prev" src="/images/partner13.png" alt="">
                    <img src="/images/partner13_hov.png" class="img-top" alt="Card Front">
                </li>
                <li class="carousel-slide">
                    <img class="img-prev" src="/images/partner14.png" alt="">
                    <img src="/images/partner14_hov.png" class="img-top" alt="Card Front">
                </li>
                <li class="carousel-slide">
                    <img class="img-prev" src="/images/partner15.png" alt="">
                    <img src="/images/partner15_hov.png" class="img-top" alt="Card Front">
                </li>
                <li class="carousel-slide">
                    <img class="img-prev" src="/images/partner16.png" alt="">
                    <img src="/images/partner16_hov.png" class="img-top" alt="Card Front">
                </li>
                <li class="carousel-slide">
                    <img class="img-prev" src="/images/partner17.png" alt="">
                    <img src="/images/partner17_hov.png" class="img-top" alt="Card Front">
                </li>
                <li class="carousel-slide">
                    <img class="img-prev" src="/images/partner18.png" alt="">
                    <img src="/images/partner18_hov.png" class="img-top" alt="Card Front">
                </li>
                <li class="carousel-slide">
                    <img class="img-prev" src="/images/partner19.png" alt="">
                    <img src="/images/partner19_hov.png" class="img-top" alt="Card Front">
                </li>
                <li class="carousel-slide">
                    <img class="img-prev" src="/images/partner20.png" alt="">
                    <img src="/images/partner20_hov.png" class="img-top" alt="Card Front">
                </li>
                <li class="carousel-slide">
                    <img class="img-prev" src="/images/partner21.png" alt="">
                    <img src="/images/partner21_hov.png" class="img-top" alt="Card Front">
                </li>
                <li class="carousel-slide">
                    <img class="img-prev" src="/images/partner22.png" alt="">
                    <img src="/images/partner22_hov.png" class="img-top" alt="Card Front">
                </li>
                <li class="carousel-slide">
                    <img class="img-prev" src="/images/partner23.png" alt="">
                    <img src="/images/partner23_hov.png" class="img-top" alt="Card Front">
                </li>
                <li class="carousel-slide">
                    <img class="img-prev" src="/images/partner24.png" alt="">
                    <img src="/images/partner24_hov.png" class="img-top" alt="Card Front">
                </li>
                <li class="carousel-slide">
                    <img class="img-prev" src="/images/partner25.png" alt="">
                    <img src="/images/partner25_hov.png" class="img-top" alt="Card Front">
                </li>
                <li class="carousel-slide">
                    <img class="img-prev" src="/images/partner26.png" alt="">
                    <img src="/images/partner26_hov.png" class="img-top" alt="Card Front">
                </li>
                <li class="carousel-slide">
                    <img class="img-prev" src="/images/partner27.png" alt="">
                    <img src="/images/partner27_hov.png" class="img-top" alt="Card Front">
                </li>
                <li class="carousel-slide">
                    <img class="img-prev" src="/images/partner28.png" alt="">
                    <img src="/images/partner28_hov.png" class="img-top" alt="Card Front">
                </li>
                <li class="carousel-slide">
                    <img class="img-prev" src="/images/partner29.png" alt="">
                    <img src="/images/partner29_hov.png" class="img-top" alt="Card Front">
                </li>
                <li class="carousel-slide">
                    <img class="img-prev" src="/images/partner30.png" alt="">
                    <img src="/images/partner30_hov.png" class="img-top" alt="Card Front">
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.css">
<div class="sectionSix">
    <div class="testimonial">
        <div class="testimonialsTitles">
            <span class="testimonialOrangeTitle"><?=$GLOBALS['text']['sectionSixTitle']?></span>
            <span class="testimonialWhiteTitle"><?=$GLOBALS['text']['sectionSixText']?></span>
        </div>
        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper testimonialsImg">
                    <div class="swiper-slide">
                        <div class="blockTestimonial">
                            <div class="intoBlockTestimonial">
                                <div class="testimonialSimbol">
                                    <img src="/images/symbolTestimonial.png" alt="">
                                </div>
                                <div class="testimonialsText">Lorem ipsum dolor sit amet consectetur. Pellentesque enim risus mauris tellus vitae amet.
                                    Venenatis massa netus viverra turpis tortor arcu. Nulla gravida ipsum ut fringilla libero quis.
                                    Enim egestas tellus risus quis ut </div>
                                <div class="fieldsLinkdin">
                                    <span class="testimonialsAuthor">Lorem Ipsum</span>
                                    <a href=""><img src="/images/linkdin.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="blockTestimonial">
                            <div class="intoBlockTestimonial">
                                <div class="testimonialSimbol">
                                    <img src="/images/symbolTestimonial.png" alt="">
                                </div>
                                <div class="testimonialsText">Lorem ipsum dolor sit amet consectetur. Pellentesque enim risus mauris tellus vitae amet.
                                    Venenatis massa netus viverra turpis tortor arcu. Nulla gravida ipsum ut fringilla libero quis.
                                    Enim egestas tellus risus quis ut </div>
                                <div class="fieldsLinkdin">
                                    <span class="testimonialsAuthor">Lorem Ipsum</span>
                                    <a href=""><img src="/images/linkdin.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="blockTestimonial">
                            <div class="intoBlockTestimonial">
                                <div class="testimonialSimbol">
                                    <img src="/images/symbolTestimonial.png" alt="">
                                </div>
                                <div class="testimonialsText">Lorem ipsum dolor sit amet consectetur. Pellentesque enim risus mauris tellus vitae amet.
                                    Venenatis massa netus viverra turpis tortor arcu. Nulla gravida ipsum ut fringilla libero quis.
                                    Enim egestas tellus risus quis ut </div>
                                <div class="fieldsLinkdin">
                                    <span class="testimonialsAuthor">Lorem Ipsum</span>
                                    <a href=""><img src="/images/linkdin.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="blockTestimonial">
                            <div class="intoBlockTestimonial">
                                <div class="testimonialSimbol">
                                    <img src="/images/symbolTestimonial.png" alt="">
                                </div>
                                <div class="testimonialsText">Lorem ipsum dolor sit amet consectetur. Pellentesque enim risus mauris tellus vitae amet.
                                    Venenatis massa netus viverra turpis tortor arcu. Nulla gravida ipsum ut fringilla libero quis.
                                    Enim egestas tellus risus quis ut </div>
                                <div class="fieldsLinkdin">
                                    <span class="testimonialsAuthor">Lorem Ipsum</span>
                                    <a href=""><img src="/images/linkdin.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="blockTestimonial">
                            <div class="intoBlockTestimonial">
                                <div class="testimonialSimbol">
                                    <img src="/images/symbolTestimonial.png" alt="">
                                </div>
                                <div class="testimonialsText">Lorem ipsum dolor sit amet consectetur. Pellentesque enim risus mauris tellus vitae amet.
                                    Venenatis massa netus viverra turpis tortor arcu. Nulla gravida ipsum ut fringilla libero quis.
                                    Enim egestas tellus risus quis ut </div>
                                <div class="fieldsLinkdin">
                                    <span class="testimonialsAuthor">Lorem Ipsum</span>
                                    <a href=""><img src="/images/linkdin.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="blockTestimonial">
                            <div class="intoBlockTestimonial">
                                <div class="testimonialSimbol">
                                    <img src="/images/symbolTestimonial.png" alt="">
                                </div>
                                <div class="testimonialsText">Lorem ipsum dolor sit amet consectetur. Pellentesque enim risus mauris tellus vitae amet.
                                    Venenatis massa netus viverra turpis tortor arcu. Nulla gravida ipsum ut fringilla libero quis.
                                    Enim egestas tellus risus quis ut </div>
                                <div class="fieldsLinkdin">
                                    <span class="testimonialsAuthor">Lorem Ipsum</span>
                                    <a href=""><img src="/images/linkdin.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="blockTestimonial">
                            <div class="intoBlockTestimonial">
                                <div class="testimonialSimbol">
                                    <img src="/images/symbolTestimonial.png" alt="">
                                </div>
                                <div class="testimonialsText">Lorem ipsum dolor sit amet consectetur. Pellentesque enim risus mauris tellus vitae amet.
                                    Venenatis massa netus viverra turpis tortor arcu. Nulla gravida ipsum ut fringilla libero quis.
                                    Enim egestas tellus risus quis ut </div>
                                <div class="fieldsLinkdin">
                                    <span class="testimonialsAuthor">Lorem Ipsum</span>
                                    <a href=""><img src="/images/linkdin.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="blockTestimonial">
                            <div class="intoBlockTestimonial">
                                <div class="testimonialSimbol">
                                    <img src="/images/symbolTestimonial.png" alt="">
                                </div>
                                <div class="testimonialsText">Lorem ipsum dolor sit amet consectetur. Pellentesque enim risus mauris tellus vitae amet.
                                    Venenatis massa netus viverra turpis tortor arcu. Nulla gravida ipsum ut fringilla libero quis.
                                    Enim egestas tellus risus quis ut </div>
                                <div class="fieldsLinkdin">
                                    <span class="testimonialsAuthor">Lorem Ipsum</span>
                                    <a href=""><img src="/images/linkdin.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>
<!-- Swiper JS -->
<script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.js"></script>
<div class="sectionSeven" id="section01">
    <div class="sectionBlog">
        <span><?=$GLOBALS['text']['sectionSevenTitle']?></span>
        <div class="blogsCard">
            <div class="individualCards">
                <div class="cardsimg">
                    <img src="/images/blogimg.png" alt="">
                </div>
                <div class="cardsText">
                    <div class="cardsTextField">
                        <div class="cardsTextInfo">
                            <div class="cardsInfo">Grid of different categories of accounting lessons</div>
                            <div class="cardsDate">
                                <img src="/images/calendarimg.png" alt="">
                                <div class="articleDate"><?=date('M') . ' ' . date('d') . ', ' . date('Y') ?></div>
                            </div>
                            <div class="cardsInfo">Grid of different categories of accounting lessons</div>
                        </div>
                        <div class="cardsLike">
                            <a href="<?= Yii::$app->urlManager->createUrl(['blog/categorie']) ?>">READ MORE</a>
                            <div class="like-container">
                                <div class="like-cnt unchecked likeColor">
                                    <i class="like-btn material-icons heart-icon">
                                        <img class="heartMain" src="/images/innerHeart2.png" alt="" draggable="false">
                                    </i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="individualCards cardsMiddle">
                <div class="cardsimg">
                    <img src="/images/blogimg.png" alt="">
                </div>
                <div class="cardsText">
                    <div class="cardsTextField">
                        <div class="cardsTextInfo">
                            <div class="cardsInfo">Grid of different categories of accounting lessons</div>
                            <div class="cardsDate">
                                <img src="/images/calendarimg.png" alt="">
                                <div class="articleDate"><?=date('M') . ' ' . date('d') . ', ' . date('Y') ?></div>
                            </div>
                            <div class="cardsInfo">Grid of different categories of accounting lessons</div>
                        </div>
                        <div class="cardsLike">
                            <a href="<?= Yii::$app->urlManager->createUrl(['blog/categorie']) ?>">READ MORE</a>
                            <div class="like-container">
                                <div class="like-cnt unchecked likeColor">
                                    <i class="like-btn material-icons heart-icon">
                                        <img class="heartMain" src="/images/innerHeart2.png" alt="" draggable="false">
                                    </i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="individualCards">
                <div class="cardsimg">
                    <img src="/images/blogimg.png" alt="">
                </div>
                <div class="cardsText">
                    <div class="cardsTextField">
                        <div class="cardsTextInfo">
                            <div class="cardsInfo">Grid of different categories of accounting lessons</div>
                            <div class="cardsDate">
                                <img src="/images/calendarimg.png" alt="">
                                <div class="articleDate"><?=date('M') . ' ' . date('d') . ', ' . date('Y') ?></div>
                            </div>
                            <div class="cardsInfo">Grid of different categories of accounting lessons</div>
                        </div>
                        <div class="cardsLike">
                            <a href="<?= Yii::$app->urlManager->createUrl(['blog/categorie']) ?>">READ MORE</a>
                            <div class="like-container">
                                <div class="like-cnt unchecked likeColor">
                                    <i class="like-btn material-icons heart-icon">
                                        <img class="heartMain" src="/images/innerHeart2.png" alt="" draggable="false">
                                    </i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="individualCards">
                <div class="cardsimg">
                    <img src="/images/blogimg.png" alt="">
                </div>
                <div class="cardsText">
                    <div class="cardsTextField">
                        <div class="cardsTextInfo">
                            <div class="cardsInfo">Grid of different categories of accounting lessons</div>
                            <div class="cardsDate">
                                <img src="/images/calendarimg.png" alt="">
                                <div class="articleDate"><?=date('M') . ' ' . date('d') . ', ' . date('Y') ?></div>
                            </div>
                            <div class="cardsInfo">Grid of different categories of accounting lessons</div>
                        </div>
                        <div class="cardsLike">
                            <a href="<?= Yii::$app->urlManager->createUrl(['blog/categorie']) ?>">READ MORE</a>
                            <img src="/images/inactiveLike.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blogsArticles">
            <div class="blogText"><?=$GLOBALS['text']['sectionSevenText']?></div>
            <div class="blogLine">
                <div></div>
            </div>
            <div class="blogBtn">
                <a href="blog/index">
                    <img src="/images/articlebtn.png" alt="">
                    <span><?=$GLOBALS['text']['sectionSevenBtn']?></span>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="sectionEight">
    <div class="haveQuestions">
        <div class="questionTitle"><?=$GLOBALS['text']['sectionEightStill']?></div>
        <form action="" class="questionForm">
            <div class="questionFields">
                <div class="leftQuestionField">
                    <input type="text" name="name" placeholder="<?=$GLOBALS['text']['sectionEightName']?>">
                    <input type="text"name="email" placeholder="<?=$GLOBALS['text']['sectionEightEmail']?>">
                </div>
                <div class="rightQuestionField">
                    <textarea name="message" placeholder="<?=$GLOBALS['text']['sectionEightMessage']?>"></textarea>
                </div>
            </div>
            <div class="questionbutton">
                <button type="submit">
                    <img src="/images/questionbtn.png" alt="">
                    <span><?=$GLOBALS['text']['sectionEightBtn']?></span>
                </button>
            </div>
        </form>
    </div>
</div>
