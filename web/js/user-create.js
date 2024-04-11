$(document).ready(function (){
    $('body').on('click','.userAddPhotoText', function () {
        $(this).siblings('input').click();
    })
    $('body').on('click','.attachCv', function () {
        $(this).closest('#attachCv').children('input').click();
    })
    $('body').on('click','.attachCv img', function () {
        $(this).closest('#attachCv').children('input').click();
    })
})