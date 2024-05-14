<!--<div class="about">-->
<!--    <div class="aboutContent">-->
<!--        <div class="aboutContnetTitle">-->
<!--            <img class="backButton" src="/images/backButton.png" alt="">-->
<!--            <span>--><?php //=$GLOBALS['text']['aboutTitle']?><!--</span>-->
<!--        </div>-->
<!--        <div class="aboutContnetmain">-->
<!--            <div class="leftContent">-->
<!--                <div class="leftContentAboutTextTop">-->
<!--                    <div class="historyContent">-->
<!--                        <div class="mainTextLeftContent">-->
<!--                            <p>--><?php //=$GLOBALS['text']['aboutFirstText']?><!--</p>-->
<!--                        </div>-->
<!--                        <div class="blogContent"></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="leftContentAboutTextBottom">-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="rightContent">-->
<!--                <div class="rightContentTop">-->
<!--                    <div class="rightContentMainText">-->
<!--                        <p>--><?php //=$GLOBALS['text']['aboutSecondText']?><!--</p>-->
<!--                    </div>-->
<!--                    </div>-->
<!--                    <div class="rightContentBottom">-->
<!--                        <div class="rightContentInfoShapeLeft">-->
<!--                            <div class="rightContentInfoShapeRightValue">-->
<!---->
<!--                            </div>-->
<!--                            <div class="shapeLeft">-->
<!--                                <div class="mainLeftShapeField">-->
<!--                                    <img src="/images/aboutImg_1.png" alt="">-->
<!--                                    <div class="mainLeftShapeFieldTexts">-->
                                        <span class="shapeFirstTitle"><?=$GLOBALS['text']['aboutUnrestricted']?></span>
                                        <span class="shapeSecondTitle"><?=$GLOBALS['text']['aboutSolution']?></span>
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="shapeLeft">-->
<!--                                <div class="mainLeftShapeField">-->
<!--                                    <img src="/images/aboutImg_2.png" alt="">-->
<!--                                    <div class="mainLeftShapeOther">-->
<!--                                        <span>--><?php //=$GLOBALS['text']['aboutTeam']?><!--</span>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="shapeLeft">-->
<!--                                <div class="mainLeftShapeField">-->
<!--                                    <img src="/images/aboutImg_3.png" alt="">-->
<!--                                    <div class="mainLeftShapeOther">-->
<!--                                        <div class="spanText">--><?php //=$GLOBALS['text']['aboutMarket']?><!--</div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="rightContentInfoShapeRight">-->
<!---->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->


<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
$this->registerCssFile('@web/css/about.css');

?>
<div class="about">
    <div class="aboutContent">
        <div class="aboutContnetTitle">
            <img class="backButton" src="/images/backButton.png" alt="">
            <span><?=$GLOBALS['text']['aboutTitle']?></span>
        </div>
        <div class="aboutContnetmain">
            <div class="leftContent">
                <div class="leftContentAboutTextTop">
                    <span><?=$GLOBALS['text']['aboutOurHistory']?></span>
                    <div class="historyContent">
                        <div class="mainTextLeftContent">
                            <p><?=$GLOBALS['text']['aboutFirstText']?></p>
                        </div>
                        <div class="blogContent"></div>
                    </div>
                </div>
                <div class="leftContentAboutTextBottom">

                </div>
            </div>
            <div class="rightContent">
                <div class="rightContentTop">
                    <span>OUR VISION</span>
                    <div class="rightContentMainText">
                        <p><?=$GLOBALS['text']['aboutSecondText']?></p>
                    </div>
                    </div>
                    <div class="rightContentBottom">
                        <div class="rightContentInfoShapeLeft">
                            <div class="rightContentInfoShapeRightValue">

                            </div>
                            <div class="shapeLeft">
                                <div class="mainLeftShapeField">
                                    <img src="/images/aboutImg_1.png" alt="">
                                    <div class="mainLeftShapeFieldTexts">
                                        <span class="shapeFirstTitle"><?=$GLOBALS['text']['aboutUnrestricted']?></span>
                                        <span class="shapeSecondTitle"><?=$GLOBALS['text']['aboutSolution']?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="shapeLeft">
                                <div class="mainLeftShapeField">
                                    <img src="/images/aboutImg_2.png" alt="">
                                    <div class="mainLeftShapeOther">
                                        <span><?=$GLOBALS['text']['aboutTeam']?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="shapeLeft">
                                <div class="mainLeftShapeField">
                                    <img src="/images/aboutImg_3.png" alt="">
                                    <div class="mainLeftShapeOther">
                                        <div class="spanText"><?=$GLOBALS['text']['aboutMarket']?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rightContentInfoShapeRight">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function blog() {
        return  '<div class="shapeRight">'+
                    '<div class="shapeRightMainField top1">'+
                        '<img src="/images/aboutImg_4.png" alt="">'+
                        '<div class="shapeRightMainFieldText">'+
                            '<span class="rightShapeTextBig">' + <?php echo json_encode($GLOBALS['text']['aboutLong']); ?> + '</span>' +
                            '<span class="rightShapeTextSmall">' + <?php echo json_encode($GLOBALS['text']['aboutCollaboration']); ?> + '</span>' +
                        '</div>'+
                    '</div>'+
                '</div>'+
                '<div class="shapeRight">'+
                    '<div class="shapeRightMainField bottom1">'+
                        '<img src="/images/aboutImg_5.png" alt="">'+
                        '<div class="shapeRightBottomText">'+
                            '<span class="rightShapeBottomTextBig">' + <?php echo json_encode($GLOBALS['text']['aboutIndividual']); ?> + '</span>' +
                            '<span class="rightShapeBottomTextSmall">' + <?php echo json_encode($GLOBALS['text']['aboutEach']); ?> + '</span>' +
                        '</div>'+
                    '</div>'+
                '</div>';

    }
    function blog1() {
        return  `<span>OUR VALUES</span>`+
            `<div class="mainTextLeftContent">`+
            `<p><?=$GLOBALS['text']['aboutFirstBottomText']?> </p>`+
            `</div>`;
    }
    $(document).ready(function() {
        if ($(window).width() > 1100) {
            $('.rightContentInfoShapeRight').append(blog());
            $('.leftContentAboutTextBottom').append(blog1());
        }
        if ($(window).width() <= 1100) {
            $('.blogContent').append(blog());
            $('.rightContentInfoShapeRightValue').append(blog1());
        }
    });
</script>