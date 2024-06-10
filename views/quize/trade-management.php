<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/trade-management.css');
?>
<div class="tradeManagement">
    <div class="bodyTradeManagement">
        <div class="stepperAndNumber">
            <div class="questionTradeManagement">
                <div class="titleTradeManagement">1С: ԱՌԵՎՏՐԻ ԿԱՌԱՎԱՐՈւՄ</div>
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
                    <div class="questionQuize">1. <span>Ինչպե՞ս է կոչվում «1C: ԱռևՎտրի կառավարում» հիմնական կոնֆիգուրացիան, որը պարունակում է համակարգի հիմնական կարգավորումներն ու ֆունկցիոնալությունը:</span></div>
                    <div class="answerQuestionQuize">
                        <div class="answerQuize">
                            <input type="radio" id="option1" name="quizOption" value="1">
                            <label for="option1">1. <span>1С: Առևտրի կառավարում</span></label>
                        </div>
                        <div class="answerQuize">
                            <input type="radio" id="option2" name="quizOption" value="2">
                            <label for="option2">2. <span>Ձեռնարկությունների կառավարում</span></label>
                        </div>
                        <div class="answerQuize">
                            <input type="radio" id="option3" name="quizOption" value="3">
                            <label for="option3">3. <span>Մարդկային ռեսուրսների կառավարում</span></label>
                        </div>
                        <div class="answerQuize">
                            <input type="radio" id="option4" name="quizOption" value="4">
                            <label for="option4">4. <span>1С: Աշխատավարձ և կադրերի կառավարում</span></label>
                        </div>
                    </div>
                    <button type="button" class="btn btn-next btnQuize">
                        <img src="/images/contactus.png" alt="">
                        <span>ԱՌԱՋ</span>
                    </button>
                </form>
                <form action="#" class="form-step" method="post">
                    <div class="questionQuize">2. <span>Բիզնեսի ո՞ր ոլորտներում կարող է առավել օգտակար լինել «1C: Առևվտրի կառավարումը»։</span></div>
                    <div class="answerQuestionQuize">
                        <div class="answerQuize">
                            <input type="radio" id="option1" name="quizOption" value="1">
                            <label for="option1">1. <span>Մանրածախ առևտուր</span></label>
                        </div>
                        <div class="answerQuize">
                            <input type="radio" id="option2" name="quizOption" value="2">
                            <label for="option2">2. <span>Մեծածախ առևտուր</span></label>
                        </div>
                        <div class="answerQuize">
                            <input type="radio" id="option3" name="quizOption" value="3">
                            <label for="option3">3. <span>Ծառայություններ</span></label>
                        </div>
                        <div class="answerQuize">
                            <input type="radio" id="option4" name="quizOption" value="4">
                            <label for="option4">4. <span>Վերը նշված բոլոր պատասխանները ճիշտ են</span></label>
                        </div>
                    </div>
                    <button type="button" class="btn btn-next btnQuize">
                        <img src="/images/contactus.png" alt="">
                        <span>ԱՌԱՋ</span>
                    </button>
                </form>
                <form action="#" class="form-step" method="post">
                    <div class="questionQuize">3. <span>«1C: ԱռևՎտրի կառավարում» ծրագրի ո՞ր բաժինն է պատասխանատու պահեստային պաշարների կառավարման ևՎ ապրանքների առաքման համար։</span></div>
                    <div class="answerQuestionQuize">
                        <div class="answerQuize">
                            <input type="radio" id="option1" name="quizOption" value="1">
                            <label for="option1">1. <span>Մանրածախ առևտուր</span></label>
                        </div>
                        <div class="answerQuize">
                            <input type="radio" id="option2" name="quizOption" value="2">
                            <label for="option2">2. <span>Մեծածախ առևտուր</span></label>
                        </div>
                        <div class="answerQuize">
                            <input type="radio" id="option3" name="quizOption" value="3">
                            <label for="option3">3. <span>Ծառայություններ</span></label>
                        </div>
                        <div class="answerQuize">
                            <input type="radio" id="option4" name="quizOption" value="4">
                            <label for="option4">4. <span>Վերը նշված բոլոր պատասխանները ճիշտ են</span></label>
                        </div>
                    </div>
                    <button type="button" class="btn btn-next btnQuize">
                        <img src="/images/contactus.png" alt="">
                        <span>ԱՌԱՋ</span>
                    </button>
                </form>
                <form action="#" class="form-step" method="post">
                    <div class="questionQuize">4. <span>Ի՞նչ գործիքներ է տրամադրում «1C: Առևտրի կառավարում»-ը ընկերության ֆինանսական կատարողականը վերլուծելու համար:</span></div>
                    <div class="answerQuestionQuize">
                        <div class="answerQuize">
                            <input type="radio" id="option1" name="quizOption" value="1">
                            <label for="option1">1. <span>Շահույթի և վնասի մասին հաշվետվություն</span></label>
                        </div>
                        <div class="answerQuize">
                            <input type="radio" id="option2" name="quizOption" value="2">
                            <label for="option2">2. <span>Շրջանառու միջոցների վերլուծություն</span></label>
                        </div>
                        <div class="answerQuize">
                            <input type="radio" id="option3" name="quizOption" value="3">
                            <label for="option3">3. <span>Ֆինանսական վահանակներ և հաշվետվություններ</span></label>
                        </div>
                        <div class="answerQuize">
                            <input type="radio" id="option4" name="quizOption" value="4">
                            <label for="option4">4. <span>Վերը նշված բոլոր պատասխանները ճիշտ են</span></label>
                        </div>
                    </div>
                    <button type="button" class="btn btn-next btnQuize">
                        <img src="/images/contactus.png" alt="">
                        <span>ԱՌԱՋ</span>
                    </button>
                </form>
                <form action="#" class="form-step" method="post">
                    <div class="questionQuize">5. <span>Ի՞նչ է պահանջվում լրացնել «Ապրանքների ձեռքբերում» նոր փաստաթուղթ ստեղծելիս:</span></div>
                    <div class="answerQuestionQuize">
                        <div class="answerQuize">
                            <input type="radio" id="option1" name="quizOption" value="1">
                            <label for="option1">1. <span>Միայն ապրանքի անվանումը</span></label>
                        </div>
                        <div class="answerQuize">
                            <input type="radio" id="option2" name="quizOption" value="2">
                            <label for="option2">2. <span>Ստացման ամսաթիվը և գումարը</span></label>
                        </div>
                        <div class="answerQuize">
                            <input type="radio" id="option3" name="quizOption" value="3">
                            <label for="option3">3. <span>Ապրանքի քանակն ու գինը</span></label>
                        </div>
                        <div class="answerQuize">
                            <input type="radio" id="option4" name="quizOption" value="4">
                            <label for="option4">4. <span>Կապալառու և պահեստ</span></label>
                        </div>
                    </div>
                    <button type="button" class="btn-next btnQuize">
                        <img src="/images/contactus.png" alt="">
                        <span class="endSpan">ԱՌԱՋ</span>
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
