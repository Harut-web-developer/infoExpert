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

</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>
<header>
    <div class="header">
        <div class="menuSection">
            <div class="logoSection">
                <div class="logo">
                    <img src="/images/logo.png" alt="">
                </div>
                <div class="icons">
                    <img class="searchIcons" src="/images/search.png" alt="">
                    <img src="/images/user.png" alt="">
                    <img src="/images/flag.png" alt="">
                </div>
            </div>
            <div class="menu">
                <ul>
                    <li class="dropDownLi">
                        <span class="menuAbout">ABOUT</span>
                        <div class="dropDownAbout">
                            <ul>
                                <li><a href="">Who we are</a></li>
                                <li><a href="">Alumni</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropDownLi">
                        <span class="menuCourses">COURSES</span>
                        <div class="dropDownCources">
                            <ul>
                                <li><a href="">1C and Accounting fir begginers</a></li>
                                <li><a href="">1C: Payroll and personel management</a></li>
                                <li><a href="">1C: Accounting 8.3</a></li>
                                <li><a href="">Trade management: markeing, sales, BITRIX / CRM</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="whiteLi"><a href="">FAQ</a></li>
                    <li class="whiteLi"><a href="">TESTIMONIALS</a></li>
                    <li class="whiteLi"><a href="">BLOG</a></li>
                    <li class="whiteLi"><a href="">CONTACT US</a></li>
                    <li class="whiteLi"><a href="">APPLY NOW</a></li>
                    <li>
                        <button type="button" class="btnBack"><img src="/images/circle.png" alt=""></button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<main id="main" class="flex-shrink-0" role="main">
<!--    <div class="container">-->
<!--        --><?php //if (!empty($this->params['breadcrumbs'])): ?>
<!--            --><?php //= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
<!--        --><?php //endif ?>
<!--        --><?php //= Alert::widget() ?>
        <?= $content ?>
<!--    </div>-->
</main>

<footer class="footerBackground">
    <div class="bgRectangle">
        <div class="linksFooter">
            <div class="footerLogo">
                <img src="/images/footerLogo.png" alt="">
            </div>
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
                <button></button>
            </div>
            <div class="footerSocial">
                <a href=""><img src="/images/in.png" alt=""></a>
                <a class="linkInstagram" href=""><img src="/images/instagram.png" alt=""></a>
                <a href=""><img src="/images/facebook.png" alt=""></a>
            </div>
        </div>
        <div class="quize">
            <div class="formMail">
                <div class="formName">
                    <span>QUIZE</span>
                </div>
                <form class="inputsMail" action="">
                    <input type="text" name="name" placeholder="Name/Surname">
                    <input type="text" name="phone" placeholder="Phone number">
                    <input type="text"  name="email" placeholder="Email">
                </form>
                <div class="formContinue">
                    <a href="#">Continue</a>
                </div>
            </div>
        </div>
    </div>
<!--    <div class="container">-->
<!--        <div class="row text-muted">-->
<!--            <div class="col-md-6 text-center text-md-start">&copy; My Company --><?php //= date('Y') ?><!--</div>-->
<!--            <div class="col-md-6 text-center text-md-end">--><?php //= Yii::powered() ?><!--</div>-->
<!--        </div>-->
<!--    </div>-->
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
