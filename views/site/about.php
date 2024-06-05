<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
$this->registerCssFile('@web/css/about.css');
?>
<?php
$language = $_COOKIE['language'];
$class1 = '';
$class2 = '';
$class3 = '';
$class4 = '';
$class5 = '';
$class6 = '';

if ($language == 'en') {
} elseif ($language == 'am') {
    $class1 = 'mainLeftShapeFieldAm';
    $class2 = 'mainLeftShapeFieldTextsAm';
    $class3 = 'shapeSecondTitleAm';
    $class4 = 'shapeRightMainFieldTextAm';
    $class5 = 'shapeRightMainFieldAm';
    $class6 = 'aboutLangAm';
} elseif ($language == 'ru') {
    $class1 = 'mainLeftShapeFieldAm';
    $class2 = 'mainLeftShapeFieldTextsAm';
    $class3 = 'shapeSecondTitleAm';
    $class4 = 'shapeRightMainFieldTextAm';
    $class5 = 'shapeRightMainFieldAm';
    $class6 = 'aboutLangRu';
}
?>
<div class="about <?php echo $class6; ?>">
    <div class="aboutContent">
        <span class="aboutContnetTitle">
            <img class="ellipseButton" src="/images/Ellipse2.png" alt="">
            <img class="backButton" src="/images/backButton.png" alt="">
            <?=$GLOBALS['text']['aboutTitle']?>
        </span>
        <div class="aboutContnetmain">
            <div class="leftContent">
                <div class="leftContentAboutTextTop">
                    <span><?=$GLOBALS['text']['aboutOurHistory']?></span>
                    <div class="historyContent">
                        <div class="mainTextLeftContent">
                            <p><?=$GLOBALS['text']['aboutFirstText']?></p>
                        </div>
                        <div class="blogContent">
                            <div class="blogShapContent">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="leftContentAboutTextBottom">

                </div>
            </div>
            <div class="rightContent ">
                <div class="rightContentTop">
                    <span><?=$GLOBALS['text']['aboutWhyChoose']?></span>
                    <div class="rightContentMainText">
                        <p><?=$GLOBALS['text']['aboutSecondText']?></p>
                    </div>
                    </div>
                    <div class="rightContentBottom">
                        <div class="rightContentInfoShapeLeft">
                            <div class="rightContentInfoShapeRightValue">

                            </div>
                        </div>
                        <div class="rightContentInfoShapeRight">

                        </div>
                    </div>
                </div>
            <div class="coursesAndChooseM">
                <div class="seeMore">
                    <div class="titleColapse title1">
                        <span><?=$GLOBALS['text']['aboutFirstBottomTextTitle']?></span>
                        <div>
                            <img class="arrowDown" src="/images/VectorAbout.png" alt="">
                            <img class="ellipse3" src="/images/Ellipse3.png" alt="">
                        </div>
                    </div>
                    <div class="mainTextLeftContentBottom">
                        <p><?=$GLOBALS['text']['aboutFirstBottomText']?></p>
                    </div>
                </div>
                <div class="seeMore">
                    <div class="titleColapse title2">
                        <span><?=$GLOBALS['text']['aboutWhyChoose']?></span>
                        <div>
                            <img class="arrowDown" src="/images/VectorAbout.png" alt="">
                            <img class="ellipse3" src="/images/Ellipse3.png" alt="">
                        </div>
                    </div>
                    <div class="mainTextLeftContentBottom">
                        <p><?=$GLOBALS['text']['aboutSecondText']?></p>
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
        return  '<div class="shapContentM">'+
                    '<div class="shapeRight">'+
                        '<div class="shapeRightMainField top1 <?php echo $class4; ?>">'+
                            '<img src="/images/aboutImg_4.png" alt="">'+
                            '<div class="shapeRightMainFieldText">'+
                                '<span class="rightShapeTextBig">' + <?php echo json_encode($GLOBALS['text']['aboutLong']); ?> + '</span>' +
                                '<span class="rightShapeTextSmall">' + <?php echo json_encode($GLOBALS['text']['aboutCollaboration']); ?> + '</span>' +
                            '</div>'+
                        '</div>'+
                    '</div>'+
                    '<div class="shapeRight">'+
                        '<div class="shapeRightMainField bottom1 <?php echo $class5; ?>">'+
                            '<img src="/images/aboutImg_5.png" alt="">'+
                            '<div class="shapeRightBottomText">'+
                                '<span class="rightShapeBottomTextBig">' + <?php echo json_encode($GLOBALS['text']['aboutIndividual']); ?> + '</span>' +
                                '<span class="rightShapeBottomTextSmall">' + <?php echo json_encode($GLOBALS['text']['aboutEach']); ?> + '</span>' +
                            '</div>'+
                        '</div>'+
                    '</div>'+
                '</div>';

    }
    function shap() {
        return `
        <div class="shapeLeft">
            <div class="mainLeftShapeField <?php echo $class1; ?>">
                <img src="/images/aboutImg_1.png" alt="">
                <div class="mainLeftShapeFieldTexts <?php echo $class2; ?>">
                    <span class="shapeFirstTitle"><?= $GLOBALS['text']['aboutUnrestricted'] ?></span>
                    <span class="shapeSecondTitle <?php echo $class3; ?>"><?= $GLOBALS['text']['aboutSolution'] ?></span>
                </div>
            </div>
        </div>
        <div class="shapeLeft">
            <div class="mainLeftShapeField <?php echo $class1; ?>">
                <img src="/images/aboutImg_2.png" alt="">
                <div class="mainLeftShapeOther <?php echo $class2; ?>">
                    <span class="txt222"><?= $GLOBALS['text']['aboutTeam'] ?></span>
                </div>
            </div>
        </div>
        <div class="shapeLeft">
            <div class="mainLeftShapeField <?php echo $class1; ?>">
                <img src="/images/aboutImg_3.png" alt="">
                <div class="mainLeftShapeOther <?php echo $class2; ?>">
                    <div class="spanText"><?= $GLOBALS['text']['aboutMarket'] ?></div>
                </div>
            </div>
        </div>
    `;
    }
    function blog1() {
        return  `<span><?=$GLOBALS['text']['aboutFirstBottomTextTitle']?></span>`+
            `<div class="mainTextLeftContentBottom">`+
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
        if ($(window).width() <= 700) {
            $('.blogShapContent').append(shap());
        }else {
            $('.rightContentInfoShapeLeft').append(shap());
        }
    });
    $(".titleColapse").click(function() {
        var panel = $(this).next(".mainTextLeftContentBottom");
        $(".mainTextLeftContentBottom").not(panel).css("display", "none");
        $(".coursesAndChooseM").find('.arrowDown').css('transform', 'rotate(0deg)');
        panel.toggle();
        $(this).find('.arrowDown').css('transform', panel.is(":visible") ? 'rotate(180deg)' : 'rotate(0deg)');
    });
</script>