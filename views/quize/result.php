<!-- Mariam ev Harut-->
<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/quize.css?v=1');
?>
<?php
$language = $_COOKIE['language'];
$class1 = '';
if ($language == 'en') {
} elseif ($language == 'am') {

} elseif ($language == 'ru') {
    $class1 = 'resultRu';
}
?>
<div class="result <?php echo $class1; ?>">
    <div class="bodyResult">
        <div class="titleResult"><?=$answers_list['name_list']?></div>
        <div class="resultBlackboard">
            <div class="resultBlackboardContainer">
                <img src="/images/resultBlackboard.png" alt="">
                <div class="resultBlackboardCntered">
                    <span class="resultBlackboardCount"><?=$true_answer_count?>/<?=$questions_count?></span>
<!--                    <span class="resultBlackboardResult">--><?php //=$answers_list['name_list']?><!--</span>-->
                </div>
            </div>
            <div class="resultButtons">
                <button type="button" class="btnResult1">
                    <img src="/images/contactus.png" alt="">
                    <span><?=$GLOBALS['text']['btnResult1']?></span>
                </button>
                <button type="button" class="btnResult2">
                    <img src="/images/seeallcourse.png" alt="">
                    <span><?=$GLOBALS['text']['btnResult2']?></span>
                </button>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        const btnResult1 = $(".btnResult1");
        const btnResult2 = $(".btnResult2");
        btnResult1.on("click", function() {
            window.location.href = '/quize';
        })
        btnResult2.on("click", function() {
            window.location.href = '/';
        })
    })
</script>