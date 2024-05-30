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
        const wrapper = document.querySelector(".changeBody2");
        const carousel = document.querySelector(".carousel_2");
        if (carousel != null){
            const firstCard = carousel.querySelector(".card_2");
            slider(carousel, wrapper, firstCard);
        }
        const wrapper2 = document.querySelector(".bottomSlider");
        const carousel2 = document.querySelector(".carousel_");
        const firstCard2 = carousel2.querySelector(".card_");
        slider(carousel2, wrapper2, firstCard2);
});
// Like js
document.querySelectorAll('.wishlist ion-icon').forEach(icon => {
    icon.addEventListener('click', function() {
        this.classList.toggle('active');
    });
});