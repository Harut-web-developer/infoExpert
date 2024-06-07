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
                <form action="#" class="form-step form-step-active">
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
                    <button class="btn btn-next btnQuize">
                        <img src="/images/contactus.png" alt="">
                        <span>ԱՌԱՋ</span>
                    </button>
                </form>

                <form action="#" class="form-step">
                    <div class="questionQuize">2. <span>Բիզնեսի ո՞ր ոլորտներում կարող է առավել օգտակար լինել «1C: Առևվտրի կառավարումը»։</span></div>
                    <div class="answerQuestionQuize">
                        <div class="answerQuize">1. <span>Մանրածախ առևտուր</span></div>
                        <div class="answerQuize">2. <span>Մեծածախ առևտուր</span></div>
                        <div class="answerQuize">3. <span>Ծառայություններ</span></div>
                        <div class="answerQuize">4. <span>Վերը նշված բոլոր պատասխանները ճիշտ են</span></div>
                    </div>
                    <button class="btn btn-next btnQuize">
                        <img src="/images/contactus.png" alt="">
                        <span>ԱՌԱՋ</span>
                    </button>
                </form>
                <form action="#" class="form-step">
                    <div class="questionQuize">3. <span>«1C: ԱռևՎտրի կառավարում» ծրագրի ո՞ր բաժինն է պատասխանատու պահեստային պաշարների կառավարման ևՎ ապրանքների առաքման համար։</span></div>
                    <div class="answerQuestionQuize">
                        <div class="answerQuize">1. <span>Մանրածախ առևտուր</span></div>
                        <div class="answerQuize">2. <span>Մեծածախ առևտուր</span></div>
                        <div class="answerQuize">3. <span>Ծառայություններ</span></div>
                        <div class="answerQuize">4. <span>Վերը նշված բոլոր պատասխանները ճիշտ են</span></div>
                    </div>
                    <button class="btn btn-next btnQuize">
                        <img src="/images/contactus.png" alt="">
                        <span>ԱՌԱՋ</span>
                    </button>
                </form>
                <form action="#" class="form-step">
                    <div class="questionQuize">4. <span>Ի՞նչ գործիքներ է տրամադրում «1C: Առևտրի կառավարում»-ը ընկերության ֆինանսական կատարողականը վերլուծելու համար:</span></div>
                    <div class="answerQuestionQuize">
                        <div class="answerQuize">1. <span>Շահույթի և վնասի մասին հաշվետվություն</span></div>
                        <div class="answerQuize">2. <span>Շրջանառու միջոցների վերլուծություն</span></div>
                        <div class="answerQuize">3. <span>Ֆինանսական վահանակներ և հաշվետվություններ</span></div>
                        <div class="answerQuize">4. <span>Վերը նշված բոլոր պատասխանները ճիշտ են</span></div>
                    </div>
                    <button class="btn btn-next btnQuize">
                        <img src="/images/contactus.png" alt="">
                        <span>ԱՌԱՋ</span>
                    </button>
                </form>
                <form action="#" class="form-step">
                    <div class="questionQuize">5. <span>Ի՞նչ է պահանջվում լրացնել «Ապրանքների ձեռքբերում» նոր փաստաթուղթ ստեղծելիս:</span></div>
                    <div class="answerQuestionQuize">
                        <div class="answerQuize">1. <span>Միայն ապրանքի անվանումը</span></div>
                        <div class="answerQuize">2. <span>Ստացման ամսաթիվը և գումարը</span></div>
                        <div class="answerQuize">3. <span>Ապրանքի քանակն ու գինը</span></div>
                        <div class="answerQuize">4. <span>Կապալառու և պահեստ</span></div>
                    </div>
                    <button class="btn-next btnQuize">
                        <img src="/images/contactus.png" alt="">
                        <span>ԱՌԱՋ</span>
                    </button>
                </form>
            </div>
        </div>

    </div>
</div>
<script>
    const nextBtns = document.querySelectorAll(".btn-next");
    const progress = document.getElementById("progress");
    const formSteps = document.querySelectorAll(".form-step");
    const progressSteps = document.querySelectorAll(".progress-step");

    let formStepsNum = 0;
    let count = 1;
    let numberTradeManagement = document.getElementsByClassName('numberTradeManagement');
    nextBtns.forEach((btn) => {
        btn.addEventListener("click", () => {
            formStepsNum++;
            count++;
            updateFormSteps();
            updateProgressbar();
            for (let i = 0; i < numberTradeManagement.length; i++) {
                numberTradeManagement[i].innerHTML = count + '/5';
            }
        });
    });


    function updateFormSteps() {
        formSteps.forEach((formStep) => {
            formStep.classList.contains("form-step-active") &&
            formStep.classList.remove("form-step-active");
        });

        formSteps[formStepsNum].classList.add("form-step-active");
    }

    function updateProgressbar() {
        progressSteps.forEach((progressStep, idx) => {
            if (idx < formStepsNum + 1) {
                progressStep.classList.add("progress-step-active");
            } else {
                progressStep.classList.remove("progress-step-active");
            }
        });

        const progressActive = document.querySelectorAll(".progress-step-active");

        progress.style.width = ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
    }
</script>