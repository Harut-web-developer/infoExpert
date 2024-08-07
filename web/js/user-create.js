// Harut
$(document).ready(function (){
    // console.log(document.cookie);

    $('body').on('click','.userAddPhotoText', function () {
        $(this).siblings('input').click();
    })
    $('body').on('click','.attachCv', function () {
        $(this).closest('#attachCv').children('input').click();
    })
    $('body').on('click','.attachCv img', function () {
        $(this).closest('#attachCv').children('input').click();
    })
    $('body').on('click','.editPhoto', function () {
        $(this).siblings('input').click();
    })
    $('body').on('click','.attachCvEdit', function () {
        $(this).closest('#attachCvEdit').children('input').click(); // es funkciaji patcharov  .attachCvImg 2 angama bacum stugel
    })
    $('body').on('click','.attachCvImg', function () {
        $(this).closest('#attachCvEdit').children('input').click();
    })
    $('body').on('click','.userAddPhotoTextMobile', function () {
        $(this).siblings('input').click();
    })
    $('body').on('click','.attachCvMobile', function () {
        $(this).closest('#attachCvMobile').children('input').click();
    })
    $('body').on('click','.attachCvMobile img', function () {
        $(this).closest('#attachCvMobile').children('input').click();
    })
})
function getCookieByName(name) {
    const cookies = document.cookie.split(';');
    for (let cookie of cookies) {
        cookie = cookie.trim();
        if (cookie.startsWith(name + '=')) {
            return cookie.substring(name.length + 1);
        }
    }
    return null;
}
let text,text1,text2,text3,text4,text5;
if (getCookieByName('language') == 'am'){
    text = 'Գնահատեք կուրսը';
    text1 = 'Սարսափելի, ոչ այն, ինչ ես սպասում էի';
    text2 = 'Վատ, բավականին հիասթափված';
    text3 = 'Միջին, կարող է ավելի լավ լինել';
    text4 = 'Լավ, ինչ ես սպասում էի';
    text5 = 'Զարմանալի, սպասելիքներից վեր';
} else if(getCookieByName('language') == 'ru'){
    text = 'Оцените курс';
    text1 = 'Ужасно, совсем не то, что я ожидал.';
    text2 = 'Плохо, очень разочарован';
    text3 = 'Средне, могло быть и лучше';
    text4 = 'Хорошо, то, что я ожидал.';
    text5 = 'Потрясающе, превзошло все ожидания!';
} else if(getCookieByName('language') == 'en'){
    text = ' ';
    text1 = 'Awful, not what I expected at all';
    text2 = 'Poor, pretty disappointed';
    text3 = 'Average, could be better';
    text4 = 'Good, what I expected';
    text5 = 'Amazing, above expectations!';
}
let stars = document.querySelectorAll('.ratingField label');
let ratingText = document.querySelector('.ratingText');
let ratingForm = document.querySelector('.ratingForm');
let ratedIndex = -1;
let textareaField = document.querySelector('.textareaRating');
let ratingButton = document.querySelector('.ratingBtn');
stars.forEach((item, index1) => {
    item.addEventListener('mouseover', () => {
        stars.forEach((star, index2) => {
            if (index1 >= index2) {
                star.querySelector('img').src = '/images/ratingOrange.png';
            } else {
                star.querySelector('img').src = '/images/ratingWhite.png';
            }
        });
    });

    item.addEventListener('mouseout', () => {
        stars.forEach((star, index2) => {
            if (ratedIndex >= index2) {
                star.querySelector('img').src = '/images/ratingOrange.png';
            } else {
                star.querySelector('img').src = '/images/ratingWhite.png';
            }
        });
    });
    item.addEventListener('click', () => {
        ratedIndex = index1;
        stars.forEach((star, index2) => {
            if (index1 >= index2) {
                switch (index2) {
                    case 0:
                        ratingText.innerHTML = text1;
                        break;
                    case 1:
                        ratingText.innerHTML = text2;
                        break;
                    case 2:
                        ratingText.innerHTML = text3;
                        break;
                    case 3:
                        ratingText.innerHTML = text4;
                        break;
                    case 4:
                        ratingText.innerHTML = text5;
                        break;
                    default:
                        ratingText.innerHTML = text;
                }
                ratingForm.style.marginBottom = '0px';
                ratingForm.style.marginTop = '50px';
                textareaField.style.display = 'flex';
                ratingButton.style.display = 'flex';
                star.querySelector('img').src = '/images/ratingOrange.png';
            } else {
                star.querySelector('img').src = '/images/ratingWhite.png';
            }
        });
    });
})