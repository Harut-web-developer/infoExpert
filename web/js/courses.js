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
            startX = e.pageX;
            startScrollLeft = carousel.scrollLeft;
        };

        const dragging = (e) => {
            if (!isDragging) return;
            const newScrollLeft = startScrollLeft - (e.pageX - startX);
            if (newScrollLeft <= 0 || newScrollLeft >=
                carousel.scrollWidth - carousel.offsetWidth) {
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

        carousel.addEventListener("mousedown", dragStart);
        carousel.addEventListener("mousemove", dragging);
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

    const carousel = document.querySelector(".carousel");
    const wrapper = document.querySelector(".wrapper");
    const firstCard = carousel.querySelector(".card");
    const arrowBtns = Array.from(document.querySelectorAll(".arrow-btn"));
    slider(carousel, wrapper, firstCard, arrowBtns);

    const carousel2 = document.querySelector(".carousel2");
    const wrapper2 = document.querySelector(".wrapper2");
    const firstCard2 = carousel2.querySelector(".card2");
    const arrowBtns2 = Array.from(document.querySelectorAll(".arrow-btn2"));
    slider(carousel2, wrapper2, firstCard2, arrowBtns2);
});
