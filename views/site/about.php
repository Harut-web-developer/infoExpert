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
    if (window.innerWidth > 480 && window.innerWidth <= 530){
        $('.about').css('height', '1120px');
    }
    if (window.innerWidth > 420 && window.innerWidth <= 480){
        $('.about').css('height', '1120px');
        $('.aboutLangAm').css('height', '1180px');
        $('.aboutLangRu').css('height', '1150px');

    }
    if (window.innerWidth > 400 && window.innerWidth <= 420){
        $('.about').css('height', '1150px');
        $('.aboutLangAm').css('height', '1200px');
        $('.aboutLangRu').css('height', '1180px');

    }
    if (window.innerWidth > 360 &&  window.innerWidth <= 400){
        $('.about').css('height', '1150px');
        $('.aboutLangAm').css('height', '1200px');
        $('.aboutLangRu').css('height', '1200px');
    }
    if (window.innerWidth > 360 &&  window.innerWidth <= 370){
        $('.aboutLangAm').css('height', '1250px');
        $('.aboutLangRu').css('height', '1250px');
    }
    if (window.innerWidth > 340 && window.innerWidth <= 360){
        $('.about').css('height', '1200px');
        $('.aboutLangAm').css('height', '1300px');
        $('.aboutLangRu').css('height', '1270px');
    }
    if (window.innerWidth <= 340){
        $('.about').css('height', '1250px');
        $('.aboutLangAm').css('height', '1350px');
        $('.aboutLangRu').css('height', '1300px');
    }
    console.log(window.innerWidth)
    $(".titleColapse").click(function() {
        var panel = $(this).next(".mainTextLeftContentBottom");
        $(".mainTextLeftContentBottom").not(panel).css("display", "none");
        $(".coursesAndChooseM").find('.arrowDown').css('transform', 'rotate(0deg)');
        panel.toggle();
        $(this).find('.arrowDown').css('transform', panel.is(":visible") ? 'rotate(180deg)' : 'rotate(0deg)');
        if (window.innerWidth > 630 && window.innerWidth <= 700){
            $('.about').css('height', panel.is(":visible") ? '1600px' : '1050px');
            $('.aboutLangRu').css('height', panel.is(":visible") ? '1550px' : '1050px');
            $('.aboutLangAm').css('height', panel.is(":visible") ? '1550px' : '1050px');
        }else if (window.innerWidth > 550 && window.innerWidth <= 630){
            $('.about').css('height', panel.is(":visible") ? '1520px' : '1040px');
            $('.aboutLangRu').css('height', panel.is(":visible") ? '1620px' : '1070px');
            $('.aboutLangAm').css('height', panel.is(":visible") ? '1600px' : '1070px');
        }else if (window.innerWidth > 500 && window.innerWidth <= 550){
            $('.about').css('height', panel.is(":visible") ? '1600px' : '1100px');
            $('.aboutLangRu').css('height', panel.is(":visible") ? '1720px' : '1150px');
            $('.aboutLangAm').css('height', panel.is(":visible") ? '1700px' : '1150px');
        }else if (window.innerWidth > 480 && window.innerWidth <= 500){
            $('.about').css('height', panel.is(":visible") ? '1700px' : '1100px');
            $('.aboutLangRu').css('height', panel.is(":visible") ? '1750px' : '1150px');
            $('.aboutLangAm').css('height', panel.is(":visible") ? '1750px' : '1150px');
        }else if (window.innerWidth > 420 && window.innerWidth <= 480){
            $('.about').css('height', panel.is(":visible") ? '1740' : '1120px');
            $('.aboutLangRu').css('height', panel.is(":visible") ? '1820px' : '1180px');
            $('.aboutLangAm').css('height', panel.is(":visible") ? '1800px' : '1200px');
        }else if (window.innerWidth > 380 && window.innerWidth <= 420){
            $('.about').css('height', panel.is(":visible") ? '1840px' : '1150');
            $('.aboutLangRu').css('height', panel.is(":visible") ? '1900px' : '1200px');
            $('.aboutLangAm').css('height', panel.is(":visible") ? '1900px' : '1200px');
        }else if (window.innerWidth > 350 && window.innerWidth <= 380){
            $('.about').css('height', panel.is(":visible") ? '1900' : '1200');
            $('.aboutLangRu').css('height', panel.is(":visible") ? '2000px' : '1230px');
            $('.aboutLangAm').css('height', panel.is(":visible") ? '2000px' : '1250px');
        }else if (window.innerWidth <= 350){
            $('.about').css('height', panel.is(":visible") ? '2000' : '1250');
            $('.aboutLangRu').css('height', panel.is(":visible") ? '2150px' : '1300px');
            $('.aboutLangAm').css('height', panel.is(":visible") ? '2050px' : '1300px');
        }
    });
</script>