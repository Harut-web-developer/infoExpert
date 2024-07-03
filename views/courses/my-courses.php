<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/courses.css?v=1');
?>
<?php
$language = $_COOKIE['language'];
$class1 = '';
if ($language == 'en') {
    $class1 = 'myCoursesEn';
} elseif ($language == 'am') {
    $class1 = 'myCoursesAm';
} elseif ($language == 'ru') {
    $class1 = 'myCoursesRu';
}
?>
<div class="myCourses <?php echo $class1; ?>">
    <div class="myCoursesSection">
        <div class="myCoursesTitleField">
            <a href="javascript:history.go(-1)" class="managmentBack">
                <img src="/images/backButtonCheckout.png" alt="" class="backButtonCheckout">
            </a>
            <div><?=$GLOBALS['text']['tabletMyCourse']?></div>
        </div>
        <div class="userProfileMenuField">
            <span><?=$GLOBALS['text']['mycoursesTitle']?></span>
            <ul class="userProfileMenu">
                <li><a href="/user-profile/achievements"><?=$GLOBALS['text']['tabletachievement']?></a></li>
                <li><a href="/courses/my-courses"><?=$GLOBALS['text']['tabletMyCourse']?></a></li>
                <li><a href="/wishlist/index"><?=$GLOBALS['text']['tabletWishlist']?></a></li>
                <li><a href="/my-card/index"><?=$GLOBALS['text']['tabletCard']?></a></li>
            </ul>
        </div>
        <div class="mainCoursesFields">
            <div class="myCoursesProfileField">
                <div class="myCoursesFieldSection">
                    <div class="myCoursesFieldSectionLeft">
                        <img src="/<?php if(!empty(Yii::$app->user->identity->image)){echo Yii::$app->user->identity->image;}?>" alt="">
                        <div class="usersProfileInfo">
                            <span class="nameAndUsername"><?php if(!empty(Yii::$app->user->identity->username)){echo Yii::$app->user->identity->username;}?></span>
                            <div class="usersProfileInfoPhone">
                                <img src="/images/phonAchievements.png" alt="">
                                <span><?php if(!empty(Yii::$app->user->identity->phone)){echo Yii::$app->user->identity->phone;}?></span>
                            </div>
                            <div class="usersProfileInfoEmail">
                                <img src="/images/mailAchievements.png" alt="">
                                <span><?php if(!empty(Yii::$app->user->identity->email)){echo Yii::$app->user->identity->email;}?></span>
                            </div>
                            <div class="usersProfileInfoLinkdin">
                                <img src="/images/linkdinAchievements.png" alt="">
                                <?php if(!empty(Yii::$app->user->identity->linkdin_url)){?>
                                    <a href="<?=Yii::$app->user->identity->linkdin_url?>" target="_blank"><?=Yii::$app->user->identity->username?></a>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <div class="myCoursesFieldSectionRight">
                        <a href="/user-profile/achievements-edit"><img src="/images/editIconMyCourses.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="cardMyCourses">
                <div class="wrapperMyCourses">
                    <ul class="carouselMyCourses myCoursesFieldAcceptCourses">
                        <li class="myCoursesBlocksField">
                            <div class="myCoursesBlocksFieldMain">
                                <img class="myCoursesPhoto" src="/images/courseimage.png" alt="" draggable="false">
                                <div class="myCoursesBlocksFieldMainInfo">
                                    <div class="infoTitle">1C: Accounting 8.3 dfbh dfherh drherh adryeh aey</div>
                                    <div class="myCoursesRating">
                                        <div class="ratingStarMyourse">
                                            <img src="/images/ratingStar.png" alt="">
                                            <img src="/images/ratingStar.png" alt="">
                                            <img src="/images/ratingStar.png" alt="">
                                            <img src="/images/ratingStar.png" alt="">
                                            <img src="/images/ratingStar.png" alt="">
                                        </div>
                                        <span>Leave a rating</span>
                                    </div>
                                    <div class="progress" style="height: 3px;">
                                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="myCourseercentText">46 % complete</span>
                                </div>
                            </div>
                        </li>
                        <li class="myCoursesBlocksField">
                            <div class="myCoursesBlocksFieldMain">
                                <img class="myCoursesPhoto" src="/images/courseimage.png" alt="" draggable="false">
                                <div class="myCoursesBlocksFieldMainInfo">
                                    <div class="infoTitle">1C: Accounting 8.3</div>
                                    <div class="myCoursesRating">
                                        <div class="ratingStarMyourse">
                                            <img src="/images/ratingStar.png" alt="">
                                            <img src="/images/ratingStar.png" alt="">
                                            <img src="/images/ratingStar.png" alt="">
                                            <img src="/images/ratingStar.png" alt="">
                                            <img src="/images/ratingStar.png" alt="">
                                        </div>
                                        <span>Leave a rating</span>
                                    </div>
                                    <div class="progress" style="height: 3px;">
                                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="myCourseercentText">46 % complete</span>
                                </div>
                            </div>
                        </li>
                        <li class="myCoursesBlocksField">
                            <div class="myCoursesBlocksFieldMain">
                                <img class="myCoursesPhoto" src="/images/courseimage.png" alt="" draggable="false">
                                <div class="myCoursesBlocksFieldMainInfo">
                                    <div class="infoTitle">1C: Accounting 8.3</div>
                                    <div class="myCoursesRating">
                                        <div class="ratingStarMyourse">
                                            <img src="/images/ratingStar.png" alt="">
                                            <img src="/images/ratingStar.png" alt="">
                                            <img src="/images/ratingStar.png" alt="">
                                            <img src="/images/ratingStar.png" alt="">
                                            <img src="/images/ratingStar.png" alt="">
                                        </div>
                                        <span>Leave a rating</span>
                                    </div>
                                    <div class="progress" style="height: 3px;">
                                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="myCourseercentText">46 % complete</span>
                                </div>
                            </div>
                        </li>
                        <li class="myCoursesBlocksField">
                            <div class="myCoursesBlocksFieldMain">
                                <img class="myCoursesPhoto" src="/images/courseimage.png" alt="" draggable="false">
                                <div class="myCoursesBlocksFieldMainInfo">
                                    <div class="infoTitle">1C: Accounting 8.3</div>
                                    <div class="myCoursesRating">
                                        <div class="ratingStarMyourse">
                                            <img src="/images/ratingStar.png" alt="">
                                            <img src="/images/ratingStar.png" alt="">
                                            <img src="/images/ratingStar.png" alt="">
                                            <img src="/images/ratingStar.png" alt="">
                                            <img src="/images/ratingStar.png" alt="">
                                        </div>
                                        <span>Leave a rating</span>
                                    </div>
                                    <div class="progress" style="height: 3px;">
                                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="myCourseercentText">46 % complete</span>
                                </div>
                            </div>
                        </li>
                        <li class="myCoursesBlocksField">
                            <div class="myCoursesBlocksFieldMain">
                                <img class="myCoursesPhoto" src="/images/courseimage.png" alt="" draggable="false">
                                <div class="myCoursesBlocksFieldMainInfo">
                                    <div class="infoTitle">1C: Accounting 8.3</div>
                                    <div class="myCoursesRating">
                                        <div class="ratingStarMyourse">
                                            <img src="/images/ratingStar.png" alt="">
                                            <img src="/images/ratingStar.png" alt="">
                                            <img src="/images/ratingStar.png" alt="">
                                            <img src="/images/ratingStar.png" alt="">
                                            <img src="/images/ratingStar.png" alt="">
                                        </div>
                                        <span>Leave a rating</span>
                                    </div>
                                    <div class="progress" style="height: 3px;">
                                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="myCourseercentText">46 % complete</span>
                                </div>
                            </div>
                        </li>
                        <li class="myCoursesBlocksField">
                            <div class="myCoursesBlocksFieldMain">
                                <img class="myCoursesPhoto" src="/images/courseimage.png" alt="" draggable="false">
                                <div class="myCoursesBlocksFieldMainInfo">
                                    <div class="infoTitle">1C: Accounting 8.3</div>
                                    <div class="myCoursesRating">
                                        <div class="ratingStarMyourse">
                                            <img src="/images/ratingStar.png" alt="">
                                            <img src="/images/ratingStar.png" alt="">
                                            <img src="/images/ratingStar.png" alt="">
                                            <img src="/images/ratingStar.png" alt="">
                                            <img src="/images/ratingStar.png" alt="">
                                        </div>
                                        <span>Leave a rating</span>
                                    </div>
                                    <div class="progress" style="height: 3px;">
                                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="myCourseercentText">46 % complete</span>
                                </div>
                            </div>
                        </li>
                        <li class="myCoursesBlocksField">
                            <div class="myCoursesBlocksFieldMain">
                                <img class="myCoursesPhoto" src="/images/courseimage.png" alt="" draggable="false">
                                <div class="myCoursesBlocksFieldMainInfo">
                                    <div class="infoTitle">1C: Accounting 8.3</div>
                                    <div class="myCoursesRating">
                                        <div class="ratingStarMyourse">
                                            <img src="/images/ratingStar.png" alt="">
                                            <img src="/images/ratingStar.png" alt="">
                                            <img src="/images/ratingStar.png" alt="">
                                            <img src="/images/ratingStar.png" alt="">
                                            <img src="/images/ratingStar.png" alt="">
                                        </div>
                                        <span>Leave a rating</span>
                                    </div>
                                    <div class="progress" style="height: 3px;">
                                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="myCourseercentText">46 % complete</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="myCoursesSectionMobile">
        <div class="myCoursesTitleField">
            <img src="/images/backButtonCheckout.png" alt="" class="backButtonCheckout">
            <div><?=$GLOBALS['text']['tabletMyCourse']?></div>
        </div>
        <div class="myCoursesMobile">
            <div class="myCoursesBlocksField">
                <img class="myCoursesPhoto" src="/images/courseimage.png" alt="" draggable="false">
                <div class="myCoursesBlocksFieldMain">
                    <span>Trade Management: Marketing, Sales BITRIX / CRM</span>
                    <div class="myCoursesRating">
                        <div class="ratingStarMyourse">
                            <img src="/images/ratingStar.png" alt="">
                            <img src="/images/ratingStar.png" alt="">
                            <img src="/images/ratingStar.png" alt="">
                            <img src="/images/ratingStar.png" alt="">
                            <img src="/images/ratingStar.png" alt="">
                        </div>
                        <span>Leave a rating</span>
                    </div>
                    <div class="blogInfoPercent">
                        <div class="progress" style="height: 3px;">
                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="myCourseercentText">46 % complete</span>
                    </div>
                </div>
            </div>
            <div class="myCoursesBlocksField">
                <img class="myCoursesPhoto" src="/images/courseimage.png" alt="" draggable="false">
                <div class="myCoursesBlocksFieldMain">
                    <span>Trade Management: Marketing, Sales BITRIX / CRM</span>
                    <div class="myCoursesRating">
                        <div class="ratingStarMyourse">
                            <img src="/images/ratingStar.png" alt="">
                            <img src="/images/ratingStar.png" alt="">
                            <img src="/images/ratingStar.png" alt="">
                            <img src="/images/ratingStar.png" alt="">
                            <img src="/images/ratingStar.png" alt="">
                        </div>
                        <span>Leave a rating</span>
                    </div>
                    <div class="blogInfoPercent">
                        <div class="progress" style="height: 3px;">
                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="myCourseercentText">46 % complete</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="containerSeeMoreMyCourses">
            <button>
                <img class="seeMoreBlog" src="/images/seeMoreBlog.png" alt="">
                <span class="seeMoreText"><?= $GLOBALS['text']['sectionSixBtnMobile'] ?></span>
            </button>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        function slider(carousel, wrapper, firstCard) {
            const firstCardWidth = firstCard.offsetWidth;
            let isDragging = false,
                startX,
                startScrollLeft,
                timeoutId;

            const dragStart = (e) => {
                isDragging = true;
                carousel.classList.add("dragging");
                startX = e.touches ? e.touches[0].pageX : e.pageX;
                startScrollLeft = carousel.scrollLeft;
            };

            const dragging = (e) => {
                if (!isDragging) return;
                const newScrollLeft = startScrollLeft - ((e.touches ? e.touches[0].pageX : e.pageX) - startX);
                if (newScrollLeft <= 0 || newScrollLeft >= carousel.scrollWidth - carousel.offsetWidth) {
                    isDragging = false;
                    return;
                }
                carousel.scrollLeft = newScrollLeft;
            };

            const dragStop = () => {
                isDragging = false;
                carousel.classList.remove("dragging");
            };

            const autoPlay = () => {
                if (window.innerWidth < 800) return;
                const totalCardWidth = carousel.scrollWidth;
                const maxScrollLeft = totalCardWidth - carousel.offsetWidth;
                if (carousel.scrollLeft >= maxScrollLeft) return;
            };

            carousel.addEventListener("touchstart", dragStart);
            carousel.addEventListener("mousedown", dragStart);
            carousel.addEventListener("touchmove", dragging);
            carousel.addEventListener("mousemove", dragging);
            document.addEventListener("touchend", dragStop);
            document.addEventListener("mouseup", dragStop);
            wrapper.addEventListener("mouseenter", () =>
                clearTimeout(timeoutId));
            wrapper.addEventListener("mouseleave", autoPlay);
        }
        const wrapper = document.querySelector(".wrapperMyCourses");
        const carousel = document.querySelector(".carouselMyCourses");
        if (carousel != null){
            const firstCard = carousel.querySelector(".myCoursesBlocksField");
            slider(carousel, wrapper, firstCard);
        }
    });
</script>