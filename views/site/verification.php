<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/verification.css');
?>
<div class="verification">
    <div class="contentVerification">
        <img id="lock" src="/images/lockVerification.gif" alt="Lock Image">
        <div class="container-custom">
            <form class="card-custom" action="new-password" method="post">
                <div class="enterCodeContent">
                    <div class="enterCode"><?=$GLOBALS['text']['enterCode']?></div>
                    <div class="digitCode"><?=$GLOBALS['text']['digitCode'] . ' ' . ($email ? $email : '')?> </div>
                    <div class="otp-field">
                        <input name="number1" type="number"  placeholder="__"/>
                        <input name="number2" type="number"  placeholder="__"  disabled />
                        <input name="number3" type="number"  placeholder="__" disabled />
                        <input name="number4" type="number"  placeholder="__" disabled />
                        <input name="number5" type="number"  placeholder="__" disabled />
                    </div>
                    <div class="getCode"><?=$GLOBALS['text']['getCode']?></div>
                    <div class="resend" id="resend"><?=$GLOBALS['text']['resend']?></div>
                    <input type="hidden" value="<?=$email ?>" id="hiddenEmail">
                </div>
                <div class="buttonField">
                    <button type="submit" id="submitButton">
                        <img src="/images/securityBtn.png" alt="">
                        <span id="signupButtonText"><?=$GLOBALS['text']['verify']?></span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        const $inputs = $(".otp-field > input");
        const $button = $(".btn-custom");

        $inputs.first().focus();
        $button.prop("disabled", true);

        $inputs.on("paste", function (event) {
            event.preventDefault();
            const pastedValue = (event.originalEvent.clipboardData || window.clipboardData).getData("text");
            const otpLength = $inputs.length;

            for (let i = 0; i < otpLength; i++) {
                if (i < pastedValue.length) {
                    $inputs.eq(i).val(pastedValue[i]).prop("disabled", false).focus();
                } else {
                    $inputs.eq(i).val("").focus();
                }
            }
        });

        $inputs.on("keyup", function (e) {
            const $currentInput = $(this);
            const $nextInput = $currentInput.next("input");
            const $prevInput = $currentInput.prev("input");

            if ($currentInput.val().length > 1) {
                $currentInput.val("");
                return;
            }

            if ($nextInput.length && $currentInput.val() !== "") {
                $nextInput.prop("disabled", false).focus();
            }

            if (e.key === "Backspace") {
                $inputs.each(function (index2, input) {
                    if ($currentInput.index() <= $(input).index() && $prevInput.length) {
                        $(input).prop("disabled", true).val("");
                        $prevInput.focus();
                    }
                });
            }

            $button.prop("disabled", true);
            $inputs.each(function () {
                if (!$(this).prop("disabled") && $(this).val() !== "") {
                    $button.prop("disabled", false);
                }
            });
        });
    });
    $('body').on('click', '#resend', function () {
        let email = $('#hiddenEmail').val();
        let csrfToken = $('meta[name="csrf-token"]').attr("content");
        $.ajax({
            url: '/site/forgot',
            method: 'post',
            datatype: 'json',
            data: {
                email: email,
                message: 'resend_password',
                _csrf: csrfToken
            }
        })
    })
</script>
