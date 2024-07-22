<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/quize.css?v=2');
?>
<?php
$session = Yii::$app->session;

var_dump($session['enterQuize']);
exit();
?>
<div class="quize">
    <div class="bodyQuize">
        <?php
        if(!empty($quize_name)){?>
            <div class="quizeContainer">
                <div class="quizePlayAndTest"><?=$GLOBALS['text']['quizePlayAndTest']?></div>
                <div class="lessonContainer">
                    <?php foreach ($quize_name as $item){ ?>
                        <div class="lessonsQiize" data-id="<?=$item['id']?>"><?=$item['name']?></div>
                    <?php }?>
                </div>
                <button type="button" class="btnQuize">
                    <img src="/images/contactus.png" alt="">
                    <span><?=$GLOBALS['text']['btnQuize']?></span>
                </button>
            </div>
        <?php }?>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        let selectedOption = '';

        $('.lessonContainer div').click(function() {
            selectedOption = $(this).data('id');
            $(this).css('background', '#F36528');
            $(this).siblings().css('background', '');
        });
        $('.btnQuize').click(function() {
            if (selectedOption) {
                let url = '<?php echo Yii::$app->urlManager->createUrl(['quize/quize-questions?id=']) ?>' + selectedOption;
                window.location.href = url;
            }
        });
    });
</script>