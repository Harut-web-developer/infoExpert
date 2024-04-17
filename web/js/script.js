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
        spaceBetween: 25,
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
            520: {
                slidesPerView: 2,
            },
            950: {
                slidesPerView: 3,
            },
        },
    });
}
$(document).ready(function () {
    $('body').on('click', '.mainFlag', function () {
        $(this).closest('.flagFields').find('.otherFlags').toggle();
    })
    $('body').on('click', '.armFlag', function () {
        $(this).closest('.flagFields').children('img').attr('src', '/images/armflag.png');
        $(this).closest('.flagFields').find('.otherFlags').css('display', 'none');
    })
    $('body').on('click', '.ruFlag', function () {
        $(this).closest('.flagFields').children('img').attr('src', '/images/ruflag.png');
        $(this).closest('.flagFields').find('.otherFlags').css('display', 'none');
    })
    $('body').on('click', '.usaFlag', function () {
        $(this).closest('.flagFields').children('img').attr('src', '/images/usaflag.png');
        $(this).closest('.flagFields').find('.otherFlags').css('display', 'none');
    })
})
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
            },1);
        }
    };
    scrollBtn.on("click", scrollWindow);
};
scrollTop();