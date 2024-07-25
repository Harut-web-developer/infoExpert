<!-- Mariam ev Harut-->
<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/trade-management.css?v=1');
?>
<div class="tradeManagement">
    <div class="bodyTradeManagement">
        <div class="stepperAndNumber">
            <div class="questionTradeManagement">
                <div class="titleTradeManagement"><?=$answers_list['name_list']?></div>
                <?php if (!empty($questions_count)){?>
                <div class="numberTradeManagement">1/<?=$questions_count?></div>
                <!-- Progress bar -->
                    <div class="progressbar">
                        <div class="progress" id="progress"></div>
                        <?php for ($i = 0; $i < $questions_count; $i++){?>
                            <div class="progress-step"></div>
                        <?php }?>
                    </div>
                <?php }?>
                <!-- Steps -->

                <?php if (!empty($answers)){
                    foreach ($answers as $index => $answer){?>
                    <form action="#" class="form-step" method="post">
                        <div class="questionQuize"><?=$index + 1?>. <span><?=$answer['quest_name']?></span></div>
                        <div class="answerQuestionQuize">
                            <?php foreach ($answer['answers'] as $key => $item){?>
                                <div class="answerQuize">
                                    <input type="radio" id="option<?=$key + 1?>" name="quizOption" value="<?=$item['id']?>">
                                    <label for="option<?=$key + 1?>"><?=$key + 1?>. <span><?=$item['answer_name']?></span></label>
                                </div>
                            <?php }?>
                        </div>
                        <button type="button" class="btn btn-next btnQuize">
                            <img src="/images/contactus.png" alt="">
                            <span><?=$GLOBALS['text']['btnQuizeGo']?></span>
                        </button>
                    </form>
                <?php }} ?>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        const countList = <?php echo $questions_count; ?>;
        const nextBtns = $(".btn-next");
        const progress = $("#progress");
        const formSteps = $(".form-step");
        const progressSteps = $(".progress-step");
        let formStepsNum = 0;
        let count = 1;
        let answers = [];
        let numberTradeManagement = $('.numberTradeManagement');
        progressSteps.first().addClass('progress-step-active');
        formSteps.first().addClass('form-step-active');
        nextBtns.on("click", function() {
            let valueAnswer = $(this).closest('form').find('.answerQuestionQuize div input[type="radio"]:checked').val()
            answers.push(valueAnswer);
            let checked = $(this).closest('form').find('.answerQuestionQuize div input[type="radio"]:checked').length > 0 ;
            if ((formStepsNum == formSteps.length - 1) && checked) {
                $.ajax({
                    method: "POST",
                    url: "/quize/check",
                    data: { answers: answers, id: <?php echo $answers_list['id']; ?>, action: 'addQuize'},
                    success:function (data){
                        window.location.href = 'result?id='+"<?php echo $answers_list['id']; ?>" + '&count=' + data;
                    }
                });
            } else if (checked) {
                formStepsNum++;
                count++;
                updateFormSteps();
                updateProgressbar();
                numberTradeManagement.text(count + '/'+ countList);

            }
        });
        function updateFormSteps() {
            formSteps.removeClass("form-step-active");
            formSteps.eq(formStepsNum).addClass("form-step-active");
        }
        function updateProgressbar() {
            progressSteps.removeClass("progress-step-active");
            progressSteps.slice(0, formStepsNum + 1).addClass("progress-step-active");

            const progressActive = $(".progress-step-active");
            progress.width(((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%");
        }
        $('.answerQuestionQuize div').click(function() {
            $(this).find('input[type="radio"]').prop('checked', true);
            $(this).siblings().find('input[type="radio"]').prop('checked', false);
            $(this).css('background', '#F36528');
            $(this).siblings().css('background', '');
        });
    });
</script>
