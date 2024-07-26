<!-- Mariam 20 ev Harut 80-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.css">

<div class="sectionSixPage">
    <div class="testimonialPage">
        <div class="testimonialsTitlesPage">
            <span class="testimonialOrangeTitle"><?=$GLOBALS['text']['sectionSixTitle']?></span>
            <span class="testimonialWhiteTitlePage"><?=$GLOBALS['text']['sectionSixText']?></span>
        </div>
        <div class="slide-container swiper webTabletTestimonial">
            <div class="slide-content pageTestimonial">
                <div class="card-wrapper swiper-wrapper testimonialsImg">
                    <?php
                    if (!empty($testimonials)){foreach ($testimonials as $testimonial){?>
                        <div class="swiper-slide">
                            <div class="blockTestimonial blockTestimonialPopup">
                                <div class="intoBlockTestimonialPage">
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
        <div class="testimonialsTitlesPage">
            <span class="testimonialOrangeTitle"><?=$GLOBALS['text']['sectionSixTitle']?></span>
            <span class="testimonialWhiteTitle"><?=$GLOBALS['text']['sectionSixText']?></span>
        </div>
        <div class="mobileTestimonial">
            <?php
            if (!empty($testimonials)){foreach ($testimonials as $item){?>
                <div class="blockTestimonialMobile blockTestimonialPopup">
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
<!--testimonial popup-->
<div class="popup-wrap-testimonial">
    <div class="popup-box-testimonial">
        <div class="testimonial-container">
            <span class="close-btn-testimonial popup-close-testimonial">x</span>
            <div class="txt-content"></div>
        </div>
    </div>
</div>
<script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.js"></script>

