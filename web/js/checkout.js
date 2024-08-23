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
        if (input.length > 16) {
            input = input.substring(0, 16);
        }
        let formattedInput = input.replace(/(\d{4})(?=\d)/g, '$1 ');
        $(this).val(formattedInput);
    });
    $('#checkoutCardDate').on('input', function(e) {
        let value = $(this).val().replace(/[^0-9]/g, '');
        const currentYear = new Date().getFullYear().toString().slice(2, 4);
        if (value.length >= 2) {
            let month = parseInt(value.slice(0, 2), 10);
            let year = value.slice(2, 4);
            if (month > 12) {
                $(this).val('');
            } else {
                let formattedValue = month.toString().padStart(2, '0') + '/';
                if (value.length >= 4) {
                    if (year < currentYear) {
                        $(this).val(formattedValue);
                    } else {
                        $(this).val(formattedValue + year);
                    }
                } else {
                    $(this).val(formattedValue + value.slice(2, 4));
                }
            }
        } else {
            $(this).val(value);
        }
        if (e.originalEvent.inputType === 'deleteContentBackward') {
            let newValue = $(this).val().replace(/[^0-9]/g, '');
            if (newValue.length <= 2) {
                $(this).val(newValue);
            }
        }
    });
    $('#checkoutCardCode').on('input', function() {
        let input = $(this).val().replace(/\s+/g, '').replace(/[^0-9]/g, '');
        if (input.length > 4) {
            input = input.substring(0, 4);
        }
        $(this).val(input);
    })
})