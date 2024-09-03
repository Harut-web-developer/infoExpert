<!-- Mariam 80 ev Harut 20-->
<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/contactus.css?v=3');
?>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=e243c296-f6a7-46b7-950a-bd42eb4b2684" type="text/javascript"></script>
<script src="/js/event_reverse_geocode.js" type="text/javascript"></script>

<div class="contactus d-flex justify-content-center">
    <div class="disinline">
        <div class="contactUsTitleM">
            <a href="javascript:history.go(-1)" class="contactBackButton">
                <img class="ellipseButton" src="/images/Ellipse2.png" alt="">
                <img class="backButton" src="/images/backButton.png" alt="">
            </a>
        </div>
        <div class="sectionContactusTop">
            <div class="sectionContactusTopLeft">
                <div class="contactusDiv">
                    <h1 class="contactusTitle"></h1>
                    <p class="contactusTxt"><?=$GLOBALS['text']['contactText']?></p>
                </div>
                <div class="d-flex flex-row align-items-end div1">
                    <img class="imgcontact" src="/images/contactus_phon.png">
                    <div class="rigthtxtdiv">
                        <span><?=$GLOBALS['text']['contactPhone']?></span>
                        <p class="contactusNom"><?=$info->phone_number?></p>
                    </div>
                </div>
                <div class="d-flex flex-row align-items-end">
                    <img class="imgcontact" src="/images/contactus_email.png">
                    <div class="rigthtxtdiv">
                        <span><?=$GLOBALS['text']['contactEmail']?></span>
                        <p class="contactusMail"><?=$info->infoexpert_email?></p>
                    </div>
                </div>
            </div>
            <div class="sectionContactusTopRight">
                <div id="map"></div>
            </div>
        </div>
        <form action="" class="sectionContactusBottom" method="post">
            <h1 class="contactusBottomTitle"><?=$GLOBALS['text']['contactUs']?></h1>
            <p class="contactusBottomTxt"><?=$GLOBALS['text']['contactInputText']?></p>
            <div class="form-row inputdiv">
                <input class="inputname" name="name" type="text" id="validationDefault00_" placeholder="<?=$GLOBALS['text']['contactInputName']?>" required>
                <input  class="inputemail" name="email" type="email" id="validationDefault02_" placeholder="<?=$GLOBALS['text']['contactInputEmail']?>" required>
            </div>
            <div class="form-row inputcomment">
                <input name="comment" type="text" id="validationDefault01_" placeholder="<?=$GLOBALS['text']['contactComment']?>">
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
    function blogTitle() {
        return  `<span class="mobileTitle"><?=$GLOBALS['text']['contactTitle']?></span>`;
    }
    $(document).ready(function() {
        if ($(window).width() > 1100) {
            $('.contactusTitle').append(blogTitle());
        }
        if ($(window).width() <= 1100) {
            $('.contactUsTitleM').append(blogTitle());
        }
    });
</script>