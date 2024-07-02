<?php
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
            <?=$blogs['page_title']?>
            <div class="sizeLikeField">
                <div class="large-font">
                    <ion-icon name="heart" role="img" class="md hydrated">
                        <div class="red-bg"></div>
                    </ion-icon>
                </div>
            </div>
<!--            <div class='large-font'>-->
<!--                <ion-icon name="heart">-->
<!--                    <div class='red-bg'></div>-->
<!--                </ion-icon>-->
<!--            </div>-->
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
                <h1>RECENT NEWS</h1>
            </div>
            <div class="rigthtxt">
                <img src="/images/img_categorie1.png">
                <div class="rigthtxtdiv">
                    <span>Best LearnPress WordPress Theme Collection for 2023</span>
                </div>
            </div>
            <div class="rigthtxt">
                <img src="/images/img_categorie2.png">
                <div class="rigthtxtdiv">
                    <span>Best LearnPress WordPress Theme Collection for 2023</span>
                </div>
            </div>
            <div class="rigthtxt">
                <img src="/images/img_categorie3.png">
                <div class="rigthtxtdiv">
                    <span>Best LearnPress WordPress Theme Collection for 2023</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Like js-->
<script>
document.querySelectorAll('.categorie ion-icon').forEach(icon => {
        icon.addEventListener('click', function() {
            this.classList.toggle('active');
        });
    });
</script>