// Harut
let seeMoreBtnBlogs = document.querySelector('#blogsBtnMobile');
let blogs = [...document.querySelectorAll('.mobileBlogsFiled .card_')];
let currentItemBlogs = 2;
if (seeMoreBtnBlogs != null) {
    if (currentItemBlogs >= blogs.length) {
        seeMoreBtnBlogs.style.display = 'none';
    }
    seeMoreBtnBlogs.onclick = () => {
        let itemsToShow = 2;
        for (let i = currentItemBlogs; i < currentItemBlogs + itemsToShow; i++) {
            if (i < blogs.length) {
                blogs[i].style.display = 'block';
            }
        }
        currentItemBlogs += itemsToShow;
        if (currentItemBlogs >= blogs.length) {
            seeMoreBtnBlogs.style.display = 'none';
        }
    }
}
