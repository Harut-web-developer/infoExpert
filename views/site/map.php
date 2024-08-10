<?php
$this->registerCssFile('@web/css/site-map.css?v=1');
?>
<div class="mapField">
    <div class="mapFieldSection">
        <span><?= $GLOBALS['text']['siteMap']?></span>
        <div class="mapSection">
            <div class="leftSection">
                <div class="siteRow">
                    <div class="mainFieldSite">
                        <img src="/images/arrowSite.png" alt="">
                        <a href="/about"><?=$GLOBALS['text']['__about__']?></a>
                    </div>
                </div>
                <div class="siteRow">
                    <div class="mainFieldSite">
                        <img src="/images/arrowSite.png" alt="">
                        <a href="/alumni/index"><?=$GLOBALS['text']['headerAlumni']?></a>
                    </div>
                </div>
                <div class="siteRow">
                    <div class="mainFieldSite">
                        <img src="/images/arrowSite.png" alt="">
                        <a href="/courses/index"><?=$GLOBALS['text']['__courses__']?></a>
                    </div>
                    <div class="subSiteField">
                        <?php
                        if (!empty($lessons)){foreach ($lessons as $lesson){?>
                            <a href="/lesson/<?=$lesson['url']?>"><?=$lesson['lesson_name']?></a>
                        <?php }} ?>
                    </div>
                </div>
                <div class="siteRow">
                    <div class="mainFieldSite">
                        <img src="/images/arrowSite.png" alt="">
                        <a href="/faq"><?= $GLOBALS['text']['__faq__'] ?></a>
                    </div>
                </div>
                <div class="siteRow">
                    <div class="mainFieldSite">
                        <img src="/images/arrowSite.png" alt="">
                        <a href="/testimonials"><?= $GLOBALS['text']['__testimonials__'] ?></a>
                    </div>
                </div>
            </div>
            <div class="rightSection">
                <div class="siteRow">
                    <div class="mainFieldSite">
                        <img src="/images/arrowSite.png" alt="">
                        <a href="/blog"><?= $GLOBALS['text']['__blog__'] ?></a>
                    </div>
                </div>
                <div class="siteRow">
                    <div class="mainFieldSite">
                        <img src="/images/arrowSite.png" alt="">
                        <a href="/contact-us/index"><?= $GLOBALS['text']['__contact__'] ?></a>
                    </div>
                </div>
                <div class="siteRow">
                    <div class="mainFieldSite">
                        <img src="/images/arrowSite.png" alt="">
                        <a href="/apply-now/index"><?= $GLOBALS['text']['__applynow__'] ?></a>
                    </div>
                </div>
                <div class="siteRow">
                    <div class="mainFieldSite">
                        <img src="/images/arrowSite.png" alt="">
                        <a href="/methodology"><?= $GLOBALS['text']['footerMethodOur'] ?></a>
                    </div>
                </div>
                <div class="siteRow">
                    <div class="mainFieldSite">
                        <img src="/images/arrowSite.png" alt="">
                        <a href="/quize/index"><?= $GLOBALS['text']['footerRecQuize'] ?></a>
                    </div>
                </div>
                <div class="siteRow">
                    <div class="mainFieldSite">
                        <img src="/images/arrowSite.png" alt="">
                        <a href="<?= Yii::$app->urlManager->createUrl(['site/policy']) ?>"><?= $GLOBALS['text']['footerPolicy'] ?></a>
                    </div>
                </div>
                <div class="siteRow">
                    <div class="mainFieldSite">
                        <img src="/images/arrowSite.png" alt="">
                        <a href="terms-and-conditions"><?= $GLOBALS['text']['footerTerms'] ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
