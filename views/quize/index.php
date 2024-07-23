<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/quize.css?v=2');
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
<!--popup-->
<div class="popup-wrap-quize">
    <div class="popup-box-quize">
        <div class="quize-input-x">
            <form class="formMail" action="/quize/index" method="post">
                <div class="formName">
                    <span class="quize-title"><?= $GLOBALS['text']['footerQuize']?></span>
                    <span class="close-btn-quize popup-close-quize">x</span>
                </div>
                <div class="inputsMail" >
                    <input type="text" name="name" placeholder="<?= $GLOBALS['text']['footerInputName']?>" <?=!Yii::$app->user->identity->username || !$session['quizeName'] ? 'required' : ''?>>
                    <input type="number" name="phone" placeholder="<?= $GLOBALS['text']['footerInputPhone']?>" <?=!Yii::$app->user->identity->phone || !$session['quizePhone'] ? 'required' : ''?>>
                    <input type="text"  name="email" placeholder="<?= $GLOBALS['text']['footerInputEmail']?>" <?=!Yii::$app->user->identity->email || !$session['quizeEmail']? 'required' : ''?>>
                </div>
                <div class="formContinue">
                    <button name="enterQuize" type="submit"><?= $GLOBALS['text']['footerInputBtn']?></button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<?php
$session = Yii::$app->session;
if ($session['enterQuize']) { ?>
    <script>
        $(document).ready(function() {
            $('.popup-wrap-quize').fadeIn(500);
            $('.popup-box-quize').removeClass('transform-out').addClass('transform-in');
            $('.popup-close-quize').click(function(e) {
                e.preventDefault();
                $('.popup-wrap-quize').fadeOut(500);
                $('.popup-box-quize').removeClass('transform-in').addClass('transform-out');
            });
        });
    </script>
<?php } ?>
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