<!-- Mariam ev Harut-->
<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/quize.css?v=2');
$session = Yii::$app->session;
//var_dump($session['open_popup']);
//var_dump($session['popup_display']);
//die;
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
<div class="popup-wrap-quize" style="display: <?=isset($session['popup_display']) ? $session['popup_display'] : '' ?>">
    <div class="popup-box-quize">
        <div class="quize-input-x">
            <form class="formMail" action="/quize/index" method="post">
                <div class="formName">
                    <span class="quize-title"><?= $GLOBALS['text']['footerQuize']?></span>
                </div>
                <div class="inputsMail" >
                    <input type="text" name="name" placeholder="<?= $GLOBALS['text']['footerInputName']?>" <?=!Yii::$app->user->identity->username ? 'required' : ''?>>
                    <input type="number" name="phone" placeholder="<?= $GLOBALS['text']['footerInputPhone']?>" <?=!Yii::$app->user->identity->phone ? 'required' : ''?>>
                    <input type="text"  name="email" placeholder="<?= $GLOBALS['text']['footerInputEmail']?>" <?=!Yii::$app->user->identity->email ? 'required' : ''?>>
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
if ((is_null(Yii::$app->user->identity->username) || is_null(Yii::$app->user->identity->email) || is_null(Yii::$app->user->identity->phone)) && (!isset($session['popup_display']) && !isset($session['open_popup']))) { ?>
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
<?php
$session = Yii::$app->session;
if ($session['open_popup'] && isset($session['open_popup'])) { ?>
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
<?php } unset($session['open_popup']); unset($session['popup_display']);?>
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