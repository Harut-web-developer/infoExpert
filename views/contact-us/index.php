<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/contactus.css');

?>
<div class="contactus d-flex justify-content-center">
    <div class="disinline">
        <div class="sectionContactusTop d-flex flex-row">
            <div class="sectionContactusTopLeft">
                <div class="contactusDiv">
                    <h1 class="contactusTitle">Need A Direct Line?</h1>
                    <p class="contactusTxt">Cras massa et odio donec faucibus in. Vitae pretium massa dolor ullamcorper lectus elit quam. </p>
                </div>
                <div class="d-flex flex-row div1">
                    <img class="imgcontact" src="/images/contactus_phon.png">
                    <div class="rigthtxtdiv">
                        <span>Phone</span>
                        <p class="contactusTxt">+ 374 12 533 361 </p>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <img class="imgcontact" src="/images/contactus_email.png">
                    <div class="rigthtxtdiv">
                        <span>Email</span>
                        <p class="contactusTxt"> info@infoexpert.am</p>
                    </div>
                </div>
            </div>
            <div class="sectionContactusTopRight">
                <img src="/images/contactus_map.png" alt="">
            </div>
        </div>
        <form action="" class="sectionContactusBottom">
            <h1 class="contactusBottomTitle">Contact Us</h1>
            <p class="contactusBottomTxt">Your email address will not be published. Required fields are marked *</p>
            <div class="form-row inputdiv">
                <div class="inputname">
                    <input type="text" id="validationDefault00_" placeholder="Name*" required>
                </div>
                <div class="inputemail">
                    <input type="email" id="validationDefault02_" placeholder="Email*" required>
                </div>
            </div>
            <div class="form-row inputcomment">
                <input type="text" id="validationDefault01_" placeholder="Comment">
            </div>
            <div class="d-flex justify-content-center bottoming">
                <img class="sectionContactusBottomImg" src="/images/contactus.png">
            </div>
        </form>
    </div>
</div>

