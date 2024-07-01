// Like js
document.querySelectorAll('.blog ion-icon').forEach(icon => {
    icon.addEventListener('click', function() {
        this.classList.toggle('active');
    });
});
let seeMoreBtnBlogs = document.querySelector('#blogsBtnMobile');
let blogs = [...document.querySelectorAll('.mobileBlogsFiled .card_')];
let currentItemBlogs = 2;
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

