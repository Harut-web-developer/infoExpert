if (window.location.pathname == '/courses') {
    document.addEventListener("DOMContentLoaded", function () {
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

        if (window.location.pathname == '/courses/my-courses') {
            const carousel3 = document.querySelector(".myCoursesFieldAcceptCourses");
            const wrapper3 = document.querySelector(".wrapperMyCourses");
            const firstCard3 = carousel3.querySelector(".myCoursesBlocksField");
            const arrowBtns3 = Array.from(document.querySelectorAll(".arrow-btn2"));
            slider(carousel3, wrapper3, firstCard3, arrowBtns3);
        } else {
            const carousel = document.querySelector(".carouselCourses");
            const wrapper = document.querySelector(".wrapper");
            const firstCard = carousel.querySelector(".cardCourses");
            const arrowBtns = Array.from(document.querySelectorAll(".arrow-btn"));
            slider(carousel, wrapper, firstCard, arrowBtns);

            const carousel2 = document.querySelector(".carousel2");
            const wrapper2 = document.querySelector(".wrapper2");
            const firstCard2 = carousel2.querySelector(".card2");
            const arrowBtns2 = Array.from(document.querySelectorAll(".arrow-btn2"));
            slider(carousel2, wrapper2, firstCard2, arrowBtns2);
        }
    });
}
// Like js
document.querySelectorAll('.courses ion-icon').forEach(icon => {
    icon.addEventListener('click', function() {
        this.classList.toggle('active');
    });
});