<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/mainTablet.css">
</head>
<body>
<?php $this->beginBody() ?>
<header>
    <div class="tabletHeader">
        <div class="mainHeader">
            <div class="mainField">
                <div class="logoTabletField">
                    <a href="/"><img src="/images/logo.png" alt=""></a>
                </div>
                <div class="tabletMenuField">
                    <button>
                        <img src="/images/tabletMenuBtn.png" alt="">
                        <span>GET A CALL BACK</span>
                    </button>
                    <img class="tabletMenuIcon" src="/images/menuLineBar.png" alt="">
                </div>
            </div>
        </div>
        <div class="menuTabletHeader">
            <div class="menuPersonInfo">
                <div class="personInfoField">
<!--                    --><?php
//                    $session = Yii::$app->session;
//                    if(isset($session)){?>
                    <div class="personInfoCircle">HH</div>
                    <div class="personSignOrInfo">
                        <div class="personNameField">
                            <span class="personName">Hi, Hovsepyan Harutyun</span>
                            <span class="personGreetings">Welcome back</span>
                        </div>
                        <img class="tabletUserProfileMenu" src="/images/menuRightArrow.png" alt="">
                    </div>
<!--                    --><?php //}else{ ?>
<!--                    <div class="personInfoCircle"></div>-->
<!--                    <div class="personSignOrInfo">-->
<!--                        <div class="personSignField">-->
<!--                            <a href="">sign in</a>-->
<!--                            <span>or</span>-->
<!--                            <a href="">sign up</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    --><?php //}?>
                </div>
            </div>
            <div class="tabletMenuNavbar">
                <div class="tabletMenuNavField">
                    <ul>
                        <li class="tabletCoursesList">
                            <a href="">My courses</a>
                            <div class="tabletCoursesUnderline"></div>
                        </li>
                        <li class="tabletAllCoursesList">
                            <span>All courses</span>
                            <img src="/images/menuRightArrow.png" alt="">
                        </li>
                        <li><a href="">About IEA</a></li>
                        <li><a href="">Our methodology</a></li>
                        <li><a href="">Testimonials</a></li>
                        <li><a href="">Blog</a></li>
                        <li><a href="">FAQ</a></li>
                        <li><a href="">Alumni</a></li>
                        <li><a href="">Recommendative quize</a></li>
                        <li><a href="">Contact us</a></li>
                    </ul>
                    <div class="searchFlagField">
                        <div class="tabletSearchField">
                            <button class="btn-searchTablet"><img src="/images/search.png" alt=""></button>
                            <input type="text" class="input-searchTablet" placeholder="Type to Search...">
                        </div>
                        <div class="tabletFlagField">
                            <img src="/images/armflag.png" alt="">
                            <img src="/images/usaflag.png" alt="">
                            <img src="/images/ruflag.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="personMainMenu">
            <div class="menuPersonInfo">
                <div class="tabletPersonMenuField">
                    <img class="backMainMenu" src="/images/menuLeftArrow.png" alt="">
                    <span>Menu</span>
                </div>
            </div>
            <div class="tabletMenuNavbar">
                <ul class="tabletProfileMenuField">
                    <li><a href="">Profile</a></li>
                    <li><a href="">Wishlist</a></li>
                    <li><a href="">My achievements</a></li>
                    <li><a href="">My card</a></li>
                    <li><a href="">Edit profile</a></li>
                    <li><a href="">Payment methods</a></li>
                    <li><a href="">Log out</a></li>
                </ul>
            </div>
        </div>
        <div class="personCoursesMenuList">
            <div class="menuPersonInfo">
                <div class="tabletPersonMenuField">
                    <img class="backMainMenuCourses" src="/images/menuLeftArrow.png" alt="">
                    <span>Menu</span>
                </div>
            </div>
            <div class="tabletMenuNavbar">
                <ul class="tabletProfileCoursesField">
                    <li><a href="">1C: and Accounting for Beginners</a></li>
                    <li><a href="">1C: Accounting 8.3</a></li>
                    <li><a href="">1C: Payroll and personnel management </a></li>
                    <li><a href="">Trade Management: Marketing,Sales BITRIX / CRM</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="header">
        <div class="menuSection">
            <div class="logoSection">
                <div class="logo">
                    <a href="/"><img src="/images/logo.png" alt=""></a>
                </div>
                <div class="icons">
                    <div class="search-box">
                        <button class="btn-search"><img src="/images/search.png" alt=""></button>
                        <input type="text" class="input-search" placeholder="Type to Search...">
                    </div>
<!--                    <img class="searchIcons" src="/images/search.png" alt="">-->
                    <a href="/user-profile/index"><img src="/images/user.png" alt=""></a>
                    <div class="flagFields">
                        <img class="mainFlag" src="/images/armflag.png" alt="">
                        <ul class="otherFlags">
                            <li><img class="armFlag" src="/images/armflag.png" alt=""></li>
                            <li><img class="usaFlag" src="/images/usaflag.png" alt=""></li>
                            <li><img class="ruFlag" src="/images/ruflag.png" alt=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu">
                <ul>
                    <li class="dropDownLi menuAboutDropDown">
                        <span class="menuAbout">ABOUT</span>
                        <div class="dropDownAbout">
                            <ul>
                                <li><a href="/site/about">Who we are</a></li>
                                <li><a href="/alumni/index">Alumni</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropDownLi menuCoursesDropDown">
                        <span class="menuCourses">COURSES</span>
                        <div class="dropDownCources">
                            <ul>
                                <li><a href="">1C and Accounting fir begginers</a></li>
                                <li><a href="/personel-management/index">1C: Payroll and personel management</a></li>
                                <li><a href="">1C: Accounting 8.3</a></li>
                                <li><a href="">Trade management: markeing, sales, BITRIX / CRM</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="whiteLi"><a href="">FAQ</a></li>
                    <li class="whiteLi"><a href="">TESTIMONIALS</a></li>
                    <?php if ($_SERVER['REQUEST_URI'] == '/'){ ?>
                        <li class="whiteLi"><a href="#section01"">BLOG</a></li>
                    <?php } else { ?>
                        <li class="whiteLi"><a href="/blog/index">BLOG</a></li>
                    <?php } ?>
                    <li class="whiteLi"><a href="/contact-us/index">CONTACT US</a></li>
                    <li class="whiteLi"><a href="/apply-now/index">APPLY NOW</a></li>
                    <li>
                        <button type="button" class="btnBack">
                            <img src="/images/circle.png" alt="">
                            <span>GET A CALL BACK</span>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<main id="main" class="flex-shrink-0" role="main">
    <?= $content ?>
</main>

<footer class="footerBackground">
    <div class="sectionFooter">
        <div class="imagesFooterFields">
            <div class="leftFooterBg">
                <div class="footerFields">
                    <div class="footerLogo">
                        <img src="/images/footerLogo.png" alt="">
                    </div>
                    <div class="leftFooterBlock">
                        <div class="footerMenu">
                            <div class="leftMenuFooter">
                                <ul>
                                    <li><a href="">About IEA</a></li>
                                    <li><a href="">Our Methodology</a></li>
                                    <li><a href="">Contact Us</a></li>
                                    <li><a href="">Testimonials</a></li>
                                    <li><a href="">FAQ</a></li>
                                </ul>
                            </div>
                            <div class="rightMenuFooter">
                                <ul>
                                    <li><a href="">Courses</a></li>
                                    <li><a href="">Blog</a></li>
                                    <li><a href="">Recommendative Quize</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="footerConn">
                            <span>LET`S STAY CONNECTED</span>
                        </div>
                        <div class="footerBtn">
                            <input type="text" name="leftEmail" placeholder="Your Email">
                            <button>Connect</button>
                        </div>
                    </div>
                    <div class="footerSocial">
                        <a href=""><img src="/images/in.png" alt=""></a>
                        <a class="linkInstagram" href=""><img src="/images/instagram.png" alt=""></a>
                        <a href=""><img src="/images/facebook.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="rightFooterBg">
                <form class="formMail" action="">
                    <div class="formName">
                        <span>QUIZE</span>
                    </div>
                    <div class="inputsMail" >
                        <input type="text" name="name" placeholder="Name/Surname">
                        <input type="text" name="phone" placeholder="Phone number">
                        <input type="text"  name="email" placeholder="Email">
                    </div>
                    <div class="formContinue">
                        <button>Continue</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="paypalFooter">
            <span class="copyTextFooter">
                &copy; Copyright 2023 - Infoexpert Academy
            </span>
            <div class="policyText">
                <ul>
                    <li><a href="">Privecy Policy</a></li>
                    <li><a href="">Terms & Conditions</a></li>
                </ul>
            </div>
            <div class="payLogoFooter">
                <img src="/images/visaCardLogo.png" alt="">
                <img src="/images/masterCardLogo.png" alt="">
            </div>
        </div>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
