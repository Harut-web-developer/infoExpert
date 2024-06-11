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

    if (window.location.pathname == '/courses/my-courses') {
        const carousel3 = document.querySelector(".myCoursesFieldAcceptCourses");
        const wrapper3 = document.querySelector(".wrapperMyCourses");
        const firstCard3 = carousel3.querySelector(".myCoursesBlocksField");
        slider(carousel3, wrapper3, firstCard3);
    } else {
        const wrapper = document.querySelector(".wrapper"); // div
        const carousel = document.querySelector(".carouselCourses"); /* ul*/
        const firstCard = carousel.querySelector(".cardCourses"); // li
        slider(carousel, wrapper, firstCard);

        const carousel2 = document.querySelector(".carousel2");
        const wrapper2 = document.querySelector(".wrapper2");
        const firstCard2 = carousel2.querySelector(".card2");
        slider(carousel2, wrapper2, firstCard2);
    }
});
// Like js
document.querySelectorAll('.courses ion-icon').forEach(icon => {
    icon.addEventListener('click', function() {
        this.classList.toggle('active');
    });
});
$(document).ready(function() {
    $('.coursisBtnField button').on("click", function () {
        window.location.href = '/my-card/checkout';
    })
})