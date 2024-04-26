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
            Who We Are
        </div>
        <div class="aboutContnetmain">
            <div class="leftContent">
                <div class="leftContentAboutTextTop">
                    <span>OUR HISTORY</span>
                    <div class="historyContent">
                        <div class="mainTextLeftContent">
                            <p>iNFOEXPERT was established in 1996 and has spent the last 27 years concentrating on the creation, promotion, and support of specialized business automation solutions based on 1C software. The 1C firm's official representative in Armenia with the right to franchise is the iNFOEXPERT company.</p>
                            <p>The company provides systems for resource management, partner relations, personnel management, document circulation, and accounting, automating every aspect of accounting and management procedures.
                                Every partner request is considered, compliance with the regulations in effect in the Republic of Armenia is supplied, and based on the unique characteristics of the industry, a package of customized business process automation solutions is developed.</p>
                            <p>Technology advances with time, as do company models and methods of operation, but what distinguishes iNFOEXPERT as a pioneer are its solutions that aid partners in becoming more competitive and thriving in a rapidly changing environment. Long-lasting and devoted partnership relationships are ensured by the experience gained through time and the capacity to provide swift and flexible solutions.</p>
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
                        <p>Every company endeavor is mostly about people...</p>
                        <p>Make sure your potential business partner, client, or consumer feels heard, valued, and never forgotten. A caring partnership is built on these.Whether it's speedy service or resolving a challenging issue, give every partner, customer, and client exactly the experience they desire. This is the trust formula, and with it, it is possible to gain loyalty and build long-term relationships. We combine the best business solutions with a vibrant culture and commitment to our community. "For 27 years, the expansion and success of our company have been powered by a distinctive culture of innovation and problem solving for the most renowned companies in Armenia."</p>
                        <p>Founder and CEO: A. Grigoryan</p>
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
                                        <span class="shapeFirstTitle">Unrestricted</span>
                                        <span class="shapeSecondTitle">Automated solutions</span>
                                    </div>
                                </div>
                            </div>
                            <div class="shapeLeft">
                                <div class="mainLeftShapeField">
                                    <img src="/images/aboutImg_2.png" alt="">
                                    <div class="mainLeftShapeOther">
                                        <span>Professional Team</span>
                                    </div>
                                </div>
                            </div>
                            <div class="shapeLeft">
                                <div class="mainLeftShapeField">
                                    <img src="/images/aboutImg_3.png" alt="">
                                    <div class="mainLeftShapeOther">
                                        <div class="spanText">27 years on the market</div>
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
                                '<span class="rightShapeTextBig">Long-term</span>'+
                                '<span class="rightShapeTextSmall">collaboration</span>'+
                            '</div>'+
                    '</div>'+
                '</div>'+
                '<div class="shapeRight">'+
                    '<div class="shapeRightMainField bottom1">'+
                        '<img src="/images/aboutImg_5.png" alt="">'+
                            '<div class="shapeRightBottomText">'+
                                '<span class="rightShapeBottomTextBig">Individual approach</span>'+
                                '<span class="rightShapeBottomTextSmall">to each partner</span>'+
                           '</div>'+
                    '</div>'+
                '</div>';

    }
    function blog1() {
        return  `<span>OUR VALUES</span>`+
                `<div class="mainTextLeftContent">`+
                    `<p>By considering a problem, ideas emerge that develop into solutions and improve the efficiency of future business operations. The values we uphold, carry, and believe in serve as the cornerstones of the process from idea to solution. </p>`+
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