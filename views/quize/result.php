<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/quize.css');
?>
<div class="result">
    <div class="bodyResult">
        <div class="titleResult">1С: ԱՌԵՎՏՐԻ ԿԱՌԱՎԱՐՈւՄ</div>
        <div class="resultBlackboard">
            <div class="resultBlackboardContainer">
                <img src="/images/resultBlackboard.png" alt="">
                <div class="resultBlackboardCntered">
                    <span class="resultBlackboardCount">5/5</span>
                    <span class="resultBlackboardResult">ՁԵՐ ԱՐԴՅՈՒՆՔՆԵՐԸ</span>
                </div>
            </div>
            <div class="resultButtons">
                <button type="button" class="btnResult1">
                    <img src="/images/contactus.png" alt="">
                    <span>ԱՅԼ QUIZE</span>
                </button>
                <button type="button" class="btnResult2">
                    <img src="/images/seeallcourse.png" alt="">
                    <span>ԳԼԽԱՎՈՐ ԷՋ</span>
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