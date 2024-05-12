const paginationNumbers = document.getElementById("pagination-numbers");
const paginatedList = document.getElementById("paginated-list");
const listItems = paginatedList.querySelectorAll(".card_");
const nextButton = document.getElementById("next-button");
const prevButton = document.getElementById("prev-button");
var paginationLimit = '';
if (window.innerWidth > 1100) {
    paginationLimit = 9;
}else if (window.innerWidth <= 1100) {
    paginationLimit = 12;
}
let currentPage = 1;
const pageCount = Math.ceil(listItems.length / paginationLimit);

const disableButton = (button) => {
    button.classList.add("disabled");
    button.setAttribute("disabled", true);
};

const enableButton = (button) => {
    button.classList.remove("disabled");
    button.removeAttribute("disabled");
};

const handlePageButtonsStatus = () => {
    if (currentPage === 1) {
        disableButton(prevButton);
    } else {
        enableButton(prevButton);
    }

    if (currentPage === pageCount) {
        disableButton(nextButton);
    } else {
        enableButton(nextButton);
    }
};

const handleActivePageNumber = () => {
    document.querySelectorAll(".pagination-number").forEach((button) => {
        button.classList.remove("active");
        const pageIndex = Number(button.getAttribute("page-index"));
        if (pageIndex === currentPage) {
            button.classList.add("active");
        }
    });
};

const appendPageNumber = (index) => {
    const pageNumber = document.createElement("button");
    pageNumber.className = "pagination-number";
    pageNumber.innerHTML = index;
    pageNumber.setAttribute("page-index", index);
    pageNumber.setAttribute("aria-label", "Page " + index);

    pageNumber.addEventListener("click", () => {
        setCurrentPage(index);
    });

    paginationNumbers.appendChild(pageNumber);
};

const getPaginationNumbers = () => {
    paginationNumbers.innerHTML = ""; // Clear existing numbers
    for (let i = 1; i <= pageCount; i++) {
        appendPageNumber(i);
    }
};

const setCurrentPage = (pageNum) => {
    currentPage = pageNum;

    handleActivePageNumber();
    handlePageButtonsStatus();

    const startIndex = (pageNum - 1) * paginationLimit;
    const endIndex = startIndex + paginationLimit;

    listItems.forEach((item, index) => {
        if (index >= startIndex && index < endIndex) {
            item.style.display = "block";
        } else {
            item.style.display = "none";
        }
    });
};

window.addEventListener("load", () => {
    getPaginationNumbers();
    setCurrentPage(1);

    prevButton.addEventListener("click", () => {
        setCurrentPage(currentPage - 1);
    });

    nextButton.addEventListener("click", () => {
        setCurrentPage(currentPage + 1);
    });
});

if (window.location.pathname == '/blog/index') {
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
            like_cnt.find(".heart2").attr("src", "/images/innerHeartHover.png");
            mojsShape.css({
                'margin-left': '-25px',
                'margin-top': '-40px'
            });
        } else {
            t1.to(like_cnt, 1, {scale: 1})
                .to(like_cnt, 1, {scale: 1, background: 'transparent', ease: Power4.easeOut});
            t1.timeScale(7);
            like_cnt.removeClass("checked");
            like_cnt.find(".heart2").attr("src", "/images/innerHeart2.png");
        }
    });
}