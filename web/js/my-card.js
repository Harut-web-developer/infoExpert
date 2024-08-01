// Mariam
document.addEventListener("DOMContentLoaded", function () {
    function slider(carousel, wrapper, firstCard) {
        // const firstCardWidth = firstCard.offsetWidth;
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
    const wrapper = document.querySelector(".wrapper");
    const carousel = document.querySelector(".myCardFieldAcceptCourses");
    if (carousel != null){
        const firstCard = carousel.querySelector(".myCardBlocksField");
        slider(carousel, wrapper, firstCard);
    }

});
// Harut

$(document).ready(function () {
    $('body').on('click','.removeItem',function () {
        let itemId = $(this).data('remove');
        let csrfToken = $('meta[name="csrf-token"]').attr("content");
        $.ajax({
            url: '/my-card/remove-item',
            method: 'get',
            datatype: 'json',
            data: {
                itemId: itemId,
                _csrf: csrfToken
            },
            success: function (data) {
                let parseData = JSON.parse(data);
                if (parseData.result === 'remove'){
                    $('body').find('.removeItem').each(function (){
                        if ($(this).data('remove') == itemId){
                            $(this).closest('.myCardBlocksField').remove();
                        }
                    })
                    let totalCount = 0;
                    $('body').find('.myCardFieldAcceptCourses .myCardBlocksField').each(function () {
                        totalCount += parseInt($(this).find('.span2_2').text());
                    })
                    $('.totalPriceLesson').html(totalCount);
                    if ($(window).width() < 600){
                        if ($('.myCardBlogsSection').children('.myCardBlocksField').length === 0){
                            $('.myCardBlogsSection').remove();
                            $('body').find('.myCoursesTitleField').after('<div class="textForEmpty">' +
                                '<span>'+ parseData.message +'</span>' +
                                '</div>')
                        }
                    }else {
                        if ($('.myCardFieldAcceptCourses').children('li').length === 0){
                            $('.cardCourses').remove();
                            $('body').find('.myCoursesProfileField').after('<div class="textForEmpty">' +
                                '<span>'+ parseData.message +'</span>' +
                                '</div>')
                        }
                    }

                }
            }
        })
    })
    // Harut
    $('body').on('click','.moveItem',function () {
        let itemId = $(this).data('move');
        let lessonId = $(this).data('lesson');
        let csrfToken = $('meta[name="csrf-token"]').attr("content");
        $.ajax({
            url: '/my-card/move-item',
            method: 'get',
            datatype: 'json',
            data: {
                itemId: itemId,
                lessonId: lessonId,
                _csrf: csrfToken
            },
            success: function (data) {
                let parseData = JSON.parse(data);
                if (parseData.result === 'moveAndDelete' || parseData.result === 'delete'){
                    $('body').find('.removeItem').each(function (){
                        if ($(this).data('remove') == itemId){
                            $(this).closest('.myCardBlocksField').remove();
                        }
                    })
                    let totalCount = 0;
                    $('body').find('.myCardFieldAcceptCourses .myCardBlocksField').each(function () {
                        totalCount += parseInt($(this).find('.span2_2').text());
                    })
                    $('.totalPriceLesson').html(totalCount);
                    if ($(window).width() < 600){
                        if ($('.myCardBlogsSection').children('.myCardBlocksField').length === 0){
                            $('.myCardBlogsSection').remove();
                            $('body').find('.myCoursesTitleField').after('<div class="textForEmpty">' +
                                '<span>'+ parseData.message +'</span>' +
                                '</div>')
                        }
                    }else {
                        if ($('.myCardFieldAcceptCourses').children('li').length === 0){
                            $('.cardCourses').remove();
                            $('body').find('.myCoursesProfileField').after('<div class="textForEmpty">' +
                                '<span>'+ parseData.message +'</span>' +
                                '</div>')
                        }
                    }
                }
            }
        })
    })

})