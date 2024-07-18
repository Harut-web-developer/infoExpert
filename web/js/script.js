if($(window).width()<=600){
    $('.img-prev').each(function(){
        $(this).next().addClass('img-prev').removeClass('img-top');
        $(this).remove();
    });
}
$(".menuAboutDropDown").hover(function(){
    $('.dropDownAbout').show();
},function(){
    $('.dropDownAbout').hide();
});
$(".menuCoursesDropDown").hover(function(){
    $('.dropDownCoursesBg').show();
},function(){
    $('.dropDownCoursesBg').hide();
});

// $(function() {
//     if (window.location.pathname == '/'){
//         $('a[href*=\\#]').on('click', function(e) {
//             e.preventDefault();
//             $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
//         });
//     }
// });
$(".answersField").click(function() {
    var panel = $(this).children(".answerQuestion");
    $(".answerQuestion").not(panel).css("display", "none");
    $(".answerQuestion").not(panel).closest('.answersField').find('.questionField span').css({
        'color': 'white',
        'font-family': '"Roboto_", sans-serif',
        'line-height': '19.2px'
    });
    $(".questions").find('img').css('transform', 'rotate(0deg)');
    panel.toggle();
    $(this).children('.questionField').find('img').css('transform', panel.is(":visible") ? 'rotate(180deg)' : 'rotate(0deg)');
    $(this).children('.questionField').find('span').css({
        'color': panel.is(":visible") ? '#FF782D' : 'white',
        'font-family': 'Roboto_, sans-serif',
        'line-height': '19.2px'
    });
});
(async ()=>   // async IIFE code for slider.
{
    const
        interval       = 1500  // ms
        , paddingRight   = 51
        , slideContainer = document.querySelector('.carousel')
        , slidesWrapper  = document.querySelector('.carousel-slides')
        , slides         = document.querySelectorAll('.carousel-slides > li')
        , delay          = ms => new Promise(r => setTimeout(r, ms))
        , movLeft = (el, mov) => new Promise(r =>
        {
            el.ontransitionend =_=>
            {
                el.ontransitionend = null
                el.style.transition = 'none';
                r()
            }
            el.style.transition = '1s';
            el.style.transform  = `translateX(${-mov}px)`;
        });

    let index = 0;
    if (slidesWrapper != null) {
        while (true) // infinite carrousel loop
        {
            await delay(interval)
            await movLeft(slidesWrapper, slides[index].clientWidth + paddingRight)

            slidesWrapper.appendChild(slides[index])  // mov first slide to the end
            slidesWrapper.style.transform = `translateX(0)` // rest translateX
            index = ++index % slides.length
        }
    }
})()

if (window.location.pathname == '/' || window.location.pathname == '/testimonials'){
    var swiper = new Swiper(".slide-content", {
        slidesPerView: 3,
        spaceBetween: 1,
        slidesPerGroupSkip: 1,
        loop: true,
        centerSlide: 'true',
        fade: 'true',
        grabCursor: 'true',
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },

        breakpoints:{
            0: {
                slidesPerView: 1,
            },
            500: {
                slidesPerView: 2.2,
                spaceBetween: 43,
            },
            600: {
                slidesPerView: 2.2,
                spaceBetween: 50,
            },
            700: {
                slidesPerView: 2.5,
                spaceBetween: 43,
            },
            800: {
                slidesPerView: 2.7,
                spaceBetween: 43,
            },
            950: {
                slidesPerView: 3.3,
                spaceBetween: 43,
            },
            1280: {
                slidesPerView: 4.3,
                spaceBetween: 50,
            },
        },
    });
}
$(document).ready(function () {

    $('body').on('click', '.mainFlag', function () {
        $(this).closest('.flagFields').find('.otherFlags').toggle();
    });
})
if (window.location.pathname == '/') {
    const scrollTop = function () {
        const scrollBtn = $("<button>").attr("id", "scroll-btn").addClass("show").css("opacity", "0");
        scrollBtn.html("<img src=\"/images/scroll-btn.png\" alt=\"\">");
        $("body").append(scrollBtn);

        const scrollBtnDisplay = function () {
            $(window).scrollTop() > $(window).height()
                ? scrollBtn.addClass("show").css("opacity", "1")
                : scrollBtn.removeClass("show").css("opacity", "0");
        };
        $(window).on("scroll", scrollBtnDisplay);

        const scrollWindow = function () {
            if ($(window).scrollTop() !== 0) {
                // setTimeout(function () {
                //     $(window).scrollTop($(window).scrollTop() - 50);
                //     scrollWindow();
                // }, 1);
                $(window).scrollTop(0);
            }
        };
        scrollBtn.on("click", scrollWindow);
    };
    scrollTop();

    $(window).scroll(startCounter);
    function startCounter() {
        let scrollY = (window.pageYOffset || document.documentElement.scrollTop) + window.innerHeight;
        let divPos;
        if(document.querySelector('.sectionInfo')){
            divPos = document.querySelector('.sectionInfo').offsetTop;
        }

        if (scrollY > divPos) {
            $(window).off("scroll", startCounter);

            $('.numberSectionTwo').each(function() {
                var $this = $(this);
                jQuery({
                    Counter: 0
                }).animate({
                    Counter: $this.text().replace(/,/g, '')
                }, {
                    duration: 1000,
                    easing: 'swing',
                    step: function() {
                        $this.text(commaSeparateNumber(Math.floor(this.Counter)));
                    },
                    complete: function() {
                        $this.text(commaSeparateNumber(this.Counter));
                    }
                });
            });
            function commaSeparateNumber(num) {
                return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }
        }
    }
}
if (window.location.pathname == '/') {
    $(document).on("click", ".like-cnt", function () {
        var like_cnt = $(this);
        var like_parent = like_cnt.closest(".like-container");
        var check_status = like_cnt.hasClass("checked");

        var burst = new mojs.Burst({
            parent: like_parent,
            radius: {20: 60},
            count: 15,
            angle: {0: 30},
            children: {
                delay: 250,
                duration: 700,
                radius: {10: 0},
                fill: ['#F36528'],
                easing: mojs.easing.bezier(.08, .69, .39, .97)
            }
        });

        var t1 = new TimelineLite();
        var t2 = new TimelineLite();
        var mojsShape = $("[data-name='mojs-shape']");
        if (!check_status) {
            t1.set(like_cnt, {scale: 0});
            t1.set('.like-btn', {scale: 0});
            t1.to(like_cnt, 0.6, {scale: 1, background: 'transparent', ease: Expo.easeOut});
            t2.to('.like-btn', 0.65, {scale: 1, ease: Elastic.easeOut.config(1, 0.3)}, '+=0.2');
            burst.replay();
            like_cnt.addClass("checked");
            like_cnt.find(".heartMain").attr("src", "/images/innerHeartHover.png");
            mojsShape.css({
                'margin-left': '-25px',
                'margin-top': '-40px'
            });
        } else {
            t1.to(like_cnt, 1, {scale: 1})
                .to(like_cnt, 1, {scale: 1, background: 'transparent', ease: Power4.easeOut});
            t1.timeScale(7);
            like_cnt.removeClass("checked");
            like_cnt.find(".heartMain").attr("src", "/images/innerHeart2.png");
        }
    });

}

if (window.location.pathname == '/my-card/index' && $(window).width() <= 600){
    document.addEventListener('scroll', function() {
        const bottomImages = document.getElementById('totalPriceField');
        const footerBackground = document.getElementById('footerBackgroundM');
        const footerTop = footerBackground.getBoundingClientRect().top;
        const bottomImagesHeight = bottomImages.offsetHeight;
        const windowHeight = window.innerHeight;
        console.log(footerTop, bottomImagesHeight, windowHeight)
        if (footerTop + bottomImagesHeight <= windowHeight) {
            bottomImages.classList.remove('fixed');
            bottomImages.classList.add('none');
        } else {
            bottomImages.classList.remove('none');
            bottomImages.classList.add('fixed');
        }
    });
}
if (window.location.pathname == '/my-card/checkout' && $(window).width() <= 600){
    document.addEventListener('scroll', function() {
        const summary = document.getElementById('summary');
        const footerBackground = document.getElementById('footerBackgroundM');
        const footerTop = footerBackground.getBoundingClientRect().top;
        const summaryHeight = 181;
        const windowHeight = window.innerHeight;
        if (footerTop + summaryHeight <= windowHeight) {
            summary.classList.remove('fixed');
            summary.classList.add('none');
        } else {
            summary.classList.remove('none');
            summary.classList.add('fixed');
        }
    });
}
$(document).ready(function () {
    $('body').on('click','.tabletMenuIcon', function () {
        if($(window).width() < 600){
            $('.menuTabletHeader').toggleClass('menuMobileActive');
            $('.menuTabletHeader').removeClass('menuTabletActive');
            $('.personMainMenu').css('width', '0px');
            $('.personCoursesMenuList').css('width', '0px');
        }else{
            $('.menuTabletHeader').toggleClass('menuTabletActive');
            $('.menuTabletHeader').removeClass('menuMobileActive');
            $('.personMainMenu').css('width', '0px');
            $('.personCoursesMenuList').css('width', '0px');
        }
    })
    $('body').on('click','.tabletUserProfileMenu', function () {
        if($(window).width() < 600) {
            $('.personMainMenu').css('width', '76%');
        }else{
            $('.personMainMenu').css('width', '484px');
        }
    })
    $('body').on('click','.tabletPersonMenuField', function () {
        if($(window).width() < 600) {
            $('.personMainMenu').css('width', '0px');
        }else{
            $('.personMainMenu').css('width', '0px');
        }
    })
    $('body').on('click','.tabletAllCoursesList', function () {
        if($(window).width() < 600) {
            $('.personCoursesMenuList').css('width', '76%');
        }else{
            $('.personCoursesMenuList').css('width', '484px');
        }
    })
    $('body').on('click','.tabletPersonMenuField', function () {
        if($(window).width() < 600) {
            $('.personCoursesMenuList').css('width', '0px');
        }else{
            $('.personCoursesMenuList').css('width', '0px');
        }
    })
    $(document).on('click', function(event) {
        if (!$(event.target).closest('.menuTabletHeader').length && !$(event.target).closest('.personMainMenu').length &&
            !$(event.target).closest('.personCoursesMenuList').length &&
            !$(event.target).hasClass('tabletMenuIcon')) {
            $('.menuTabletHeader').removeClass('menuTabletActive');
            $('.personMainMenu').css('width', '0px');
            $('.personCoursesMenuList').css('width', '0px');
        }
    });
    $(".profileField").hover(function(){
        $('.profileFieldImg').show();
    },function(){
        $('.profileFieldImg').hide();
    });
    let current = location.pathname;
    $('.userProfileMenu li a').each(function(){
        let sthis = $(this);
        if(sthis.attr('href').indexOf(current) !== -1){
            sthis.css('color', '#F36528');
        }
    })

    if (window.location.pathname != '/') {
        let pageName = location.pathname;
        $('.orangeOrWhite a').each(function(){
            let x = $(this);
            if(x.attr('href').indexOf(pageName) !== -1){
                x.css('color', '#F36528');
                x.closest('div').closest('li').children('span').css('color', '#F36528');
            }
        })
        $(".menuCoursesDropDown ul li a").each(function() {
            let y = $(this);
            let url = window.location;
            let pageNameMenuCourses = new URL(url).pathname + new URL(url).search;
            if (y.attr('href').indexOf(pageNameMenuCourses) !== -1) {
                y.css('color', '#F36528');
                y.closest('.menuCoursesDropDown').children('span').css('color', '#F36528');
            }
        });
        $('.profileFieldImg li a').each(function(){
            let x = $(this);
            if(x.attr('href').indexOf(pageName) !== -1){
                x.css('color', '#F36528');
            }
        })
        $('.tabletMenuNavField li a').each(function(){
            let x = $(this);
            if(x.attr('href').indexOf(pageName) !== -1){
                x.css('color', '#F36528');
                x.closest('div').closest('li').children('span').css('color', '#F36528');
            }
        })
        let urlName = window.location.pathname;
        $('.personMainMenu .tabletMenuNavbar li a').each(function() {
            let link = $(this);
            if (link.attr('href') === urlName) {
                link.css('color', '#F36528');
            }
        });
        $('.tabletMenuNavbarCourses li a').each(function() {
            let y = $(this);
            let url = window.location;
            let pageNameMenuCourses = new URL(url).pathname + new URL(url).search;
            if (y.attr('href').indexOf(pageNameMenuCourses) !== -1) {
                y.css('color', '#F36528');
                $('.tabletAllCoursesList').children('span').css('color', '#F36528');
            }
        });
    }
    $('.autoplay').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
    });
    if (window.location.pathname == '/') {
        window.onload=function(){
            $('.sectionThree .slider').slick({
                autoplay:true,
                autoplaySpeed:1600,
                arrows:false,
                slidesToShow:1,
                slidesToScroll:1
            });
        };
    }

    if ($('.individualCards').length >= 4 && $(window).width() >= 1024){
        $('.individualCards').last().css('display', 'none');
    }
    $('.modalEye').on('click', function () {
        if($(this).siblings('input').attr('type') === 'password'){
            $(this).siblings('input').attr('type', 'text');
            $(this).attr('src', '/images/signEyeOpen.png');
        }else {
            $(this).siblings('input').attr('type', 'password');
            $(this).attr('src', '/images/signEyeClose.png');
        }
    })
    $('body').on('click', '.modalOpenBtn', function () {
        if ($('.securityModal').css('display') == 'none'){
            $('.securityModal').css('display', 'flex');
        }else {
            $('.securityModal').css('display', 'none');
        }
    })
    $(document).click(function(event) {
        if (!$('.securityContentModal').is(event.target) && !$('.modalOpenBtn').is(event.target)
            && $('.securityContentModal').has(event.target).length === 0 && $('.modalOpenBtn').has(event.target).length === 0) {
            $('.securityModal').css('display', 'none');
        }
    });
    function inputValue(this_) {
        let inputVal = this_.val();
        let csrfToken = $('meta[name="csrf-token"]').attr("content");
        if (inputVal.length > 3) {
            $.ajax({
                url: "/site/search",
                method: 'get',
                dataType: 'json',
                data: {
                    input_val: inputVal,
                    _csrf: csrfToken
                },
                success: function (data) {
                    $('#searchField').html(data.html);
                    $('.searchField').show();
                },
                error: function (xhr, status, error) {
                    console.error('AJAX Error: ' + status + ' ' + error);
                }
            });
        } else {
            $('#searchField').hide();
        }
    }
    $('.input-search').on('input', function () {
        inputValue($(this));
    });
    $('.btn-search').on('click', function () {
        $('.btn-search').click(function(e) {
            $('.popup-wrap').fadeIn(500);
            $('.popup-box').removeClass('transform-out').addClass('transform-in');

            e.preventDefault();
        });
        $('.popup-close').click(function(e) {
            $('.popup-wrap').fadeOut(500);
            $('.popup-box').removeClass('transform-in').addClass('transform-out');
            e.preventDefault();
        });
    });
    $('.close-logged').click(function(e) {
        $('.popup-wrap-logged').fadeOut(500);
        $('.popup-box-logged').removeClass('transform-in').addClass('transform-out');
        e.preventDefault();
    });
        $('body').on('click', 'ion-icon', function () {
        let indID = $(this).data('id');
        let thisItem = $(this);
        let type = $(this).data('type');
        let csrfToken = $('meta[name="csrf-token"]').attr("content");
        if ($(this).hasClass('active')){
            $.ajax({
                url: "/site/get-wishlist",
                method: 'get',
                datatype: 'json',
                data: {
                    indID: indID,
                    type: type,
                    _csrf: csrfToken
                },
            })
        }else {
            $.ajax({
                url: "/site/remove-wishlist",
                method: 'get',
                datatype: 'json',
                data: {
                    indID: indID,
                    type: type,
                    _csrf: csrfToken
                },
                success: function (data) {
                    let parse_data = JSON.parse(data);
                    if (window.location.pathname == '/wishlist/index' && parse_data.wishlist == 'delete'){
                        if (thisItem.closest('ul').hasClass('carousel_')){
                            thisItem.closest('.card_').remove();
                        }else if (thisItem.closest('ul').hasClass('carousel_2')) {
                            thisItem.closest('.card_2').remove();
                            if ($('.carousel_2').children('li').length === 0){
                                $('changeBody2').remove();
                                $('body').find('.topSlider').html('<div class="changeBody1">' +
                                    '<span class="title">'+ parse_data.title +'</span>' +
                                    '<div class="applyNowBtnField">' +
                                    '<a class="coursesHref" href="/courses/index">' +
                                    '<img src="/images/buttonImg.png" alt="">' +
                                    '<span>'+ parse_data.btn_name +'</span>' +
                                    '</a>' +
                                    '</div>' +
                                    '</div>')
                            }
                        }else if (thisItem.closest('ul').hasClass('mobileCourses')){
                            thisItem.closest('.card_2').remove();
                            if ($('.mobileCourses').children('.card_2').length === 0){
                                $('wishlistCardsField').remove();
                                $('body').find('.wishlistMobile').html('<div class="changeBody1">' +
                                    '<span class="title">'+ parse_data.title +'</span>' +
                                    '<div class="applyNowBtnField">' +
                                    '<a class="coursesHref" href="/courses/index">' +
                                    '<img src="/images/buttonImg.png" alt="">' +
                                    '<span>'+ parse_data.btn_name +'</span>' +
                                    '</a>' +
                                    '</div>' +
                                    '</div>')
                            }
                        }
                    }else if (window.location.pathname == '/wishlist/blogs-wishlist' && parse_data.wishlist == 'inactivate'){
                        if (thisItem.closest('ul').hasClass('blogsWishlist')){
                            thisItem.closest('.wishlistCardsField').remove();
                        }
                    }
                }
            })
        }
    })
    $('body').on('click', '.addMyCard', function () {
        let lesson_id = $(this).data('id');
        let csrfToken = $('meta[name="csrf-token"]').attr("content");
        $.ajax({
            url: '/my-card/add-card',
            method: 'get',
            datatype: 'json',
            data: {
                lesson_id: lesson_id,
                _csrf: csrfToken
            }
        })
    })
    document.querySelectorAll('ion-icon').forEach(icon => {
        if (icon.getAttribute('data-active') === "1") {
            icon.classList.add('active');
        } else {
            icon.classList.remove('active');
        }
        icon.addEventListener('click', function() {
            this.classList.toggle('active');
        });
    });
})
if (window.location.pathname == '/' || window.location.pathname == '/testimonials') {
    let seeMoreBtnTestimonial = document.querySelector('#testimonialBtnMobile');
    let testimonial = [...document.querySelectorAll('.mobileTestimonial .blockTestimonialMobile')];
    let currentItem = 2;
    if (currentItem >= testimonial.length) {
        seeMoreBtnTestimonial.style.display = 'none';
    }
    seeMoreBtnTestimonial.onclick = () => {
        let itemsToShow = 2;
        for (let i = currentItem; i < currentItem + itemsToShow; i++) {
            if (i < testimonial.length) {
                testimonial[i].style.display = 'flex';
            }
        }
        currentItem += itemsToShow;
        if (currentItem >= testimonial.length) {
            seeMoreBtnTestimonial.style.display = 'none';
        }
    }
    let seeMoreBtnBlogs = document.querySelector('#blogsBtnMobile');
    let blogs = [...document.querySelectorAll('.sectionBlogMobile .blogsCard .individualCards')];
    let currentItemBlogs = 2;
    if (blogs != null && seeMoreBtnBlogs != null){
        if (currentItemBlogs >= blogs.length) {
            seeMoreBtnBlogs.style.display = 'none';
        }
        seeMoreBtnBlogs.onclick = () => {
            let itemsToShow = 2;
            for (let i = currentItemBlogs; i < currentItemBlogs + itemsToShow; i++) {
                if (i < blogs.length) {
                    blogs[i].style.display = 'block';
                }
            }
            currentItemBlogs += itemsToShow;
            if (currentItemBlogs >= blogs.length) {
                seeMoreBtnBlogs.style.display = 'none';
            }
        }
    }
}
if (window.location.pathname == '/testimonials') {
    $('.blockTestimonialPopup').on('click', function (e) {
        $('.popup-wrap-testimonial').fadeIn(500);
        $('.popup-box-testimonial').removeClass('transform-out').addClass('transform-in');
        let txt_value = $(this).find('.testimonialsText').text();
        $('.popup-box-testimonial .txt-content').text(txt_value);
        e.preventDefault();
    })
    $('.popup-close-testimonial').click(function(e) {
        $('.popup-wrap-testimonial').fadeOut(500);
        $('.popup-box-testimonial').removeClass('transform-in').addClass('transform-out');
        e.preventDefault();
    });
}
document.cookie = "screenWidth=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
document.cookie = "screenWidth=" + screen.width;
