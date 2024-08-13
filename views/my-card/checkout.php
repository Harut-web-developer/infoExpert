<!-- Mariam  50 ev Harut 50-->
<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/checkout.css?v=1');
?>
<?php
$language = $_COOKIE['language'];
$class1 = '';
if ($language == 'en') {
} elseif ($language == 'am') {
    $class1 = 'checkoutFieldAm';

} elseif ($language == 'ru') {
    $class1 = 'checkoutFieldRu';
}
?>
<div class="checkoutField <?php echo $class1; ?>">
    <div class="checkoutFieldSection">
        <div class="myCoursesTitleField">
            <a href="javascript:history.go(-1)" class="managmentBack">
                <img src="/images/backButtonCheckout.png" alt="" class="backButtonCheckout">
            </a>
            <div><?=$GLOBALS['text']['checkoutTitle']?></div>
        </div>
        <div class="checkoutTitleField">
            <a href="javascript:history.go(-1)" class="managmentBack">
                <img src="/images/backButtonCheckout.png" alt="" class="backButtonCheckout">
            </a>
            <div><?=$GLOBALS['text']['checkoutTitle']?></div>
        </div>
        <div class="checkoutInputsSectionField">
            <div class="checkoutInputsSectionLeftField">
                <div class="checkoutInputsFirstField">
                    <span><?=$GLOBALS['text']['checkoutPaymentMethod']?></span>
                    <div class="checkoutInputsRadioField">
                        <div class="checkoutCreditOtherField">
                            <div class="creditField">
                                <div class="mainCreditField">
                                    <input id="credit" type="radio" name="credit">
                                    <label for="credit">
                                        <img src="/images/creditIcon.png" alt="">
                                        <span><?=$GLOBALS['text']['checkoutCredit']?></span>
                                    </label>
                                </div>
                                <div class="checkoutCreditField">
                                    <div class="checkoutInputsCreditField">
                                        <label for="checkoutCreditName"><?=$GLOBALS['text']['checkoutInputName']?></label>
                                        <input type="text" id="checkoutCreditName">
                                    </div>
                                    <div class="checkoutInputsCreditField">
                                        <label for="checkoutCardNumber"><?=$GLOBALS['text']['checkoutInputNumber']?></label>
                                        <input type="text" id="checkoutCardNumber">
                                    </div>
                                    <div class="checkoutInputsCreditFieldRow">
                                        <div class="checkoutInputLeftField">
                                            <label for="checkoutCardDate"><?=$GLOBALS['text']['checkoutInputExpire']?></label>
                                            <input type="text" id="checkoutCardDate">
                                        </div>
                                        <div class="checkoutInputRightField">
                                            <label for="checkoutCardCode">CVC/CVV</label>
                                            <input type="text" id="checkoutCardCode">
                                        </div>
                                    </div>
                                    <div class="checkoutCheckboxCreditField">
                                        <input id="creditCheckbox" type="checkbox">
                                        <label for="creditCheckbox"><?=$GLOBALS['text']['checkoutCheckbox']?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="otherField">
                                <input id="other" type="radio" name="other">
                                <label for="other">
                                    <img src="/images/creditIcon.png" alt="">
                                    <span><?=$GLOBALS['text']['checkoutOther']?></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="checkoutInputsSecondField">
                    <span><?=$GLOBALS['text']['checkoutOrderDetalis']?></span>
                    <div class="checkoutDetalisCoursesField">
                        <?php if (!empty($lessons)){ foreach ($lessons as $lesson){ ?>
                            <div class="courseManualPriceField">
                                <div class="courseManualPriceFieldInfo">
                                    <img src="/<?=$lesson['img']?>" alt="">
                                    <span><?=$lesson['lesson_name']?></span>
                                </div>
                                <div class="courseManualPriceFieldPay"><?=$lesson['price']?> AMD</div>
                            </div>
                        <?php }} ?>
                    </div>
                </div>
            </div>
            <div class="checkoutInputsSectionRightField">
                <div class="checkoutTotalFieldInfo">
                    <div class="checkoutTotalFieldInfoTop">
                        <div class="checkoutCourseSumPrice">
                            <span class="sumTitle"><?=$GLOBALS['text']['checkoutSummary']?>:</span>
                            <?php if (!empty($lessons)){
                                $total_count = 0;
                                foreach ($lessons as $lesson){
                                    $total_count += $lesson['price'];
                            }} ?>
                            <span class="sumPriceAll"><?=$total_count?> AMD</span>
                        </div>
                        <p><?=$GLOBALS['text']['checkoutTermsText']?> <a href=""><?=$GLOBALS['text']['checkoutTerms']?></a></p>
                    </div>
                    <div class="checkoutTotalFieldInfoBottom">
                        <button>
                            <img src="/images/sumBtnCheckout.png" alt="">
                            <span><?=$GLOBALS['text']['checkoutCompleteBtn']?></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="summary" id="summary">
        <span class="sumTitle"><?=$GLOBALS['text']['checkoutSummary']?>:</span>
        <div class="summaryText">
            <?php if (!empty($lessons)){
                $total_count = 0;
                foreach ($lessons as $lesson){
                    $total_count += $lesson['price'];
                }} ?>
            <span class="sumPriceAll"><?=$total_count?> AMD</span>
            <p><?=$GLOBALS['text']['checkoutTermsText']?> <a href=""><?=$GLOBALS['text']['checkoutTerms']?></a></p>
            <div class="checkoutTotalFieldInfoBottom">
                <button>
                    <img src="/images/sumBtnCheckout.png" alt="">
                    <span><?=$GLOBALS['text']['checkoutCompleteBtn']?></span>
                </button>
            </div>
        </div>
    </div>
</div>
<?php $this->registerJsFile('@web/js/checkout.js', ['defer' => true]); ?>
