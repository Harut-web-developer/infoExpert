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
use \app\models\AcLessons;
use \app\models\AcInfo;
use Yii;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => 'infoexpert, courses, դասընթացներ, курсы']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('/images/faviconInfoexpert.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= $_COOKIE['language'] ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <?php if($_COOKIE['language'] =='am') { ?>
       <link rel="stylesheet" href="/css/am.css">
    <?php } else if($_COOKIE['language'] =='ru'){ ?>
    <link rel="stylesheet" href="/css/ru.css">
    <?php } else if($_COOKIE['language'] =='en'){ ?>
        <link rel="stylesheet" href="/css/en.css">
    <?php }
    if ($_COOKIE['language'] =='am'){
        $dropdown_menu = 'dropDownCourcesArm';
    }else{
        $dropdown_menu = 'dropDownCources';
    }
    ?>
    <link rel="stylesheet" href="/css/main.css?v=40">
    <link rel="stylesheet" href="/css/mainTablet.css?v=40">
    <link rel="stylesheet" href="/css/mainMobile.css?v=40">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
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
                    <button class="modalOpenBtn">
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
                            <div class="personInfoCircle"><?=mb_substr($first_letter[0], 0, 1) . ' ' . mb_substr($first_letter[1], 0, 1)?></div>
                        <?php }else{?>
                            <div class="personInfoCircle"><?=mb_substr($first_letter[0], 0, 1)?></div>
                        <?php }?>
                    <div class="personSignOrInfo">
                        <div class="personNameField">
                            <span class="personName">
                                <?php
                                if (count($first_letter) > 1){?>
                                    <span><?= $GLOBALS['text']['tabletHello'] . ', ' . $first_letter[0] . ' '?></span>
                                    <span><?=$first_letter[1]?></span>
                                <?php }else{?>
                                    <span><?= $GLOBALS['text']['tabletHello'] . ', ' . $first_letter[0]?></span>
                                <?php }?>
                            </span>
                            <span class="personGreetings"><?= $GLOBALS['text']['tabletWelcome']?></span>
                        </div>
                        <img class="tabletUserProfileMenu" src="/images/menuRightArrow.png" alt="">
                    </div>
                    <?php }else{ ?>
                    <div class="personInfoCircleMobile"></div>
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
                                <a href="/courses/my-courses"><?=$GLOBALS['text']['tabletMyCourse']?></a>
                                <div class="tabletCoursesUnderline"></div>
                            </li>
                        <?php }?>
                        <li class="mobileBackCall">
                            <button class="modalOpenBtn">
                                <img src="/images/tabletMenuBtn.png" alt="">
                                <span><?= $GLOBALS['text']['__callback__'] ?></span>
                            </button>
                            <div class="mobileBackCallUnderline"></div>
                        </li>
                         <?php $lessons = AcLessons::find()->where(['status' => '1'])->asArray()->all();
                            if (!empty($lessons)){ ?>
                                <li class="tabletAllCoursesList">
                                    <span><?= $GLOBALS['text']['tabletAllCourses']?></span>
                                    <img src="/images/menuRightArrow.png" alt="">
                                </li>
                            <?php } ?>
                        <li><a href="/about"><?= $GLOBALS['text']['footerAbout']?></a></li>
                        <li><a href=""><?= $GLOBALS['text']['tabletMethodology']?></a></li>
                        <?php if ($_SERVER['REQUEST_URI'] == '/'){ ?>
                            <li><a href="#testimonials"><?= $GLOBALS['text']['footerTestimonials']?></a></li>
                            <li><a href="#section01"><?= $GLOBALS['text']['footerBlog']?></a></li>
                            <li><a href="#sectionAnswers"><?= $GLOBALS['text']['footerFaq']?></a></li>
                        <?php } else { ?>
                            <li><a href="/testimonials"><?= $GLOBALS['text']['footerTestimonials']?></a></li>
                            <li><a href="/blog/index"><?= $GLOBALS['text']['footerBlog']?></a></li>
                            <li><a href="/faq"><?= $GLOBALS['text']['footerFaq']?></a></li>
                        <?php }  ?>

                        <li><a href="/alumni/index"><?= $GLOBALS['text']['headerAlumni']?></a></li>
                        <li><a href=""><?= $GLOBALS['text']['tabletRecQuize']?></a></li>
                        <li><a href="/contact-us/index"><?= $GLOBALS['text']['tabletContact']?></a></li>
                        <?php if(!empty(Yii::$app->user->identity)){ ?>
                            <li><a href="/site/account-security"><?= $GLOBALS['text']['headerSecurity']?></a></li>
                        <?php }?>
                    </ul>
                    <div class="searchFlagField">
                            <img class="btn-search" id="btn-search-mobile" src="/images/search-white.png" alt="">
                        <div class="tabletFlagField">
                            <a href="<?= Url::to(['site/switch-language?lang=am']) ?>"><img src="/images/armflag.png" alt=""></a>
                            <a href="<?= Url::to(['site/switch-language?lang=en']) ?>"><img src="/images/usaflag.png" alt=""></a>
                            <a href="<?= Url::to(['site/switch-language?lang=ru']) ?>"><img src="/images/ruflag.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="search-mobile search-mobile-hide">
                    <div class="search-div">
                        <div class="mobile-search-div">
                            <input type="text" name="" class="input-search" id="input-search">
                            <img src="/images/delete-icon.png" alt="" class="delete-icon">
                            <div class="img-div">
                                <img class="btn-search" id="btn-search-mobile-hide" src="/images/search-white.png" alt="">
                            </div>
                        </div>
                        <div class="searchField"></div>
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
                    <li><a href="/user-profile/achievements-edit"><?=$GLOBALS['text']['tabletProfile']?></a></li>
                    <li><a href="/wishlist/index"><?=$GLOBALS['text']['tabletWishlist']?></a></li>
                    <li><a href="/user-profile/achievements"><?=$GLOBALS['text']['tabletachievement']?></a></li>
                    <li><a href="/my-card/index"><?=$GLOBALS['text']['tabletCard']?></a></li>
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
                    <?php
                    $lang = $_COOKIE['language'];
                    $lessons = AcLessons::find()->select('url,lesson_name_'.$lang.' as lesson_name')->where(['status' => '1'])->asArray()->all();
                    if (!empty($lessons)){ foreach ($lessons as $lesson) {?>
                        <li><a href="/lesson/<?=$lesson['url']?>"><?=$lesson['lesson_name']?></a></li>
                    <?php }}?>
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
                    <div class="search-div">
                        <div class="web-search">
                            <input type="text" name="" class="input-search" id="input-search">
                            <img src="/images/delete-icon.png" alt="" class="delete-icon">
                            <div class="img-div">
                                <img class="btn-search" src="/images/search-white.png" alt="">
                            </div>
                        </div>
                        <div class="searchField"></div>
                    </div>
                    <div class="profileField">
                        <?php if (empty(Yii::$app->user->identity)){?>
                            <a href="/login"><img class="profileUserIcon" src="/images/user.png" alt=""></a>
                        <?php }else{?>
                            <img class="profileUserIcon" src="/images/user.png" alt="">
                            <div class="profileFieldImg">
                                <ul>
                                    <li><a href="/user-profile/achievements-edit"><?= $GLOBALS['text']['headerProfile']?></a></li>
                                    <li><a href="/my-card/index"><?=$GLOBALS['text']['tabletCard']?></a></li>
                                    <li><a href="/site/account-security"><?= $GLOBALS['text']['headerSecurity']?></a></li>
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
                    <li class="dropDownLi menuAboutDropDown orangeOrWhite">
                        <span class="menuAbout"><?=$GLOBALS['text']['__about__']?></span>
<!--                        <span class="menuAbout">ABOUT</span>-->
                        <div class="dropDownAbout">
                            <ul>
                                <li><a href="/about"><?=$GLOBALS['text']['whoWe']?></a></li>
                                <li><a href="/alumni/index"><?=$GLOBALS['text']['headerAlumni']?></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropDownLi menuCoursesDropDown">
                        <span class="menuCourses"><?=$GLOBALS['text']['__courses__']?></span>
                        <?php if (!empty($lessons)){
                            $lang = $_COOKIE['language'];
                            $lessons = AcLessons::find()->select('url,lesson_name_'.$lang.' as lesson_name')->where(['status' => '1'])->asArray()->all();
                            ?>
                        <div class="dropDownCoursesBg">
                            <div id="curved-corner-bottomleft"></div>
                            <div class="lessonsListMenu">
                                <ul>
                                    <?php
                                    foreach ($lessons as $lesson) {?>
                                        <li><a href="/lesson/<?=$lesson['url']?>"><?=$lesson['lesson_name']?></a></li>
                                    <?php }?>
                                </ul>
                            </div>
                        </div>
                        <?php }?>
                    </li>
                    <?php if ($_SERVER['REQUEST_URI'] == '/'){ ?>
                        <li class="whiteLi orangeOrWhite"><a href="#sectionAnswers"><?= $GLOBALS['text']['__faq__'] ?></a></li>
                        <li class="whiteLi orangeOrWhite"><a href="#testimonials"><?= $GLOBALS['text']['__testimonials__'] ?></a></li>
                        <li class="whiteLi"><a href="#section01""><?= $GLOBALS['text']['__blog__'] ?></a></li>
                    <?php } else { ?>
                        <li class="whiteLi orangeOrWhite"><a href="/faq"><?= $GLOBALS['text']['__faq__'] ?></a></li>
                        <li class="whiteLi orangeOrWhite"><a href="/testimonials"><?= $GLOBALS['text']['__testimonials__'] ?></a></li>
                        <li class="whiteLi orangeOrWhite"><a href="/blog/index"><?= $GLOBALS['text']['__blog__'] ?></a></li>
                    <?php } ?>
                    <li class="whiteLi orangeOrWhite"><a href="/contact-us/index"><?= $GLOBALS['text']['__contact__'] ?></a></li>
                    <li class="whiteLi orangeOrWhite"><a href="/apply-now/index"><?= $GLOBALS['text']['__applynow__'] ?></a></li>
                    <li>
                        <button type="button" class="btnBack modalOpenBtn">
                            <img src="/images/circle.png" alt="">
                            <span><?= $GLOBALS['text']['__callback__'] ?></span>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="securityModal">
        <div class="securityContentModal">
            <form class="modalMainField" action="" method="post">
                <div class="modalTitleField">
                    <span class="modalTitle"><?=$GLOBALS['text']['modalTitleCallBack']?></span>
                    <span class="modalText"><?=$GLOBALS['text']['modalTextCallBack']?></span>
                </div>
                <div class="modalInputField">
                    <div class="firstField">
                        <div class="modalNameField">
                            <input type="text" placeholder="<?=$GLOBALS['text']['modalCallBackName']?>" name="callBackName" required>
                        </div>
                        <div class="modalEmailField">
                            <input type="email" placeholder="<?=$GLOBALS['text']['inputEmail']?>" name="callBackEmail" required>
                        </div>
                        <div class="modalPhoneField">
                            <input type="number" placeholder="<?=$GLOBALS['text']['modalCallBackPhone']?>" name="callBackPhone" required>
                        </div>
                    </div>
                    <div class="secondField">
                        <div class="modalSelectField">
                            <select name="callBackCourses" required>
                                <option value=""><?=$GLOBALS['text']['modalCallBackCourses']?></option>
                                <?php
                                $lesson_select = AcLessons::find()->select('id, lesson_name_'.$lang.' as lesson_name')->where(['status' => '1'])->asArray()->all();
                                if (!empty($lesson_select)){ foreach ($lesson_select as $item){?>
                                    <option value="<?=$item['id']?>"><?=$item['lesson_name']?></option>
                                    <?php }} ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modalBtnField">
                    <button type="submit" name="callBackBtn">
                        <img src="/images/securityBtn.png" alt="">
                        <span><?=$GLOBALS['text']['modalCallBackSubmit']?></span>
                    </button>
                </div>
            </form>
            <img class="animateOne" src="/images/circleAnimation.png" alt="">
            <img class="animateTwo" src="/images/circleAnimation.png" alt="">
            <img class="animateThree" src="/images/circleAnimation.png" alt="">
            <img class="animateFour" src="/images/circleAnimation.png" alt="">
            <img class="animateFive" src="/images/circleAnimation.png" alt="">
            <img class="animateSix" src="/images/circleAnimation.png" alt="">
        </div>
    </div>
</header>
<!--successfully logged popup-->
<?php
$session = Yii::$app->session;
$logged = $session->get('logged');
$alertShown = $session->get('alertShown');
if ($logged && $alertShown) {
    $session->set('alertShown', false); ?>
    <div class="popup-wrap-logged">
        <div class="popup-box-logged">
            <div class="logged-content">
                <span class="logged-txt"><?=$GLOBALS['text']['logged']?> </span>
                <span class="close-btn popup-close close-logged">x</span>
            </div>
        </div>
    </div>
<?php } ?>

<main id="main" class="flex-shrink-0" role="main">
    <?= $content ?>
</main>
<footer class="footerBackground" id="footerBackgroundM">
    <?php
    $url_info = AcInfo::find()->select('instagram_link,facebook_link,linkdin_link')->where(['status' => '1'])->asArray()->one();
    ?>
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
                                    <li><a href="/about"><?= $GLOBALS['text']['footerAbout']?></a></li>
                                    <li><a href=""><?= $GLOBALS['text']['footerMethodOur']?></a></li>
                                    <li><a href="/contact-us/index"><?= $GLOBALS['text']['footerContact']?></a></li>
                                    <li><a href="/testimonials"><?= $GLOBALS['text']['footerTestimonials']?></a></li>
                                    <li><a href="/faq"><?= $GLOBALS['text']['footerFaq']?></a></li>
                                </ul>
                            </div>
                            <div class="rightMenuFooter">
                                <ul>
                                    <li><a href="/courses/index"><?= $GLOBALS['text']['footerCourses']?></a></li>
                                    <li><a href="/blog/index"><?= $GLOBALS['text']['footerBlog']?></a></li>
                                    <li><a href="/quize/index"><?= $GLOBALS['text']['footerRecQuize']?></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="footerConn">
                            <span><?= $GLOBALS['text']['footerTextConn']?></span>
                            <div class="footerSocialMobile">
                                <a target="_blank" href="<?=$url_info['linkdin_link']?>"><img src="/images/in.png" alt=""></a>
                                <a target="_blank" class="linkInstagram" href="<?=$url_info['instagram_link']?>"><img src="/images/instagram.png" alt=""></a>
                                <a target="_blank" href="<?=$url_info['facebook_link']?>"><img src="/images/facebook.png" alt=""></a>
                            </div>
                        </div>
                        <form action="" method="post" class="footerBtn">
                            <input required type="email" name="leftEmail" placeholder="<?= $GLOBALS['text']['footerEmailCon']?>">
                            <button type="submit" name="subscribe"><?= $GLOBALS['text']['footerEmailBtn']?></button>
                        </form>
                    </div>
                    <div class="footerSocial">
                        <a target="_blank" href="<?=$url_info['linkdin_link']?>"><img src="/images/in.png" alt=""></a>
                        <a target="_blank" class="linkInstagram" href="<?=$url_info['instagram_link']?>"><img src="/images/instagram.png" alt=""></a>
                        <a target="_blank" href="<?=$url_info['facebook_link']?>"><img src="/images/facebook.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="rightFooterBg">
                <form class="formMail" action="/quize/index" method="post">
                    <div class="formName">
                        <span class="quize-title"><?= $GLOBALS['text']['footerQuize']?></span>
                    </div>
                    <div class="inputsMail" >
                        <input type="text" name="name" placeholder="<?= $GLOBALS['text']['footerInputName']?>" <?=!Yii::$app->user->identity->username || !$session['quizeName'] ? 'required' : ''?>>
                        <input type="number" name="phone" placeholder="<?= $GLOBALS['text']['footerInputPhone']?>" <?=!Yii::$app->user->identity->phone || !$session['quizePhone'] ? 'required' : ''?>>
                        <input type="text"  name="email" placeholder="<?= $GLOBALS['text']['footerInputEmail']?>" <?=!Yii::$app->user->identity->email || !$session['quizeEmail']? 'required' : ''?>>
                    </div>
                    <div class="formContinue">
                        <button name="enterQuize" type="submit"><?= $GLOBALS['text']['footerInputBtn']?></button>
                    </div>
                </form>
            </div>
        </div>
        <div class="paypalFooter">
            <span class="copyTextFooter">
                &copy; <?= $GLOBALS['text']['footerCopy']?> <?=date('Y')?> - Infoexpert Academy
            </span>
            <div class="policyText">
                <ul>
                    <li><a href=""><?= $GLOBALS['text']['footerPolicy']?>&nbsp</a></li>
                    <li><a href="">&nbsp<?= $GLOBALS['text']['footerTerms']?></a></li>
                </ul>
            </div>
            <div class="payLogoFooter">
                <img src="/images/visaCardLogo.png" alt="">
                <img src="/images/masterCardLogo.png" alt="">
            </div>
            <div class="footerMobilePolicy">
                <div class="policyTextMobile">
                    <ul>
                        <li><a href=""><?= $GLOBALS['text']['footerPolicy']?>&nbsp</a></li>
                        <li><a href="">&nbsp<?= $GLOBALS['text']['footerTerms']?></a></li>
                    </ul>
                </div>
                <div class="payLogoFooterMobile">
                    <img src="/images/visaCardLogo.png" alt="">
                    <img src="/images/masterCardLogo.png" alt="">
                </div>
            </div>
        </div>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
