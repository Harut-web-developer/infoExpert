$(document).ready(function(){
    $('body').on('click', '#credit', function () {
        $(this).closest('.checkoutCreditOtherField').find('#other').prop('checked', false)
        $(this).closest('.checkoutCreditOtherField').find('.otherField').css('margin-top', '62px')

        $(this).closest('.creditField').find('.checkoutCreditField').css('display', 'flex')
        $(this).closest('.checkoutInputsRadioField').css('height', '552px');
        $(this).closest('.checkoutInputsSectionLeftField').css('height', 'min-content');
        $(this).closest('.checkoutInputsSectionField').css('height', 'min-content');
        $(this).closest('.checkoutFieldSection').css('height', 'min-content');
        $(this).closest('.checkoutField').css('height', 'min-content');
        if (window.innerWidth < 1100){
            $(this).closest('.checkoutCreditOtherField').find('.otherField').css('margin-top', '33px')
            $(this).closest('.checkoutInputsRadioField').css('height', '430px');
            $(this).closest('.checkoutInputsSectionLeftField').css('height', 'min-content');
            $(this).closest('.checkoutField').css('height', 'min-content');

        }
    })
    $('body').on('click', '#other', function () {
        $(this).closest('.checkoutCreditOtherField').find('#credit').prop('checked', false)
    })
    $(document).ready(function() {
        $('.checkoutTotalFieldInfoBottom button').on("click", function () {
            window.location.href = '/my-card/congratulation';
        })
    })
})