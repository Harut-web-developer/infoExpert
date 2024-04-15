$(document).ready(function(){
    $('body').on('click', '#credit', function () {
        $(this).closest('.checkoutCreditOtherField').find('#other').prop('checked', false)
        $(this).closest('.creditField').find('.checkoutCreditField').prop('display', 'block !important')
        $(this).closest('.checkoutInputsRadioField').css('height', '552px');
        $(this).closest('.checkoutInputsSectionLeftField').css('height', '838px');
        $(this).closest('.checkoutInputsSectionField').css('height', '838px');
        $(this).closest('.checkoutFieldSection').css('height', '946px');
        $(this).closest('.checkoutField').css('height', '1240px');
    })
    $('body').on('click', '#other', function () {
        $(this).closest('.checkoutCreditOtherField').find('#credit').prop('checked', false)
    })
})