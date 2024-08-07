<!-- Mariam 80 ev Harut 20-->
<?php
use app\models\AcWishlist;

/** @var yii\web\View $this */
$this->registerCssFile('@web/css/categorie.css');
$this->registerJsFile('https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js', ['type' => "module"]);
$this->registerJsFile('https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js', ['nomodule' => true]);
?>
<div class="categorie">
    <div class="categorieTitleDiv">
        <h1 class="categorieTitle">
            <a href="javascript:history.go(-1)" class="categorieBackButton">
                <img class="ellipseButton" src="/images/Ellipse2.png" alt="">
                <img class="backButton" src="/images/backButton.png" alt="">
            </a>
            <?=$blogs['page_name']?>
            <div class="sizeLikeField">
                <div class="large-font">
                    <ion-icon name="heart" role="img" class="md hydrated" data-id="<?=$blogs['id']?>" data-active="<?=AcWishlist::getWishlist($blogs['id'],2) ? AcWishlist::getWishlist($blogs['id'],2) : 0?>" data-type="2">
                        <div class="red-bg"></div>
                    </ion-icon>
                </div>
            </div>
        </h1>

        <span class="date">
            <img src="/images/date.png">
            <span class="dateNumber"> <?=$blogs['create_date']?></span>
        </span>
    </div>
    <div class="sectionCategorie">
        <div class="sectionCategorieLeft">
            <img class="categorieImage" src="/<?=$blogs['img']?>">
            <div class="categorieText"><?=$blogs['page_content']?></div>
        </div>
        <div class="sectionCategorieRight">
            <div class="categorieTitleDivRight">
                <h1><?= $GLOBALS['text']['recentNews'] ?></h1>
            </div>
            <?php if (!empty($last_blogs)){foreach ($last_blogs as $last_blog){ ?>
                <a href="<?= Yii::$app->urlManager->createUrl(['blog/'.$last_blog['url']]) ?>">
                    <div class="rigthtxt">
                        <img src="/<?=$last_blog['img']?>">
                        <div class="rigthtxtdiv">
                            <span><?=$last_blog['page_name']?></span>
                        </div>
                    </div>
                </a>
            <?php }}?>
        </div>
    </div>
</div>
<?php $this->registerJsFile('@web/js/blog.js', ['defer' => true]);?>
