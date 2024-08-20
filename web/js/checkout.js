// Harut
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
    // Mariam
    $(document).ready(function() {
        $('.checkoutTotalFieldInfoBottom button').on("click", function () {
            window.location.href = '/my-card/congratulation';
        })
    })
    $('#checkoutCardNumber').on('input', function() {
        let input = $(this).val().replace(/\s+/g, '').replace(/[^0-9]/g, '');
        let formattedInput = input.replace(/(\d{4})(?=\d)/g, '$1 ');
        $(this).val(formattedInput);
    });
    $('#checkoutCardDate').on('input', function() {
        let value = $(this).val().replace(/[^0-9]/g, ''); // Remove non-numeric characters

        // If the length is greater than or equal to 2, format it with a slash
        if (value.length > 2) {
            value = value.slice(0, 2) + '/' + value.slice(2, 4);
        }

        // Handle the case where the length is less than or equal to 2
        else {
            // No need for slash if fewer than 2 digits
            value = value.slice(0, 2);
        }

        $(this).val(value);
    });
})