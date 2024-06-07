<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/apply-now.css');
?>
<div class="applyOne">
    <form class="appleFields" action="/apply-now/apply-application">
        <span><?=$GLOBALS['text']['applyNowTitle']?></span>
        <p><?=$GLOBALS['text']['applyNowText']?></p>
        <div class="apllyInputFields">
            <div class="applyNameInput">
                <label for="name/surname"><?=$GLOBALS['text']['applyNowInputName']?></label>
                <input id="name/surname" type="text" name="name/surname">
            </div>
            <div class="applyEmailInput">
                <label for="email"><?=$GLOBALS['text']['applyNowInputEmail']?></label>
                <input id="email" type="email" name="email">
            </div>
            <div class="coursesFieldsRadio">
                <span><?=$GLOBALS['text']['applyNowCourses']?></span>
                <div class="radioFieldsBlocks">
                    <div class="coursesBlocksRadio">
                        <div class="accounting">
                            <div>
                                <input type="radio" id="accounting" name="accounting" checked>
                            </div>
                            <label for="accounting"><?=$GLOBALS['text']['applyNowCourseOne']?></label>
                        </div>
                        <div class="salary">
                            <div>
                                <input type="radio" id="salary" name="salary">
                            </div>
                            <label for="salary"><?=$GLOBALS['text']['applyNowCourseTwo']?></label>
                        </div>
                        <div class="trade">
                            <div>
                                <input type="radio" id="trade" name="trade">
                            </div>
                            <label for="trade"><?=$GLOBALS['text']['applyNowCourseThree']?></label>
                        </div>
                        <div class="marketing">
                            <div>
                                <input type="radio" id="marketing" name="marketing">
                            </div>
                            <label for="marketing"><?=$GLOBALS['text']['applyNowCourseFour']?></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="typeCoursesFields">
                <span><?=$GLOBALS['text']['applyNowTypeCourse']?></span>
                <div class="radioFieldsBlocksType">
                    <div class="typeCoursesBlocksRadio">
                        <div class="individual">
                            <div class="mainIndividual">
                                <div>
                                    <input type="radio" id="individual" name="individual">
                                </div>
                                <label for="individual"><?=$GLOBALS['text']['applyNowIndividual']?></label>
                            </div>
                            <div class="individualChildFields sameTypeCourse">
                                <div class="online">
                                    <input type="radio" id="individualOnline" name="individualOnline">
                                    <label for="individualOnline"><?=$GLOBALS['text']['applyNowOnline']?></label>
                                </div>
                                <div class="offline">
                                    <input type="radio" id="individualOffline" name="individualOffline">
                                    <label for="individualOffline"><?=$GLOBALS['text']['applyNowOffline']?></label>
                                </div>
                            </div>
                        </div>
                        <div class="group">
                            <div class="mainGroup">
                                <div>
                                    <input type="radio" id="group" name="group">
                                </div>
                                <label for="group"><?=$GLOBALS['text']['applyNowGroup']?></label>
                            </div>
                            <div class="groupChildFields sameTypeCourse">
                                <div class="online">
                                    <input type="radio" id="groupOnline" name="groupOnline">
                                    <label for="groupOnline"><?=$GLOBALS['text']['applyNowOnline']?></label>
                                </div>
                                <div class="offline">
                                    <input type="radio" id="groupOffline" name="groupOffline">
                                    <label for="groupOffline"><?=$GLOBALS['text']['applyNowOffline']?></label>
                                </div>
                            </div>
                        </div>
                        <div class="corporate">
                            <div class="mainCorporate">
                                <div>
                                    <input type="radio" id="corporate">
                                </div>
                                <label for="corporate"><?=$GLOBALS['text']['applyNowCorporate']?></label>
                            </div>
                            <div class="corporateChildFields sameTypeCourse">
                                <div class="online">
                                    <input type="radio" id="corporateOnline" name="corporateOnline">
                                    <label for="corporateOnline"><?=$GLOBALS['text']['applyNowOnline']?></label>
                                </div>
                                <div class="offline">
                                    <input type="radio" id="corporateOffline" name="corporateOffline">
                                    <label for="corporateOffline"><?=$GLOBALS['text']['applyNowOffline']?></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="applyPhoneInput">
                <label for="phone"><?=$GLOBALS['text']['applyNowPhone']?></label>
                <input id="phone" type="number" name="phone">
            </div>
        </div>
        <div class="applyNowBtnField">
            <button>
                <img src="/images/applySendBtn.png" alt="">
                <span><?=$GLOBALS['text']['applyNowBtn']?></span>
            </button>
        </div>
    </form>
</div>
<?php $this->registerJsFile('@web/js/apply-now.js', ['defer' => true]); ?>


