<!-- Harut-->
<?php
$this->registerCssFile('@web/css/terms.css?v=1');
?>
<div class="termsSection">
    <div class="termsField">
        <div class="titlesField">
            <span><?= $GLOBALS['text']['termsTitle']?></span>
            <div class="userCreateTitleField">
                <a href="javascript:history.go(-1)" class="managmentBack">
                    <img class="ellipseButton" src="/images/Ellipse2.png" alt="">
                    <img class="backButton" src="/images/backButton.png" alt="">
                </a>
                <div><?= $GLOBALS['text']['termsTitle']?></div>
            </div>
        </div>
        <div class="contentField">
            <div class="imgField">
                <img src="/images/termsimg.png" alt="">
            </div>
            <div class="textField">
                <?= $GLOBALS['text']['termsTexts']?>
                <ul>
                    <?php if (!empty($lesson)){foreach ($lesson as $item){?>
                        <li><?=$item['lesson_name']?></li>
                    <?php }} ?>
                </ul>
            </div>
        </div>
    </div>
</div>
