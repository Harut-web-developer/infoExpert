<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/categorie.css');
$this->registerJsFile('https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js', ['type' => "module"]);
$this->registerJsFile('https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js', ['nomodule' => true]);
?>
<div class="categorie">
    <div class="categorieTitleDiv">
        <h1 class="categorieTitle">
            <img class="ellipseButton" src="/images/Ellipse2.png" alt="">
            <img class="backButton" src="/images/backButton.png" alt="">
            Grid of different categories of accounting lessons
            <div class='large-font'>
                <ion-icon name="heart">
                    <div class='red-bg'></div>
                </ion-icon>
            </div>
        </h1>

        <p class="date"> <img src="/images/date.png"> Jan 24, 2025</p>
    </div>
    <div class="sectionCategorie">
        <div class="sectionCategorieLeft">
            <img class="categorieImage" src="/images/img_categorie.png">
            <div class="categorieText">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras facilisis faucibus odio arcu duis dui, adipiscing facilisis. Urna, donec turpis egestas volutpat. Quisque nec non amet quis. Varius tellus justo odio parturient mauris curabitur lorem in. Pulvinar sit ultrices mi ut eleifend luctus ut. Id sed faucibus bibendum augue id cras purus. At eget euismod cursus non. Molestie dignissim sed volutpat feugiat vel enim eu turpis imperdiet. </p>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras facilisis faucibus odio arcu duis dui, adipiscing facilisis. Urna, donec turpis egestas volutpat. Quisque nec non amet quis. Varius tellus justo odio parturient mauris curabitur lorem in. Pulvinar sit ultrices mi ut eleifend luctus ut. Id sed faucibus bibendum augue id cras purus</p>
            </div>
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