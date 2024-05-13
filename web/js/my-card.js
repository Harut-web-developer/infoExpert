document.addEventListener("DOMContentLoaded", function() {
    function slider(carousel, wrapper, firstCard, arrowBtns) {
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
            timeoutId = setTimeout(() =>
                carousel.scrollLeft += firstCardWidth, 2500);
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
        arrowBtns.forEach(btn => {
            btn.addEventListener("click", () => {
                carousel.scrollLeft += btn.id === "left" ?
                    -firstCardWidth : firstCardWidth;
            });
        });
    }

    const carousel = document.querySelector(".myCardFieldAcceptCourses");
    const wrapper = document.querySelector(".wrapper");
    const firstCard = carousel.querySelector(".myCardBlocksField");
    const arrowBtns = Array.from(document.querySelectorAll(".arrow-btn"));
    slider(carousel, wrapper, firstCard, arrowBtns);
});
if (window.location.pathname == '/my-card/index') {
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
            like_cnt.find(".heart").attr("src", "/images/innerHeartHover.png");
            mojsShape.css({
                'margin-left': '-25px',
                'margin-top': '-40px'
            });
        } else {
            t1.to(like_cnt, 1, {scale: 1})
                .to(like_cnt, 1, {scale: 1, background: 'transparent', ease: Power4.easeOut});
            t1.timeScale(7);
            like_cnt.removeClass("checked");
            like_cnt.find(".heart").attr("src", "/images/innerHeart.png");
        }
    });
}


