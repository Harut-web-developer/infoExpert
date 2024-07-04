<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/security.css?v=1');
?>

<div class="securitySection">
    <div class="securityFields">
        <form class="securityMainField" action="" method="post">
            <span class="securityTitle"><?=$GLOBALS['text']['securityTitle']?></span>
<!--            <div class="emailField">-->
<!--                <label for="emailSecurity">--><?php //=$GLOBALS['text']['inputEmail']?><!--</label>-->
<!--                <div class="emailInput">-->
<!--                    <input type="text" id="emailSecurity" value="--><?php //=$email_value?><!--">-->
<!--                    <img class="modalOpenBtn" src="/images/pencilModal.png" alt="">-->
<!--                </div>-->
<!--            </div>-->
            <div class="passwordField">
                <div class="passwordInput">
                    <label for="passwordLabel"><?= $GLOBALS['text']['inputPassword'] ?></label>
                    <input type="password" id="passwordLabel" placeholder="<?= $GLOBALS['text']['inputCurrentPassword'] ?>" name="currentPassword" required>
                    <?php if (Yii::$app->session->hasFlash('oldIncorrectPassword')): ?>
                        <div style="color: red;">
                            <?= Yii::$app->session->getFlash('oldIncorrectPassword') ?>
                        </div>
                    <?php endif; ?>
                </div>
                <input type="password" placeholder="<?= $GLOBALS['text']['inputNewPassword'] ?>" name="newPassword" required>
                <?php if (Yii::$app->session->hasFlash('newIncorrectPassword')): ?>
                    <div style="color: red;">
                        <?= Yii::$app->session->getFlash('newIncorrectPassword') ?>
                    </div>
                <?php endif; ?>
                <input type="password" placeholder="<?= $GLOBALS['text']['inputConfirmPassword'] ?>" name="confirmPassword" required>
                <?php if (Yii::$app->session->hasFlash('newIncorrectPassword')): ?>
                    <div style="color: red;">
                        <?= Yii::$app->session->getFlash('newIncorrectPassword') ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php if (Yii::$app->session->hasFlash('failedChangePassword')): ?>
                <div style="color: red;">
                    <?= Yii::$app->session->getFlash('failedChangePassword') ?>
                </div>
            <?php endif; ?>
            <div class="buttonField">
                <button type="submit">
                    <img src="/images/securityBtn.png" alt="">
                    <span><?=$GLOBALS['text']['btnChangePassword']?></span>
                </button>
            </div>
        </form>
    </div>
<!--    <div class="securityModal">-->
<!--        <div class="securityContentModal">-->
<!--            <form class="modalMainField">-->
<!--                <span class="modalTitle">--><?php //=$GLOBALS['text']['securityTitle']?><!--</span>-->
<!--                <div class="modalInputField">-->
<!--                    <div class="modalEmailField">-->
<!--                        <label for="modalEmail">--><?php //=$GLOBALS['text']['inputEmail']?><!--</label>-->
<!--                        <input type="text" id="modalEmail" value="--><?php //=$email_value?><!--">-->
<!--                    </div>-->
<!--                    <div class="modalPasswordField">-->
<!--                        <label for="modalPassword">--><?php //=$GLOBALS['text']['inputPassword']?><!--</label>-->
<!--                        <input type="password" id="modalPassword" value="">-->
<!--                        <img class="modalEye" src="/images/signEyeClose.png" alt="">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="modalBtnField">-->
<!--                    <button>-->
<!--                        <img src="/images/securityBtn.png" alt="">-->
<!--                        <span>--><?php //=$GLOBALS['text']['btnSave']?><!--</span>-->
<!--                    </button>-->
<!--                </div>-->
<!--            </form>-->
<!--        </div>-->
<!--    </div>-->
</div>
