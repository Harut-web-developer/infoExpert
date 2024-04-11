<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/apply-now.css');
?>
<div class="applyOne">
    <form class="appleFields" action="/apply-now/apply-application">
        <span>Դասընթացի նախագրանցման հայտ</span>
        <p>Խնդրում ենք լրացնել հայտը, որը ձեզ հնարավորություն կտա առաջինը տեղեկանալ և մասնակցել Ակադեմիայի կողմից առաջարկվող դաընթացներին:</p>
        <div class="apllyInputFields">
            <div class="applyNameInput">
                <label for="name/surname">Անուն/Ազգանուն</label>
                <input id="name/surname" type="text" name="name/surname">
            </div>
            <div class="applyEmailInput">
                <label for="email">Էլ.հասցե</label>
                <input id="email" type="email" name="email">
            </div>
            <div class="coursesFieldsRadio">
                <span>Դասընթացներ</span>
                <div class="radioFieldsBlocks">
                    <div class="coursesBlocksRadio">
                        <div class="accounting">
                            <input type="radio" id="accounting" name="accounting" checked>
                            <label for="accounting">1C: Հաշվապահություն 8.3</label>
                        </div>
                        <div class="salary">
                            <input type="radio" id="salary" name="salary">
                            <label for="salary">1C: Աշխատավարձ և կադրերի կառավարում</label>
                        </div>
                        <div class="trade">
                            <input type="radio" id="trade" name="trade">
                            <label for="trade">1C: Առևտրի կառավարում</label>
                        </div>
                        <div class="marketing">
                            <input type="radio" id="marketing" name="marketing">
                            <label for="marketing">Մարքեթինգ, վաճառք և CRM/Bitrix24</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="typeCoursesFields">
                <span>Դասընթացի տեսակ</span>
                <div class="radioFieldsBlocksType">
                    <div class="typeCoursesBlocksRadio">
                        <div class="individual">
                            <div class="mainIndividual">
                                <input type="radio" id="individual" name="individual">
                                <label for="individual">Անհատական</label>
                            </div>
                            <div class="individualChildFields sameTypeCourse">
                                <div class="online">
                                    <input type="radio" id="individualOnline" name="individualOnline">
                                    <label for="individualOnline">Օնլայն</label>
                                </div>
                                <div class="offline">
                                    <input type="radio" id="individualOffline" name="individualOffline">
                                    <label for="individualOffline">Օֆֆլայն</label>
                                </div>
                            </div>
                        </div>
                        <div class="group">
                            <div class="mainGroup">
                                <input type="radio" id="group" name="group">
                                <label for="group">Խմբային</label>
                            </div>
                            <div class="groupChildFields sameTypeCourse">
                                <div class="online">
                                    <input type="radio" id="groupOnline" name="groupOnline">
                                    <label for="groupOnline">Օնլայն</label>
                                </div>
                                <div class="offline">
                                    <input type="radio" id="groupOffline" name="groupOffline">
                                    <label for="groupOffline">Օֆֆլայն</label>
                                </div>
                            </div>
                        </div>
                        <div class="corporate">
                            <div class="mainCorporate">
                                <input type="radio" id="corporate">
                                <label for="corporate">Կորպորատիվ</label>
                            </div>
                            <div class="corporateChildFields sameTypeCourse">
                                <div class="online">
                                    <input type="radio" id="corporateOnline" name="corporateOnline">
                                    <label for="corporateOnline">Օնլայն</label>
                                </div>
                                <div class="offline">
                                    <input type="radio" id="corporateOffline" name="corporateOffline">
                                    <label for="corporateOffline">Օֆֆլայն</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="applyPhoneInput">
                <label for="phone">Հեռախոսահամար</label>
                <input id="phone" type="number" name="phone">
            </div>
        </div>
        <div class="applyNowBtnField">
            <button>
                <img src="/images/applySendBtn.png" alt="">
                <span>Ուղարկել հայտ</span>
            </button>
        </div>
    </form>
</div>

