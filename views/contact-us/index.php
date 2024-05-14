<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/contactus.css');

?>
<div class="contactus d-flex justify-content-center">
    <div class="disinline">
        <img class="backButton" src="/images/backButton.png" alt="">
        <div class="sectionContactusTop d-flex flex-row">
            <div class="sectionContactusTopLeft">
                <div class="contactusDiv">
                    <h1 class="contactusTitle"><?=$GLOBALS['text']['contactTitle']?></h1>
                    <p class="contactusTxt"><?=$GLOBALS['text']['contactText']?></p>
                </div>
                <div class="d-flex flex-row div1">
                    <img class="imgcontact" src="/images/contactus_phon.png">
                    <div class="rigthtxtdiv">
                        <span><?=$GLOBALS['text']['contactPhone']?></span>
                        <p class="contactusNom">+ 374 12 533 361 </p>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <img class="imgcontact" src="/images/contactus_email.png">
                    <div class="rigthtxtdiv">
                        <span><?=$GLOBALS['text']['contactEmail']?></span>
                        <p class="contactusMail"> info@infoexpert.am</p>
                    </div>
                </div>
            </div>
            <div class="sectionContactusTopRight">
                <div id="map"></div>
            </div>
        </div>
        <form action="" class="sectionContactusBottom">
            <h1 class="contactusBottomTitle"><?=$GLOBALS['text']['contactUs']?></h1>
            <p class="contactusBottomTxt"><?=$GLOBALS['text']['contactInputText']?></p>
            <div class="form-row inputdiv">
                <div class="inputname">
                    <input type="text" id="validationDefault00_" placeholder="<?=$GLOBALS['text']['contactInputName']?>" required>
                </div>
                <div class="inputemail">
                    <input type="email" id="validationDefault02_" placeholder="<?=$GLOBALS['text']['contactInputEmail']?>" required>
                </div>
            </div>
            <div class="form-row inputcomment">
                <input type="text" id="validationDefault01_" placeholder="<?=$GLOBALS['text']['contactComment']?>">
            </div>
            <div class="d-flex justify-content-center bottoming">
                <button>
                    <img class="sectionContactusBottomImg" src="/images/contactus.png">
                    <span><?=$GLOBALS['text']['contactBtn']?></span>
                </button>
            </div>
        </form>
    </div>
</div>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=e243c296-f6a7-46b7-950a-bd42eb4b2684" type="text/javascript"></script>
<script>
    var myMap;
    ymaps.ready(init);

    function init () {
        myMap = new ymaps.Map('map', {
            center: [40.1991, 44.5048], // iNFOEXPERT
            zoom: 10
        }, {
            searchControlProvider: 'yandex#search'
        });
    }
</script>