<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/quize.css');
?>

<div class="quize">
    <div class="bodyQuize">
        <div class="quizeContainer">
            <div class="quizePlayAndTest">ԽԱՂԱ ԵՎ ՍՏՈՒԳԻՐ ԳԻՏԵԼԻՔՆԵՐԴ</div>
            <div class="lessonContainer">
                <div class="lessonAdministration" data-option="trade-management">1С: ԱՌԵՎՏՐԻ ԿԱՌԱՎԱՐՈւՄ</div>
                <div class="lessonAccounting" data-option="accounting">1С: ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ 8.3</div>
                <div class="lessonAccountingForBeginners" data-option="accountingForBeginners">1C: ՀԱՇՎԱՊԱՀՈՒԹՅՈՒՆ ՍԿՍՆԱԿՆԵՐԻ ՀԱՄԱՐ</div>
                <div class="lessonPersonnelManagment" data-option="personnelManagment">1С: ԱՇԽԱՏԱՎԱՐՁ ԵՒ ԿԱԴՐԵՐԻ ԿԱՌԱՎԱՐՈՒՄ</div>
            </div>
            <button type="button" class="btnQuize">
                <img src="/images/contactus.png" alt="">
                <span>ՍԿՍԵԼ</span>
            </button>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        let selectedOption = '';

        $('.lessonContainer div').click(function() {
            selectedOption = $(this).data('option');
            $(this).css('background', '#F36528');
            $(this).siblings().css('background', '');
        });
        $('.btnQuize').click(function() {
            if (selectedOption) {
                let url = '<?php echo Yii::$app->urlManager->createUrl(['quize']) ?>' + '/' + selectedOption;
                window.location.href = url;
            } else {
                alert('Please select an option first.');
            }
        });
    });
</script>