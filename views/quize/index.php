<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/quize.css?v=2');
?>

<div class="quize">
    <div class="bodyQuize">
        <div class="quizeContainer">
            <div class="quizePlayAndTest"><?=$GLOBALS['text']['quizePlayAndTest']?></div>
            <div class="lessonContainer">
                <div class="lessonAdministration" data-option="trade-management"><?=$GLOBALS['text']['lessonAdministration']?></div>
                <div class="lessonAccounting" data-option="accounting"><?=$GLOBALS['text']['lessonAccounting']?></div>
                <div class="lessonAccountingForBeginners" data-option="accountingForBeginners"><?=$GLOBALS['text']['lessonAccountingForBeginners']?></div>
                <div class="lessonPersonnelManagment" data-option="personnelManagment"><?=$GLOBALS['text']['lessonPersonnelManagment']?></div>
            </div>
            <button type="button" class="btnQuize">
                <img src="/images/contactus.png" alt="">
                <span><?=$GLOBALS['text']['btnQuize']?></span>
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