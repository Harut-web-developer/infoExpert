<?php

use app\models\AcLessons;
use app\models\AcReviews;
use app\models\AcWishlist;
use yii\web\View;
use yii\web\YiiAsset;
/** @var yii\web\View $this */

$this->title = 'Infoexpert';
$this->registerJsFile('https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js', ['type' => "module"]);
$this->registerJsFile('https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js', ['nomodule' => true]);
?>

<div class="headerBackground">
    <div class="apply">
        <span class="applyMarket"><?=$GLOBALS['text']['sectionOneMarket']?></span>
        <span class="boundaries"><?=$GLOBALS['text']['sectionOneBoundaries']?></span>
        <?php if (!empty($lessons)){
        $lang = $_COOKIE['language'];
        $lessons = AcLessons::find()->select('id,lesson_name_'.$lang.' as lesson_name')->where(['status' => '1'])->asArray()->all();
        ?>
        <a href="/apply-now/index">
            <img src="/images/apply.png" alt="">
            <span><?=$GLOBALS['text']['__applynow__']?></span>
        </a>
        <?php } ?>
    </div>
</div>
<div class="sectionTwo">
    <div class="sectionInfo">
        <div class="numbersInfo">
            <img src="/images/partnerinfoimg.png" alt="">
            <div class="counter-container">
                <span class="numberSectionTwo"><?=$url_info['partner']?></span>
                <span class="addSymbol">+</span>
            </div>
            <span class="textSectionTwo"><?=$GLOBALS['text']['sectionTwoPartner']?></span>
        </div>
        <div class="numbersInfo">
            <img src="/images/productinfoimg.png" alt="">
            <div class="counter-container">
                <span class="numberSectionTwo"><?=$url_info['products']?></span>
                <span class="addSymbol">+</span>
            </div>
            <span class="textSectionTwo"><?=$GLOBALS['text']['sectionTwoProduct']?></span>
        </div>
        <div class="numbersInfo">
            <img src="/images/programminfoimg.png" alt="">
            <div class="counter-container">
                <span class="numberSectionTwo"><?=$url_info['programms']?></span>
                <span class="addSymbol">+</span>
            </div>
            <span class="textSectionTwo"><?=$GLOBALS['text']['sectionTwoProgram']?></span>
        </div>
    </div>
    <div class="sectionInfoMobile">
        <div class="autoplay mobileInfoSection">
            <div>
                <div class="numbersInfo">
                    <img src="/images/partnerinfoimg.png" alt="">
                    <div class="counter-container">
                        <span class="numberSectionTwo"><?=$url_info['partner']?></span>
                        <span class="addSymbol">+</span>
                    </div>
                    <span class="textSectionTwo"><?=$GLOBALS['text']['sectionTwoPartner']?></span>
                </div>
            </div>
            <div>
                <div class="numbersInfo">
                    <img src="/images/productinfoimg.png" alt="">
                    <div class="counter-container">
                        <span class="numberSectionTwo"><?=$url_info['products']?></span>
                        <span class="addSymbol">+</span>
                    </div>
                    <span class="textSectionTwo"><?=$GLOBALS['text']['sectionTwoProduct']?></span>
                </div>
            </div>
            <div>
                <div class="numbersInfo">
                    <img src="/images/programminfoimg.png" alt="">
                    <div class="counter-container">
                        <span class="numberSectionTwo"><?=$url_info['programms']?></span>
                        <span class="addSymbol">+</span>
                    </div>
                    <span class="textSectionTwo"><?=$GLOBALS['text']['sectionTwoProgram']?></span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="sectionThree sliderWrapper">
    <div class="sliderCourses">
        <div class="slider">
            <?php
            if (!empty($lessons_courses)){foreach ($lessons_courses as $lesson){?>
                <div class="learn slide">
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
                                <span><?=$lesson['lesson_name']?></span>
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
                        <img src="/<?=$lesson['img']?>" alt="">
                    </div>
                </div>
            <?php }}?>
        </div>
    </div>
    <div class="sliderCoursesMobile">
        <div class="slider">
            <?php if (!empty($lessons_courses)){foreach ($lessons_courses as $lesson){?>
                <div class="learnMobile slide">
                    <img src="/<?=$lesson['img']?>" alt="">
                    <div class="coursesBg">
                        <span><?=$GLOBALS['text']['sectionThreeCourses']?></span>
                        <p><?=$GLOBALS['text']['sectionThreeLearn']?></p>
                    </div>
                    <div class="logoManagement">
                        <div class="courseLogo">
                            <img src="/images/logomanagcourse.png" alt="">
                        </div>
                        <div class="courseTitle">
                            <span><?=$lesson['lesson_name']?></span>
                        </div>
                    </div>
                    <a href="/courses/index">
                        <img src="/images/logomanag.png" alt="">
                        <span><?=$GLOBALS['text']['sectionThreeBtn']?></span>
                    </a>
                </div>
            <?php }}?>
        </div>
    </div>
    </div>
</div>
<div class="sectionFour" id="sectionAnswers">
    <div class="answers">
        <div class="frequency">
            <span class="freqAsked"><?=$GLOBALS['text']['sectionFourTitle']?></span>
            <span class="freqLook"><?=$GLOBALS['text']['sectionFourLooking']?></span>
        </div>
        <div class="questions">
            <div class="leftQuestions">
                <?php if(!empty($answers)){foreach ($first_part_faq as $part_one){?>
                    <div class="answersField">
                        <div class="questionField">
                            <span><?=$part_one['question']?></span>
                            <img src="/images/arrowDown.png" alt="">
                        </div>
                        <div class="answerQuestion"><?=$part_one['answer']?></div>
                    </div>
                <?php }}?>
            </div>
            <div class="rightQuestions">
                <?php if($total_rows_faq > 1){foreach ($second_par_faq as $part_two){?>
                    <div class="answersField">
                        <div class="questionField">
                            <span><?=$part_two['question']?></span>
                            <img src="/images/arrowDown.png" alt="">
                        </div>
                        <div class="answerQuestion"><?=$part_two['answer']?></div>
                    </div>
                <?php }}?>
            </div>
        </div>
    </div>
</div>
<div class="sectionFive">
    <div class="partnerSection slider">
        <span class="partnersTitle"><?=$GLOBALS['text']['sectionFiveTitle']?></span>
        <div class="carousel">
            <ul class="carousel-slides">
                <?php
                if (!empty($partners)){foreach ($partners as $partner){?>
                    <li class="carousel-slide">
                        <img class="img-prev" src="<?=$partner['img_black']?>" alt="">
                        <img src="<?=$partner['img']?>" class="img-top" alt="Card Front">
                    </li>
                <?php }}?>
            </ul>
        </div>
    </div>
</div>
<!-- Swiper CSS-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.css">
<div class="sectionSix" id="testimonials">
    <div class="testimonial">
        <div class="testimonialsTitles">
            <span class="testimonialOrangeTitle"><?=$GLOBALS['text']['sectionSixTitle']?></span>
            <span class="testimonialWhiteTitle"><?=$GLOBALS['text']['sectionSixText']?></span>
        </div>
        <div class="slide-container swiper webTabletTestimonial">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper testimonialsImg">
                    <?php
                    if (!empty($testimonials)){foreach ($testimonials as $testimonial){?>
                    <div class="swiper-slide">
                        <div class="blockTestimonial">
                            <div class="intoBlockTestimonial">
                                <div class="testimonialSimbol">
                                    <img src="/images/symbolTestimonial.png" alt="">
                                </div>
                                <div class="testimonialsText"><?=$testimonial['text']?></div>
                                <div class="fieldsLinkdin">
                                    <span class="testimonialsAuthor"><?=$testimonial['name']?></span>
                                    <a target="<?=$testimonial['url'] ? '_blank' : ''?>" href="<?=$testimonial['url']?>"><img src="/images/linkdinNew.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }}?>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="testimonialSectionMobile">
        <div class="testimonialsTitles">
            <span class="testimonialOrangeTitle"><?=$GLOBALS['text']['sectionSixTitle']?></span>
            <span class="testimonialWhiteTitle"><?=$GLOBALS['text']['sectionSixText']?></span>
        </div>
        <div class="mobileTestimonial">
            <?php
            if (!empty($testimonials)){foreach ($testimonials as $item){?>
                <div class="blockTestimonialMobile">
                    <div class="intoBlockTestimonial">
                        <div class="testimonialSimbol">
                            <img src="/images/symbolTestimonial.png" alt="">
                        </div>
                        <div class="testimonialsText"><?=$item['text']?></div>
                        <div class="fieldsLinkdin">
                            <span class="testimonialsAuthor"><?=$item['name']?></span>
                            <a target="<?=$item['url'] ? '_blank' : ''?>" href="<?=$item['url']?>"><img src="/images/linkdinNew.png" alt=""></a>
                        </div>
                    </div>
                </div>
            <?php }}?>
        </div>
        <div class="testimonialMobileBtn">
            <button id="testimonialBtnMobile">
                <img src="/images/mobileBtnSix.png" alt="">
                <span><?=$GLOBALS['text']['sectionSixBtnMobile']?></span>
            </button>
        </div>
    </div>
</div>
<!-- Swiper JS-->
<script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.js"></script>
<div class="sectionSeven" id="section01">
    <div class="sectionBlog">
        <div class="blogTitleField">
            <span class="blogsTitle"><?=$GLOBALS['text']['sectionSevenTitle']?></span>
            <span class="blogsTextMobile"><?=$GLOBALS['text']['sectionSevenText']?></span>
        </div>
        <div class="blogsCard">
            <?php if (!empty($blogs)){foreach ($blogs as $blog){?>
                <div class="individualCards">
                    <div class="cardsimg">
                        <img src="<?=$blog['img']?>" alt="">
                    </div>
                    <div class="cardsText">
                        <div class="cardsTextField">
                            <div class="cardsTextInfo">
                                <div class="cardsInfo"><?=$blog['page_name']?></div>
                                <div class="cardsDate">
                                    <img src="/images/calendarimg.png" alt="">
                                    <div class="articleDate"><?=$blog['create_date']?></div>
                                </div>
                                <div class="cardsInfo"><?=$blog['page_title']?></div>
                            </div>
                            <div class="cardsLike">
                                <a href="<?= Yii::$app->urlManager->createUrl(['blog/'.$blog['url']]) ?>"><?=$GLOBALS['text']['mainReadMore']?></a>
                                <div class='large-font'>
                                    <ion-icon name="heart" data-id="<?=$blog['id']?>" data-active="<?=AcWishlist::getWishlist($blog['id'], 2) ? AcWishlist::getWishlist($blog['id'], 2) : 0?>" data-type="2">
                                        <div class='red-bg'></div>
                                    </ion-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }}?>
        </div>
        <div class="blogsArticles">
            <div class="blogText"><?=$GLOBALS['text']['sectionSevenText']?></div>
            <div class="blogLine">
                <div></div>
            </div>
            <div class="blogBtn">
                <a href="<?= Yii::$app->urlManager->createUrl(['blog/index'])?>">
                    <img src="/images/articlebtn.png" alt="">
                    <span><?=$GLOBALS['text']['sectionSevenBtn']?></span>
                </a>
            </div>
        </div>
    </div>
    <div class="sectionBlogMobile">
        <div class="blogTitleField">
            <span class="blogsTitle"><?=$GLOBALS['text']['sectionSevenTitle']?></span>
            <span class="blogsTextMobile"><?=$GLOBALS['text']['sectionSevenText']?></span>
        </div>
        <div class="blogsCard">
            <?php if (!empty($blogs_mobile)){foreach ($blogs_mobile as $blog){?>
                <div class="individualCards">
                    <div class="cardsimg">
                        <img src="<?=$blog['img']?>" alt="">
                    </div>
                    <div class="cardsText">
                        <div class="cardsTextField">
                            <div class="cardsTextInfo">
                                <div class="cardsInfo"><?=$blog['page_name']?></div>
                                <div class="cardsDate">
                                    <img src="/images/calendarimg.png" alt="">
                                    <div class="articleDate"><?=$blog['create_date']?></div>
                                </div>
                                <div class="cardsInfo"><?=$blog['page_title']?></div>
                            </div>
                            <div class="cardsLike">
                                <a href="<?= Yii::$app->urlManager->createUrl(['blog/'.$blog['url']]) ?>"><?=$GLOBALS['text']['mainReadMore']?></a>
                                <div class='large-font'>
                                    <ion-icon name="heart"  data-id="<?=$blog['id']?>" data-active="<?=AcWishlist::getWishlist($blog['id'],2) ? AcWishlist::getWishlist($blog['id'],2) : 0?>" data-type="2">
                                        <div class='red-bg'></div>
                                    </ion-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }}?>
        </div>
        <div class="blogsMobileBtn">
            <button id="blogsBtnMobile">
                <img src="/images/mobileBtnSix.png" alt="">
                <span><?=$GLOBALS['text']['sectionSixBtnMobile']?></span>
            </button>
        </div>
    </div>
</div>
<div class="sectionEight">
    <div class="haveQuestions">
        <div class="questionTitle"><?=$GLOBALS['text']['sectionEightStill']?></div>
        <form action="" class="questionForm" method="post">
            <input type="hidden" name="<?= $this->renderDynamic('return Yii::$app->request->csrfParam;'); ?>" value="<?= $this->renderDynamic('return Yii::$app->request->csrfToken;'); ?>" />
            <div class="questionFields">
                <div class="leftQuestionField">
                    <input type="text" name="name" required placeholder="<?=$GLOBALS['text']['sectionEightName']?>">
                    <input type="text"name="email" required placeholder="<?=$GLOBALS['text']['sectionEightEmail']?>">
                </div>
                <div class="rightQuestionField">
                    <textarea name="question" required placeholder="<?=$GLOBALS['text']['sectionEightMessage']?>"></textarea>
                </div>
            </div>
            <div class="questionbutton">
                <button type="submit" name="haveQuestion">
                    <img src="/images/questionbtn.png" alt="">
                    <span><?=$GLOBALS['text']['sectionEightBtn']?></span>
                </button>
            </div>
        </form>
    </div>
    <img class="puzzle1" src="/images/puzzle3.png" alt="">
    <img class="puzzle2" src="/images/puzzle3.png" alt="">
    <img class="puzzle3" src="/images/puzzle3.png" alt="">
    <img class="puzzle4" src="/images/puzzle1.png" alt="">
    <img class="puzzle5" src="/images/puzzle1.png" alt="">
    <img class="puzzle6" src="/images/puzzle2.png" alt="">
</div>