<?php
use yii\web\View;
use yii\web\YiiAsset;

/** @var yii\web\View $this */
$this->registerCssFile('@web/css/my-card.css');
$this->registerCssFile('@web/css/wishlist.css');
$this->registerJsFile('@web/js/my-card.js', ['position' => \yii\web\View::POS_END,'depends' => [YiiAsset::class],]);

$this->registerJsFile('@web/js/my-card.js', ['position' => \yii\web\View::POS_END,'depends' => [YiiAsset::class],]);
$this->registerJsFile('https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js', ['position' => View::POS_END]);
$this->registerJsFile('https://cdn.jsdelivr.net/npm/mo-js', ['position' => View::POS_END]);
?>
<div class="myCard">
    <div class="myCardContent">
        <div class="myCardMainField">
            <div class="userProfileMenuField">
                <span>My Profile</span>
                <ul class="userProfileMenu">
                    <li><a href="/user-profile/achievements">My achievements</a></li>
                    <li><a href="/courses/my-courses">My courses</a></li>
                    <li><a href="/wishlist/index">Wishlist</a></li>
                    <li><a href="/my-card/index">My card</a></li>
                </ul>
            </div>
            <div class="mainContent">
                <div class="myCoursesProfileField">
                    <div class="myCoursesFieldSection">
                        <div class="myCoursesFieldSectionLeft">
                            <img src="/images/profileimage.png" alt="">
                            <span>Ani Martirosian</span>
                            <div class="usersProfileInfo">
                                <div class="usersProfileInfoPhone">
                                    <img src="/images/phonAchievements.png" alt="">
                                    <span>369 258 147</span>
                                </div>
                                <div class="usersProfileInfoEmail">
                                    <img src="/images/mailAchievements.png" alt="">
                                    <span>a@martirosian.com</span>
                                </div>
                                <div class="usersProfileInfoLinkdin">
                                    <img src="/images/linkdinAchievements.png" alt="">
                                    <span>Ani Martirosian</span>
                                </div>
                            </div>
                        </div>
                        <div class="myCoursesFieldSectionRight">
                            <a href="/user-profile/achievements-edit"><img src="/images/editIconMyCourses.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="CoursesAndCategoriesCard">
                    <div class="topSlider">
                        <div class="changeBody2">
                            <ul class="carousel_2">
                                <li class="card_2">
                                    <div class="img_2"><img src="/images/cardImageCourses.png" alt="" draggable="false"> </div>
                                    <div class="cardContent">
                                        <div class="cardBody_2">
                                            <span class="span1_2">1C: Accounting 8.3</span>
                                            <div class="starAndTxt_2">
                                                <div class="starDivWishlistCourses">
                                                    <img src="/images/cardStar.png" alt="" draggable="false">
                                                    <img src="/images/cardStar.png" alt="" draggable="false">
                                                    <img src="/images/cardStar.png" alt="" draggable="false">
                                                    <img src="/images/cardStar.png" alt="" draggable="false">
                                                    <img src="/images/cardStarWhite.png" alt="" draggable="false">
                                                </div>
                                                <h1 class="span2_2">xxxxx <span class="spanAmd">AMD</span></h1>
                                            </div>
                                        </div>
                                        <div class="cardCenter_2">
                                            <div class="cardtxt1_2">
                                                <img src="/images/courses1.png" alt="">
                                                <span>Number of courses: 29+1 exam /3 days a week/</span>
                                            </div>
                                            <div class="cardtxt2_2">
                                                <img src="/images/courses2.png" alt="">
                                                <span>Certificate / in Armenian and English /</span>
                                            </div>
                                        </div>
                                        <div class="footerCard_2">
                                            <div class="wishlistBtnField">
                                                <button>
                                                    <img src="/images/wishlist1.png" alt="">
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
                                <li class="card_2">
                                    <div class="img_2"><img src="/images/cardImageCourses.png" alt="" draggable="false"> </div>
                                    <div class="cardContent">
                                        <div class="cardBody_2">
                                            <span class="span1_2">1C: Accounting 8.3</span>
                                            <div class="starAndTxt_2">
                                                <div class="starDivWishlistCourses">
                                                    <img src="/images/cardStar.png" alt="" draggable="false">
                                                    <img src="/images/cardStar.png" alt="" draggable="false">
                                                    <img src="/images/cardStar.png" alt="" draggable="false">
                                                    <img src="/images/cardStar.png" alt="" draggable="false">
                                                    <img src="/images/cardStarWhite.png" alt="" draggable="false">
                                                </div>
                                                <h1 class="span2_2">xxxxx <span class="spanAmd">AMD</span></h1>
                                            </div>
                                        </div>
                                        <div class="cardCenter_2">
                                            <div class="cardtxt1_2">
                                                <img src="/images/courses1.png" alt="">
                                                <span>Number of courses: 29+1 exam /3 days a week/</span>
                                            </div>
                                            <div class="cardtxt2_2">
                                                <img src="/images/courses2.png" alt="">
                                                <span>Certificate / in Armenian and English /</span>
                                            </div>
                                        </div>
                                        <div class="footerCard_2">
                                            <div class="wishlistBtnField">
                                                <button>
                                                    <img src="/images/wishlist1.png" alt="">
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
                                <li class="card_2">
                                    <div class="img_2"><img src="/images/cardImageCourses.png" alt="" draggable="false"> </div>
                                    <div class="cardContent">
                                        <div class="cardBody_2">
                                            <span class="span1_2">1C: Accounting 8.3</span>
                                            <div class="starAndTxt_2">
                                                <div class="starDivWishlistCourses">
                                                    <img src="/images/cardStar.png" alt="" draggable="false">
                                                    <img src="/images/cardStar.png" alt="" draggable="false">
                                                    <img src="/images/cardStar.png" alt="" draggable="false">
                                                    <img src="/images/cardStar.png" alt="" draggable="false">
                                                    <img src="/images/cardStarWhite.png" alt="" draggable="false">
                                                </div>
                                                <h1 class="span2_2">xxxxx <span class="spanAmd">AMD</span></h1>
                                            </div>
                                        </div>
                                        <div class="cardCenter_2">
                                            <div class="cardtxt1_2">
                                                <img src="/images/courses1.png" alt="">
                                                <span>Number of courses: 29+1 exam /3 days a week/</span>
                                            </div>
                                            <div class="cardtxt2_2">
                                                <img src="/images/courses2.png" alt="">
                                                <span>Certificate / in Armenian and English /</span>
                                            </div>
                                        </div>
                                        <div class="footerCard_2">
                                            <div class="wishlistBtnField">
                                                <button>
                                                    <img src="/images/wishlist1.png" alt="">
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
                                <li class="card_2">
                                    <div class="img_2"><img src="/images/cardImageCourses.png" alt="" draggable="false"> </div>
                                    <div class="cardContent">
                                        <div class="cardBody_2">
                                            <span class="span1_2">1C: Accounting 8.3</span>
                                            <div class="starAndTxt_2">
                                                <div class="starDivWishlistCourses">
                                                    <img src="/images/cardStar.png" alt="" draggable="false">
                                                    <img src="/images/cardStar.png" alt="" draggable="false">
                                                    <img src="/images/cardStar.png" alt="" draggable="false">
                                                    <img src="/images/cardStar.png" alt="" draggable="false">
                                                    <img src="/images/cardStarWhite.png" alt="" draggable="false">
                                                </div>
                                                <h1 class="span2_2">xxxxx <span class="spanAmd">AMD</span></h1>
                                            </div>
                                        </div>
                                        <div class="cardCenter_2">
                                            <div class="cardtxt1_2">
                                                <img src="/images/courses1.png" alt="">
                                                <span>Number of courses: 29+1 exam /3 days a week/</span>
                                            </div>
                                            <div class="cardtxt2_2">
                                                <img src="/images/courses2.png" alt="">
                                                <span>Certificate / in Armenian and English /</span>
                                            </div>
                                        </div>
                                        <div class="footerCard_2">
                                            <div class="wishlistBtnField">
                                                <button>
                                                    <img src="/images/wishlist1.png" alt="">
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
                                <li class="card_2">
                                    <div class="img_2"><img src="/images/cardImageCourses.png" alt="" draggable="false"> </div>
                                    <div class="cardContent">
                                        <div class="cardBody_2">
                                            <span class="span1_2">1C: Accounting 8.3</span>
                                            <div class="starAndTxt_2">
                                                <div class="starDivWishlist">
                                                    <img src="/images/cardStar.png" alt="" draggable="false">
                                                    <img src="/images/cardStar.png" alt="" draggable="false">
                                                    <img src="/images/cardStar.png" alt="" draggable="false">
                                                    <img src="/images/cardStar.png" alt="" draggable="false">
                                                    <img src="/images/cardStarWhite.png" alt="" draggable="false">
                                                </div>
                                                <h1 class="span2_2">xxxxx <span class="spanAmd">AMD</span></h1>
                                            </div>
                                        </div>
                                        <div class="cardCenter_2">
                                            <div class="cardtxt1_2">
                                                <img src="/images/courses1.png" alt="">
                                                <span>Number of courses: 29+1 exam /3 days a week/</span>
                                            </div>
                                            <div class="cardtxt2_2">
                                                <img src="/images/courses2.png" alt="">
                                                <span>Certificate / in Armenian and English /</span>
                                            </div>
                                        </div>
                                        <div class="footerCard_2">
                                            <div class="wishlistBtnField">
                                                <button>
                                                    <img src="/images/wishlist1.png" alt="">
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
                </div>
            </div>
        </div>
        <div class="totalPriceField">
            <div class="totalPriceFieldSection">
                <div class="myCardTotalPrice">
                    <span>Total:  $38.97</span>
                    <button>
                        <img src="/images/btncheckoutcard.png" alt="">
                        <a href="/my-card/checkout">Checkout</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        function slider(carousel, wrapper, firstCard) {
            const firstCardWidth = firstCard.offsetWidth + parseFloat(getComputedStyle(firstCard).marginRight);
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
                // timeoutId = setTimeout(() =>
                //     carousel.scrollLeft += firstCardWidth, 2500);
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

        const carousel = document.querySelector(".bottomSlider .carousel_");
        const wrapper = document.querySelector(".bottomSlider");
        const firstCard = carousel.querySelector(".card_");
        slider(carousel, wrapper, firstCard);

        const carousel_2 = document.querySelector(".changeBody2 .carousel_2");
        const wrapper_2 = document.querySelector(".changeBody2");
        if (carousel_2) {
            const firstCard_2 = carousel_2.querySelector(".card_2");
            slider(carousel_2, wrapper_2, firstCard_2);
        }
    });
</script>