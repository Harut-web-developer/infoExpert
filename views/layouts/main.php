<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\helpers\Url;
use yii\web\UrlManager;

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
                        <span><?= $GLOBALS['text']['__callback__'] ?></span>
                    </button>
                    <img class="tabletMenuIcon" src="/images/menuLineBar.png" alt="">
                </div>
            </div>
        </div>
        <div class="menuTabletHeader">
            <div class="menuPersonInfo">
                <div class="personInfoField">
                    <?php if(!empty(Yii::$app->user->identity)){
                        $first_letter = explode(' ' , Yii::$app->user->identity->username);
                        if (count($first_letter) > 1){?>
                            <div class="personInfoCircle"><?=$first_letter[0][0].' '.$first_letter[1][0]?></div>
                        <?php }else{?>
                            <div class="personInfoCircle"><?=$first_letter[0][0]?></div>
                        <?php }?>
                    <div class="personSignOrInfo">
                        <div class="personNameField">
                            <span class="personName"><?= $GLOBALS['text']['tabletHello']?>,  <?= Yii::$app->user->identity->username ?></span>
                            <span class="personGreetings"><?= $GLOBALS['text']['tabletWelcome']?></span>
                        </div>
                        <img class="tabletUserProfileMenu" src="/images/menuRightArrow.png" alt="">
                    </div>
                    <?php }else{ ?>
                    <div class="personInfoCircle"></div>
                    <div class="personSignOrInfo">
                        <div class="personSignField">
                            <a href="/login">sign in</a>
                            <span>or</span>
                            <a href="/signup">sign up</a>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
            <div class="tabletMenuNavbar">
                <div class="tabletMenuNavField">
                    <ul>
                        <?php if(!empty(Yii::$app->user->identity)){ ?>
                            <li class="tabletCoursesList">
                                <a href=""><?=$GLOBALS['text']['tabletMyCourse']?></a>
                                <div class="tabletCoursesUnderline"></div>
                            </li>
                        <?php }?>
                        <li class="tabletAllCoursesList">
                            <span><?= $GLOBALS['text']['tabletAllCourses']?></span>
                            <img src="/images/menuRightArrow.png" alt="">
                        </li>
                        <li><a href="/site/about"><?= $GLOBALS['text']['footerAbout']?></a></li>
                        <li><a href=""><?= $GLOBALS['text']['tabletMethodology']?></a></li>
                        <li><a href=""><?= $GLOBALS['text']['footerTestimonials']?></a></li>
                        <li><a href="/blog/index"><?= $GLOBALS['text']['footerBlog']?></a></li>
                        <li><a href=""><?= $GLOBALS['text']['footerFaq']?></a></li>
                        <li><a href="/alumni/index"><?= $GLOBALS['text']['headerAlumni']?></a></li>
                        <li><a href=""><?= $GLOBALS['text']['tabletRecQuize']?></a></li>
                        <li><a href="/contact-us/index"><?= $GLOBALS['text']['tabletContact']?></a></li>
                    </ul>
                    <div class="searchFlagField">
                        <div class="tabletSearchField">
                            <button class="btn-searchTablet"><img src="/images/search.png" alt=""></button>
                            <input type="text" class="input-searchTablet" placeholder="<?= $GLOBALS['text']['search']?>">
                        </div>
                        <div class="tabletFlagField">
                            <a href="<?= Url::to(['site/switch-language?lang=am']) ?>"><img src="/images/armflag.png" alt=""></a>
                            <a href="<?= Url::to(['site/switch-language?lang=en']) ?>"><img src="/images/usaflag.png" alt=""></a>
                            <a href="<?= Url::to(['site/switch-language?lang=ru']) ?>"><img src="/images/ruflag.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="personMainMenu">
            <div class="menuPersonInfo">
                <div class="tabletPersonMenuField">
                    <img class="backMainMenu" src="/images/menuLeftArrow.png" alt="">
                    <span><?=$GLOBALS['text']['tabletMenu']?></span>
                </div>
            </div>
            <div class="tabletMenuNavbar">
                <ul class="tabletProfileMenuField">
                    <li><a href="/user-profile/index"><?=$GLOBALS['text']['tabletProfile']?></a></li>
                    <li><a href="/wishlist/index"><?=$GLOBALS['text']['tabletWishlist']?></a></li>
                    <li><a href="/user-profile/achievements"><?=$GLOBALS['text']['tabletachievement']?></a></li>
                    <li><a href="/my-card/index"><?=$GLOBALS['text']['tabletCard']?></a></li>
                    <li><a href="/user-profile/achievements-edit"><?=$GLOBALS['text']['tabletEdit']?></a></li>
                    <li><a href="/my-card/checkout"><?=$GLOBALS['text']['tabletPayment']?></a></li>
                    <?php if(!empty(Yii::$app->user->identity)){ ?>
                        <li><a href="/logout"><?=$GLOBALS['text']['headerLogout']?></a></li>
                    <?php }?>
                </ul>
            </div>
        </div>
        <div class="personCoursesMenuList">
            <div class="menuPersonInfo">
                <div class="tabletPersonMenuField">
                    <img class="backMainMenuCourses" src="/images/menuLeftArrow.png" alt="">
                    <span><?=$GLOBALS['text']['tabletMenu']?></span>
                </div>
            </div>
            <div class="tabletMenuNavbar tabletMenuNavbarCourses">
                <ul class="tabletProfileCoursesField">
                    <li><a href=""><?=$GLOBALS['text']['headerCourseAccounting']?></a></li>
                    <li><a href=""><?=$GLOBALS['text']['headerAccounting']?></a></li>
                    <li><a href="/personel-management/index"><?=$GLOBALS['text']['headerCoursePayrol']?></a></li>
                    <li><a href=""><?=$GLOBALS['text']['headerMarketing']?></a></li>
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
                        <input type="text" class="input-search" placeholder="<?=$GLOBALS['text']['search']?>">
                    </div>
                    <div class="profileField">
                        <?php if (empty(Yii::$app->user->identity)){?>
                            <a href="/login"><img class="profileUserIcon" src="/images/user.png" alt=""></a>
                        <?php }else{?>
                            <img class="profileUserIcon" src="/images/user.png" alt="">
                            <div class="profileFieldImg">
                                <ul>
                                    <li><a href="/user-profile/index"><?= $GLOBALS['text']['headerProfile']?></a></li>
                                    <li><a href=""><?= $GLOBALS['text']['headerSecurity']?></a></li>
                                    <li><a href="/logout"><?= $GLOBALS['text']['headerLogout']?></a></li>
                                </ul>
                            </div>
                        <?php }?>

                    </div>
                    <div class="flagFields">
                        <?php
                        $language = isset($_COOKIE['language']) ? $_COOKIE['language'] : 'en';
                        switch($language) {
                            case 'am':
                                $mainFlag = '/images/armflag.png';
                                break;
                            case 'ru':
                                $mainFlag = '/images/ruflag.png';
                                break;
                            default:
                                $mainFlag = '/images/usaflag.png';
                        }
                        ?>
                        <img class="mainFlag" src="<?= $mainFlag ?>" alt="">
                        <ul class="otherFlags">
                            <?php if($_COOKIE['language'] !== 'am'){ ?><li class="firstFlag"><a href="<?= Url::to(['site/switch-language?lang=am']) ?>"><img class="armFlag" src="/images/armflag.png" alt=""></a></li><?php } ?>
                            <?php if($_COOKIE['language'] !== 'en'){ ?><li class="firstFlag"><a href="<?= Url::to(['site/switch-language?lang=en']) ?>"><img class="usaFlag" src="/images/usaflag.png" alt=""></a></li><?php } ?>
                            <?php if($_COOKIE['language'] !== 'ru'){ ?><li class="secondFlag"><a href="<?= Url::to(['site/switch-language?lang=ru']) ?>"><img class="ruFlag" src="/images/ruflag.png" alt=""></a></li><?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu">
                <ul>
                    <li class="dropDownLi menuAboutDropDown">
                        <span class="menuAbout"><?=$GLOBALS['text']['__about__']?></span>
<!--                        <span class="menuAbout">ABOUT</span>-->
                        <div class="dropDownAbout">
                            <ul>
                                <li><a href="/site/about"><?=$GLOBALS['text']['whoWe']?></a></li>
                                <li><a href="/alumni/index"><?=$GLOBALS['text']['headerAlumni']?></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropDownLi menuCoursesDropDown">
                        <span class="menuCourses"><?=$GLOBALS['text']['__courses__']?></span>
                        <div class="dropDownCources">
                            <ul>
                                <li><a href=""><?= $GLOBALS['text']['headerCourseAccounting']?></a></li>
                                <li><a href="/personel-management/index"><?=$GLOBALS['text']['headerCoursePayrol']?></a></li>
                                <li><a href=""><?=$GLOBALS['text']['headerAccounting']?></a></li>
                                <li><a href=""><?=$GLOBALS['text']['headerMarketing']?></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="whiteLi"><a href=""><?= $GLOBALS['text']['__faq__'] ?></a></li>
                    <li class="whiteLi"><a href=""><?= $GLOBALS['text']['__testimonials__'] ?></a></li>
                    <?php if ($_SERVER['REQUEST_URI'] == '/'){ ?>
                        <li class="whiteLi"><a href="#section01""><?= $GLOBALS['text']['__blog__'] ?></a></li>
                    <?php } else { ?>
                        <li class="whiteLi"><a href="/blog/index"><?= $GLOBALS['text']['__blog__'] ?></a></li>
                    <?php } ?>
                    <li class="whiteLi"><a href="/contact-us/index"><?= $GLOBALS['text']['__contact__'] ?></a></li>
                    <li class="whiteLi"><a href="/apply-now/index"><?= $GLOBALS['text']['__applynow__'] ?></a></li>
                    <li>
                        <button type="button" class="btnBack">
                            <img src="/images/circle.png" alt="">
                            <span><?= $GLOBALS['text']['__callback__'] ?></span>
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
<!--        <div class="imagesFooterFields">-->
<!--            <div class="leftFooterBg">-->
<!--                <div class="footerFields">-->
<!--                    <div class="footerLogo">-->
<!--                        <img src="/images/footerLogo.png" alt="">-->
<!--                    </div>-->
<!--                    <div class="leftFooterBlock">-->
<!--                        <div class="footerMenu">-->
<!--                            <div class="leftMenuFooter">-->
<!--                                <ul>-->
<!--                                    <li><a href="">--><?php //= $GLOBALS['text']['footerAbout']?><!--</a></li>-->
<!--                                    <li><a href="">--><?php //= $GLOBALS['text']['footerMethodOur']?><!--</a></li>-->
<!--                                    <li><a href="">--><?php //= $GLOBALS['text']['footerContact']?><!--</a></li>-->
<!--                                    <li><a href="">--><?php //= $GLOBALS['text']['footerTestimonials']?><!--</a></li>-->
<!--                                    <li><a href="">--><?php //= $GLOBALS['text']['footerFaq']?><!--</a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <div class="rightMenuFooter">-->
<!--                                <ul>-->
<!--                                    <li><a href="">--><?php //= $GLOBALS['text']['footerCourses']?><!--</a></li>-->
<!--                                    <li><a href="">--><?php //= $GLOBALS['text']['footerBlog']?><!--</a></li>-->
<!--                                    <li><a href="">--><?php //= $GLOBALS['text']['footerRecQuize']?><!--</a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="footerConn">-->
<!--                            <span>--><?php //= $GLOBALS['text']['footerTextConn']?><!--</span>-->
<!--                        </div>-->
<!--                        <div class="footerBtn">-->
<!--                            <input type="text" name="leftEmail" placeholder="--><?php //= $GLOBALS['text']['footerEmailCon']?><!--">-->
<!--                            <button>--><?php //= $GLOBALS['text']['footerEmailBtn']?><!--</button>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="footerSocial">-->
<!--                        <a href=""><img src="/images/in.png" alt=""></a>-->
<!--                        <a class="linkInstagram" href=""><img src="/images/instagram.png" alt=""></a>-->
<!--                        <a href=""><img src="/images/facebook.png" alt=""></a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="rightFooterBg">-->
<!--                <form class="formMail" action="">-->
<!--                    <div class="formName">-->
<!--                        <span>--><?php //= $GLOBALS['text']['footerQuize']?><!--</span>-->
<!--                    </div>-->
<!--                    <div class="inputsMail" >-->
<!--                        <input type="text" name="name" placeholder="--><?php //= $GLOBALS['text']['footerInputName']?><!--">-->
<!--                        <input type="text" name="phone" placeholder="--><?php //= $GLOBALS['text']['footerInputPhone']?><!--">-->
<!--                        <input type="text"  name="email" placeholder="--><?php //= $GLOBALS['text']['footerInputEmail']?><!--">-->
<!--                    </div>-->
<!--                    <div class="formContinue">-->
<!--                        <button>--><?php //= $GLOBALS['text']['footerInputBtn']?><!--</button>-->
<!--                    </div>-->
<!--                </form>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="paypalFooter">-->
<!--            <span class="copyTextFooter">-->
<!--                &copy; --><?php //= $GLOBALS['text']['footerCopy']?><!-- --><?php //=date('Y')?><!-- - Infoexpert Academy-->
<!--            </span>-->
<!--            <div class="policyText">-->
<!--                <ul>-->
<!--                    <li><a href="">--><?php //= $GLOBALS['text']['footerPolicy']?><!--&nbsp</a></li>-->
<!--                    <li><a href="">&nbspTerms & Conditions</a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--            <div class="payLogoFooter">-->
<!--                <img src="/images/visaCardLogo.png" alt="">-->
<!--                <img src="/images/masterCardLogo.png" alt="">-->
<!--            </div>-->
<!--        </div>-->
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
