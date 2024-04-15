<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/user-profile.css');
?>
<div class="userCreateBg">
    <div class="userCreateField">
        <div class="userProfileMenuField">
            <span>My Profile</span>
            <ul class="userProfileMenu">
                <li><a href="/user-profile/achievements">My achievements</a></li>
                <li><a href="/courses/my-courses">My courses</a></li>
                <li><a href="/wishlist/index">Wishlist</a></li>
                <li><a href="/my-card/index">My card</a></li>
            </ul>
        </div>
        <div class="userCreateFieldForms">
            <form action="">
                <div class="userPhotoFields">
                    <span class="userAddPhotoText">Add photo</span>
                    <input type="file">
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
                        <label for="attachCv">CV</label>
                        <div id="attachCv" class="cvFileField">
                            <input class="cvFile" type="file">
                            <div class="attachCv">
                                <span>Attach file</span>
                                <img src="/images/scriptIcon.png" alt="">
                            </div>
                        </div>
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
<?php $this->registerJsFile('@web/js/user-create.js', ['defer' => true]); ?>
