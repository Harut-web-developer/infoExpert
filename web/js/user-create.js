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
    $('body').on('click','.editPhoto', function () {
        $(this).siblings('input').click();
    })
    $('body').on('click','.attachCvEdit', function () {
        $(this).closest('#attachCvEdit').children('input').click(); // es funkciaji patcharov  .attachCvImg 2 angama bacum stugel
    })
    $('body').on('click','.attachCvImg', function () {
        $(this).closest('#attachCvEdit').children('input').click();
    })
})