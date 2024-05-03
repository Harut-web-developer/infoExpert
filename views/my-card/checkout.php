<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/my-card.css');
?>
<div class="checkoutField">
    <div class="checkoutFieldSection">
        <div class="checkoutTitleField">
            <div>Checkout</div>
            <span onclick="window.location = document.referrer">Cancel</span>
        </div>
        <div class="checkoutInputsSectionField">
            <div class="checkoutInputsSectionLeftField">
                <div class="checkoutInputsFirstField">
                    <span>Payment method</span>
                    <div class="checkoutInputsRadioField">
                        <div class="checkoutCreditOtherField">
                            <div class="creditField">
                                <div class="mainCreditField">
                                    <input id="credit" type="radio" name="credit">
                                    <label for="credit">
                                        <img src="/images/creditIcon.png" alt="">
                                        <span>Credit/Debit Card</span>
                                    </label>
                                </div>
                                <div class="checkoutCreditField">
                                    <div class="checkoutInputsCreditField">
                                        <label for="checkoutCreditName">Name on card</label>
                                        <input type="text" id="checkoutCreditName">
                                    </div>
                                    <div class="checkoutInputsCreditField">
                                        <label for="checkoutCardNumber">Card number</label>
                                        <input type="text" id="checkoutCardNumber">
                                    </div>
                                    <div class="checkoutInputsCreditFieldRow">
                                        <div class="checkoutInputLeftField">
                                            <label for="checkoutCardDate">Expiry date</label>
                                            <input type="text" id="checkoutCardDate">
                                        </div>
                                        <div class="checkoutInputRightField">
                                            <label for="checkoutCardCode">CVC/CVV</label>
                                            <input type="text" id="checkoutCardCode">
                                        </div>
                                    </div>
                                    <div class="checkoutCheckboxCreditField">
                                        <input id="creditCheckbox" type="checkbox">
                                        <label for="creditCheckbox">Securely save this card for my later purchase</label>
                                    </div>
                                </div>
                            </div>
                            <div class="otherField">
                                <input id="other" type="radio" name="other">
                                <label for="other">
                                    <img src="/images/creditIcon.png" alt="">
                                    <span>Other</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="checkoutInputsSecondField">
                    <span>Order Details</span>
                    <div class="checkoutDetalisCoursesField">
                        <div class="courseManualPriceField">
                            <div class="courseManualPriceFieldInfo">
                                <img src="/images/creditminiimg.png" alt="">
                                <span>1C: Accounting 8.3</span>
                            </div>
                            <div class="courseManualPriceFieldPay">xxxxx AMD</div>
                        </div>
                        <div class="courseManualPriceField">
                            <div class="courseManualPriceFieldInfo">
                                <img src="/images/creditminiimg.png" alt="">
                                <span>1C: and Accounting for Beginners</span>
                            </div>
                            <div class="courseManualPriceFieldPay">xxxxx AMD</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="checkoutInputsSectionRightField">
                <div class="checkoutTotalFieldInfo">
                    <div class="checkoutTotalFieldInfoTop">
                        <div class="checkoutCourseSumPrice">
                            <span class="sumTitle">Summary:</span>
                            <span class="sumPriceAll">xxxx AMD</span>
                        </div>
                        <p>By completing your purchase you agree to these <a href="">Terms of service</a></p>
                    </div>
                    <div class="checkoutTotalFieldInfoBottom">
                        <button>
                            <img src="/images/sumBtnCheckout.png" alt="">
                            <span>Complete Checkout</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->registerJsFile('@web/js/checkout.js', ['defer' => true]); ?>
