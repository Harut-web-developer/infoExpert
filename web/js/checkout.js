$(document).ready(function(){
    $('body').on('click', '#credit', function () {
        $(this).closest('.checkoutCreditOtherField').find('#other').prop('checked', false)
        $(this).closest('.checkoutCreditOtherField').find('.otherField').css('margin-top', '62px')

        $(this).closest('.creditField').find('.checkoutCreditField').css('display', 'flex')
        $(this).closest('.checkoutInputsRadioField').css('height', '552px');
        $(this).closest('.checkoutInputsSectionLeftField').css('height', '838px');
        $(this).closest('.checkoutInputsSectionField').css('height', '838px');
        $(this).closest('.checkoutFieldSection').css('height', '946px');
        $(this).closest('.checkoutField').css('height', '1240px');
        if (window.innerWidth < 1100){
            $(this).closest('.checkoutCreditOtherField').find('.otherField').css('margin-top', '33px')
            $(this).closest('.checkoutInputsRadioField').css('height', '430px');
            $(this).closest('.checkoutInputsSectionLeftField').css('height', '700px');
            $(this).closest('.checkoutField').css('height', '960px');

        }
    })
    $('body').on('click', '#other', function () {
        $(this).closest('.checkoutCreditOtherField').find('#credit').prop('checked', false)
        // $(this).closest('.checkoutCreditOtherField').find('.checkoutCreditField').css('display', 'none')
    })
})