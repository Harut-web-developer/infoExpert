<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/user-profile.css');
?>
<div class="userCreateBg">
    <div class="userCreateField">
        <div class="userProfileMenuField">
            <span>My Profile</span>
            <ul class="userProfileMenu">
                <li><a href="">My achievements</a></li>
                <li><a href="">My courses</a></li>
                <li><a href="">Wishlist</a></li>
                <li><a href="">My card</a></li>
            </ul>
        </div>
        <div class="userCreateFieldForms">
            <form action="">
                <div class="userPhotoFields">

                </div>
                <div class="userInputsFields">
                    <div class="userFormsInput">
                        <label for="">Name/Surname</label>
                        <input type="text">
                    </div>
                    <div class="userFormsInput">
                        <label for="">Phone</label>
                        <input type="number">
                    </div>
                    <div class="userFormsInput">
                        <label for="">Mail</label>
                        <input type="email">
                    </div>
                    <div class="userFormsInput">
                        <label for="">Linkedin profile link</label>
                        <input type="text">
                    </div>
                    <div class="userFormsInput">
                        <label for="">CV</label>
                        <input type="file">
                    </div>
                    <div class="userFormsBtn">
                        <button>
                            <img src="/images/userSaveBtn.png" alt="">
                            <span>SAVE</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
