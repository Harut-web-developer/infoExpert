<!-- Mariam 50 ev Harut 50-->
<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/apply-now.css?v=2');
?>
<div class="applyOne">
    <form class="appleFields" action="" method="post">
        <span><?=$GLOBALS['text']['applyNowTitle']?></span>
        <p><?=$GLOBALS['text']['applyNowText']?></p>
        <div class="apllyInputFields">
            <div class="applyNameInput">
                <label for="name/surname"><?=$GLOBALS['text']['applyNowInputName']?></label>
                <input id="name/surname" type="text" name="name" required>
            </div>
            <div class="applyEmailInput">
                <label for="email"><?=$GLOBALS['text']['applyNowInputEmail']?></label>
                <input id="email" type="email" name="email" required>
            </div>
            <div class="coursesFieldsRadio">
                <span><?=$GLOBALS['text']['applyNowCourses']?></span>
                <div class="radioFieldsBlocks">
                    <div class="coursesBlocksRadio">
                        <?php if (!empty($lessons)){foreach ($lessons as $key => $lesson){?>
                            <div class="chooseLessonsField">
                                <div>
                                    <input type="radio" id="lesson<?=$key+1?>" name="lesson_number" value="<?=$lesson['id']?>" <?= $key === 0 ? 'checked' : '' ?>>
                                </div>
                                <label for="lesson<?=$key+1?>"><?=$lesson['lesson_name']?></label>
                            </div>
                        <?php }} ?>
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
                                    <input type="radio" id="individual" name="lesson_type" value="1">
                                </div>
                                <label for="individual"><?=$GLOBALS['text']['applyNowIndividual']?></label>
                            </div>
                            <div class="individualChildFields sameTypeCourse">
                                <div class="online">
                                    <input type="radio" id="individualOnline" name="line" value="1">
                                    <label for="individualOnline"><?=$GLOBALS['text']['applyNowOnline']?></label>
                                </div>
                                <div class="offline">
                                    <input type="radio" id="individualOffline" name="line" value="0">
                                    <label for="individualOffline"><?=$GLOBALS['text']['applyNowOffline']?></label>
                                </div>
                            </div>
                        </div>
                        <div class="group">
                            <div class="mainGroup">
                                <div>
                                    <input type="radio" id="group" name="lesson_type" value="2">
                                </div>
                                <label for="group"><?=$GLOBALS['text']['applyNowGroup']?></label>
                            </div>
                            <div class="groupChildFields sameTypeCourse">
                                <div class="online">
                                    <input type="radio" id="groupOnline" name="line" value="1">
                                    <label for="groupOnline"><?=$GLOBALS['text']['applyNowOnline']?></label>
                                </div>
                                <div class="offline">
                                    <input type="radio" id="groupOffline" name="line" value="0">
                                    <label for="groupOffline"><?=$GLOBALS['text']['applyNowOffline']?></label>
                                </div>
                            </div>
                        </div>
                        <div class="corporate">
                            <div class="mainCorporate">
                                <div>
                                    <input type="radio" id="corporate" name="lesson_type" value="3">
                                </div>
                                <label for="corporate"><?=$GLOBALS['text']['applyNowCorporate']?></label>
                            </div>
                            <div class="corporateChildFields sameTypeCourse">
                                <div class="online">
                                    <input type="radio" id="corporateOnline" name="line" value="1">
                                    <label for="corporateOnline"><?=$GLOBALS['text']['applyNowOnline']?></label>
                                </div>
                                <div class="offline">
                                    <input type="radio" id="corporateOffline" name="line" value="0">
                                    <label for="corporateOffline"><?=$GLOBALS['text']['applyNowOffline']?></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="applyPhoneInput">
                <label for="phone"><?=$GLOBALS['text']['applyNowPhone']?></label>
                <input id="phone" type="number" name="phone" required>
            </div>
        </div>
        <div class="applyNowBtnField">
            <button type="submit">
                <img src="/images/applySendBtn.png" alt="">
                <span><?=$GLOBALS['text']['applyNowBtn']?></span>
            </button>
        </div>
    </form>
</div>
<?php $this->registerJsFile('@web/js/apply-now.js?v=1', ['defer' => true]); ?>


