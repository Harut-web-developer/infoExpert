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
    const wrapper = document.querySelector(".wrapper");
    const carousel = document.querySelector(".myCardFieldAcceptCourses");
    const firstCard = carousel.querySelector(".myCardBlocksField");
    slider(carousel, wrapper, firstCard);
});
// $(document).ready(function() {
//     $('.myCardInfoButtonField button').on("click", function () {
//         window.location.href = '/my-card/checkout';
//     })
// })
$(document).ready(function () {
    $('body').on('click','.removeItem',function () {
        let itemId = $(this).data('remove');
        let thisItem = $(this);
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
                if (parseData === 'remove'){
                    thisItem.closest('.myCardBlocksField').remove();
                }
            }
        })
    })
    $('body').on('click','.moveItem',function () {
        let itemId = $(this).data('move');
        let lessonId = $(this).data('lesson');
        let thisItem = $(this);
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
                if (parseData === 'moveAndDelete' || parseData === 'delete'){
                    thisItem.closest('.myCardBlocksField').remove();
                }
            }
        })
    })

})