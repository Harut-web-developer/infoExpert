<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/trade-management.css');
?>
<div class="tradeManagement">
    <div class="bodyTradeManagement">
        <div class="stepperAndNumber">
            <div class="questionTradeManagement">
                <div class="titleTradeManagement"><?=$GLOBALS['text']['lessonAdministration']?></div>
                <div class="numberTradeManagement">1/5</div>
                <!-- Progress bar -->
                <div class="progressbar">
                    <div class="progress" id="progress"></div>
                    <div class="progress-step progress-step-active"></div>
                    <div class="progress-step"></div>
                    <div class="progress-step"></div>
                    <div class="progress-step"></div>
                    <div class="progress-step"></div>
                </div>
                <!-- Steps -->
                <form action="#" class="form-step form-step-active" method="post">
                    <div class="questionQuize">1. <span><?=$GLOBALS['text']['questionQuize']?></span></div>
                    <div class="answerQuestionQuize">
                        <div class="answerQuize">
                            <input type="radio" id="option1" name="quizOption" value="1">
                            <label for="option1">1. <span><?=$GLOBALS['text']['lessonAdministration']?></span></label>
                        </div>
                        <div class="answerQuize">
                            <input type="radio" id="option2" name="quizOption" value="2">
                            <label for="option2">2. <span><?=$GLOBALS['text']['answerQuize2']?></span></label>
                        </div>
                        <div class="answerQuize">
                            <input type="radio" id="option3" name="quizOption" value="3">
                            <label for="option3">3. <span><?=$GLOBALS['text']['answerQuize3']?></span></label>
                        </div>
                        <div class="answerQuize">
                            <input type="radio" id="option4" name="quizOption" value="4">
                            <label for="option4">4. <span><?=$GLOBALS['text']['answerQuize4']?></span></label>
                        </div>
                    </div>
                    <button type="button" class="btn btn-next btnQuize">
                        <img src="/images/contactus.png" alt="">
                        <span><?=$GLOBALS['text']['btnQuize']?></span>
                    </button>
                </form>
                <form action="#" class="form-step" method="post">
                    <div class="questionQuize">2. <span><?=$GLOBALS['text']['questionQuize2']?></span></div>
                    <div class="answerQuestionQuize">
                        <div class="answerQuize">
                            <input type="radio" id="option1" name="quizOption" value="1">
                            <label for="option1">1. <span><?=$GLOBALS['text']['answerQuize9']?></span></label>
                        </div>
                        <div class="answerQuize">
                            <input type="radio" id="option2" name="quizOption" value="2">
                            <label for="option2">2. <span><?=$GLOBALS['text']['answerQuize10']?></span></label>
                        </div>
                        <div class="answerQuize">
                            <input type="radio" id="option3" name="quizOption" value="3">
                            <label for="option3">3. <span><?=$GLOBALS['text']['answerQuize11']?></span></label>
                        </div>
                        <div class="answerQuize">
                            <input type="radio" id="option4" name="quizOption" value="4">
                            <label for="option4">4. <span><?=$GLOBALS['text']['answerQuize8']?></span></label>
                        </div>
                    </div>
                    <button type="button" class="btn btn-next btnQuize">
                        <img src="/images/contactus.png" alt="">
                        <span><?=$GLOBALS['text']['btnQuize']?></span>
                    </button>
                </form>
                <form action="#" class="form-step" method="post">
                    <div class="questionQuize">3. <span><?=$GLOBALS['text']['questionQuize3']?></span></div>
                    <div class="answerQuestionQuize">
                        <div class="answerQuize">
                            <input type="radio" id="option1" name="quizOption" value="1">
                            <label for="option1">1. <span><?=$GLOBALS['text']['answerQuize9']?></span></label>
                        </div>
                        <div class="answerQuize">
                            <input type="radio" id="option2" name="quizOption" value="2">
                            <label for="option2">2. <span><?=$GLOBALS['text']['answerQuize10']?></span></label>
                        </div>
                        <div class="answerQuize">
                            <input type="radio" id="option3" name="quizOption" value="3">
                            <label for="option3">3. <span><?=$GLOBALS['text']['answerQuize11']?></span></label>
                        </div>
                        <div class="answerQuize">
                            <input type="radio" id="option4" name="quizOption" value="4">
                            <label for="option4">4. <span><?=$GLOBALS['text']['answerQuize8']?></span></label>
                        </div>
                    </div>
                    <button type="button" class="btn btn-next btnQuize">
                        <img src="/images/contactus.png" alt="">
                        <span><?=$GLOBALS['text']['btnQuize']?></span>
                    </button>
                </form>
                <form action="#" class="form-step" method="post">
                    <div class="questionQuize">4. <span><?=$GLOBALS['text']['questionQuize4']?></span></div>
                    <div class="answerQuestionQuize">
                        <div class="answerQuize">
                            <input type="radio" id="option1" name="quizOption" value="1">
                            <label for="option1">1. <span><?=$GLOBALS['text']['answerQuize5']?></span></label>
                        </div>
                        <div class="answerQuize">
                            <input type="radio" id="option2" name="quizOption" value="2">
                            <label for="option2">2. <span><?=$GLOBALS['text']['answerQuize6']?></span></label>
                        </div>
                        <div class="answerQuize">
                            <input type="radio" id="option3" name="quizOption" value="3">
                            <label for="option3">3. <span><?=$GLOBALS['text']['answerQuize7']?></span></label>
                        </div>
                        <div class="answerQuize">
                            <input type="radio" id="option4" name="quizOption" value="4">
                            <label for="option4">4. <span><?=$GLOBALS['text']['answerQuize8']?></span></label>
                        </div>
                    </div>
                    <button type="button" class="btn btn-next btnQuize">
                        <img src="/images/contactus.png" alt="">
                        <span><?=$GLOBALS['text']['btnQuize']?></span>
                    </button>
                </form>
                <form action="#" class="form-step" method="post">
                    <div class="questionQuize">5. <span><?=$GLOBALS['text']['questionQuize5']?></span></div>
                    <div class="answerQuestionQuize">
                        <div class="answerQuize">
                            <input type="radio" id="option1" name="quizOption" value="1">
                            <label for="option1">1. <span><?=$GLOBALS['text']['answerQuize14']?></span></label>
                        </div>
                        <div class="answerQuize">
                            <input type="radio" id="option2" name="quizOption" value="2">
                            <label for="option2">2. <span><?=$GLOBALS['text']['answerQuize15']?></span></label>
                        </div>
                        <div class="answerQuize">
                            <input type="radio" id="option3" name="quizOption" value="3">
                            <label for="option3">3. <span><?=$GLOBALS['text']['answerQuize16']?></span></label>
                        </div>
                        <div class="answerQuize">
                            <input type="radio" id="option4" name="quizOption" value="4">
                            <label for="option4">4. <span><?=$GLOBALS['text']['answerQuize17']?></span></label>
                        </div>
                    </div>
                    <button type="button" class="btn-next btnQuize">
                        <img src="/images/contactus.png" alt="">
                        <span class="endSpan"><?=$GLOBALS['text']['btnQuize']?></span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        const nextBtns = $(".btn-next");
        const progress = $("#progress");
        const formSteps = $(".form-step");
        const progressSteps = $(".progress-step");
        let formStepsNum = 0;
        let count = 1;
        let numberTradeManagement = $('.numberTradeManagement');
        nextBtns.on("click", function() {
            let checked = $(this).closest('form').find('.answerQuestionQuize div input[type="radio"]:checked').length > 0 ;
            if ((formStepsNum == formSteps.length - 1) && checked) {
                window.location.href = 'result';
            } else if (checked) {
                formStepsNum++;
                count++;
                updateFormSteps();
                updateProgressbar();
                numberTradeManagement.text(count + '/5');
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
