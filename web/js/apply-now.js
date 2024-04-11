$(document).ready(function () {
    $('body').on('change','#accounting, #salary, #trade, #marketing', function () {
        $(this).closest('.coursesBlocksRadio').children('div').children('input').not(this).prop('checked',false);
    })
    // $('body').on('change','#individual, #group', function () {
    //     $(this).closest('.typeCoursesBlocksRadio').children('div').children('input').not(this).prop('checked',false);
    //     $(this).closest('.typeCoursesBlocksRadio').find('.mainCorporate').children('input').not(this).prop('checked',false);
    //     $(this).closest('.typeCoursesBlocksRadio').find('.corporateChildFields').css('display', 'none');
    //     $(this).closest('.typeCoursesBlocksRadio').css('height', '99px');
    //     $(this).closest('.appleFields').css('height', '1101px');
    //     $(this).closest('.radioFieldsBlocksType').css('height', '145px');
    //     $(this).closest('.typeCoursesFields').css('height', '181px');
    // })
    $('body').on('change','#individual', function () {
        $(this).closest('.typeCoursesBlocksRadio').children('div').children('div').children('input').not(this).prop('checked',false);
        $(this).closest('.typeCoursesBlocksRadio').children('.group').find('.groupChildFields').css('display', 'none');
        $(this).closest('.typeCoursesBlocksRadio').children('.corporate').find('.corporateChildFields').css('display', 'none');
        $(this).closest('.individual').find('.individualChildFields').css('display', 'flex');
        $(this).closest('.individual').find('.online').children('input').prop('checked', true);
        $(this).closest('.typeCoursesBlocksRadio').css('height', '166px');
        $(this).closest('.appleFields').css('height', '1170px');
        $(this).closest('.radioFieldsBlocksType').css('height', '215px');
        $(this).closest('.typeCoursesFields').css('height', '251px');
    })
    $('body').on('change','#group', function () {
        $(this).closest('.typeCoursesBlocksRadio').children('div').children('div').children('input').not(this).prop('checked',false);
        $(this).closest('.typeCoursesBlocksRadio').children('.individual').find('.individualChildFields').css('display', 'none');
        $(this).closest('.typeCoursesBlocksRadio').children('.corporate').find('.corporateChildFields').css('display', 'none');
        $(this).closest('.group').find('.groupChildFields').css('display', 'flex');
        $(this).closest('.group').find('.online').children('input').prop('checked', true);
        $(this).closest('.typeCoursesBlocksRadio').css('height', '166px');
        $(this).closest('.appleFields').css('height', '1170px');
        $(this).closest('.radioFieldsBlocksType').css('height', '215px');
        $(this).closest('.typeCoursesFields').css('height', '251px');
    })
    $('body').on('change','#corporate', function () {
        $(this).closest('.typeCoursesBlocksRadio').children('div').children('div').children('input').not(this).prop('checked',false);
        $(this).closest('.typeCoursesBlocksRadio').children('.individual').find('.individualChildFields').css('display', 'none');
        $(this).closest('.typeCoursesBlocksRadio').children('.group').find('.groupChildFields').css('display', 'none');
        $(this).closest('.corporate').find('.corporateChildFields').css('display', 'flex');
        $(this).closest('.corporate').find('.online').children('input').prop('checked', true);
        $(this).closest('.typeCoursesBlocksRadio').css('height', '166px');
        $(this).closest('.appleFields').css('height', '1170px');
        $(this).closest('.radioFieldsBlocksType').css('height', '215px');
        $(this).closest('.typeCoursesFields').css('height', '251px');
    })
    $('body').on('change','#individualOnline, #individualOffline, #groupOnline, #groupOffline,#corporateOnline,#corporateOffline', function () {
        $(this).closest('.typeCoursesBlocksRadio').find('.sameTypeCourse').children('div').children('input').not(this).prop('checked',false);
    })

})