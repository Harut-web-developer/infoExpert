$(".menuAboutDropDown").hover(function(){
    $('.dropDownAbout').show();
},function(){
    $('.dropDownAbout').hide();
});
$(".menuCoursesDropDown").hover(function(){
    $('.dropDownCources').show();
},function(){
    $('.dropDownCources').hide();
});

$(function() {
    if (window.location.pathname == '/'){
        $('a[href*=\\#]').on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
        });
    }
});
$(".questionField").click(function() {
    var panel = $(this).next(".answerQuestion");
    $(".answerQuestion").not(panel).css("display", "none");
    $(".answerQuestion").not(panel).closest('.answersField').find('.questionField span').css({
        'color': 'white',
        'font-family': '"Exo", sans-serif',
        'line-height': '19.2px'
    });
    $(".questions").find('img').css('transform', 'rotate(0deg)');
    panel.toggle();
    $(this).find('img').css('transform', panel.is(":visible") ? 'rotate(180deg)' : 'rotate(0deg)');
    $(this).find('span').css({
        'color': panel.is(":visible") ? '#FF782D' : 'white',
        'font-family': 'Exo, sans-serif',
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
if (window.location.pathname == '/'){
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
                setTimeout(function () {
                    $(window).scrollTop($(window).scrollTop() - 50);
                    scrollWindow();
                }, 1);
            }
        };
        scrollBtn.on("click", scrollWindow);
    };
    scrollTop();

    $(window).scroll(startCounter);
    function startCounter() {
        let scrollY = (window.pageYOffset || document.documentElement.scrollTop) + window.innerHeight;
        let divPos = document.querySelector('.sectionInfo').offsetTop;

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
$(document).ready(function () {
    $('body').on('click','.tabletMenuIcon', function () {
        $('.menuTabletHeader').toggleClass('menuTabletActive');
        $('.personMainMenu').css('width', '0px');
        $('.personCoursesMenuList').css('width', '0px');
    })
    $('body').on('click','.tabletUserProfileMenu', function () {
        $('.personMainMenu').css('width', '484px');
    })
    $('body').on('click','.tabletPersonMenuField', function () {
        $('.personMainMenu').css('width', '0px');
    })
    $('body').on('click','.tabletAllCoursesList', function () {
        $('.personCoursesMenuList').css('width', '484px');
    })
    $('body').on('click','.tabletPersonMenuField', function () {
        $('.personCoursesMenuList').css('width', '0px');
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

    $('.tabletMenuIcon').on('click', function(event) {
        event.stopPropagation();
        $('.menuTabletHeader').toggleClass('menuTabletActive');
    });
    $(".profileField").hover(function(){
        $('.profileFieldImg').show();
    },function(){
        $('.profileFieldImg').hide();
    });
    $('#checkboxSignIn').change(function(){
        let submitButton = $('#submitButton');
        let signupButtonText = $('#signupButtonText');

        if ($(this).prop('checked')) {
            submitButton.prop('disabled', false);
            signupButtonText.css('color', '#F36528');

        } else {
            submitButton.prop('disabled', true);
            signupButtonText.css('color', '#D9E3E4');
        }
    });
    $("#submitButton").hover(
        function () {
            if (!$(this).prop("disabled")) {
                $(this).find("img").attr("src", "/images/Vectorhover.png");
                $(this).find("span").css("color", "white");
            }
        },
        function () {
            if (!$(this).prop("disabled")) {
                $(this).find("img").attr("src", "/images/Vector.png");
                $(this).find("span").css("color", "#F36528");
            }
        }
    );

    let current = location.pathname;
    $('.userProfileMenu li a').each(function(){
        let sthis = $(this);
        if(sthis.attr('href').indexOf(current) !== -1){
            sthis.css('color', '#F36528');
        }
    })

    if (window.location.pathname != '/') {
        let pageName = location.pathname;
        $('.menu li a').each(function(){
            let x = $(this);
            if(x.attr('href').indexOf(pageName) !== -1){
                x.css('color', '#F36528');
                x.closest('div').closest('li').children('span').css('color', '#F36528');
            }
        })
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
        $('.tabletMenuNavbar li a').each(function() {
            let link = $(this);
            if (link.attr('href') === urlName) {
                link.css('color', '#F36528');
            }
        });
        $('.tabletMenuNavbarCourses li a').each(function() {
            let link = $(this);
            if (link.attr('href') === urlName) {
                $('.tabletAllCoursesList span').css('color', '#F36528')
                link.css('color', '#F36528');
            }
        });
    }

})