<!-- Mariam 40 ev Harut 60-->
<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/courses.css?v=1');
?>
<?php
$language = $_COOKIE['language'];
$class1 = '';
if ($language == 'en') {
    $class1 = 'myCoursesEn';
} elseif ($language == 'am') {
    $class1 = 'myCoursesAm';
} elseif ($language == 'ru') {
    $class1 = 'myCoursesRu';
}
?>
<div class="myCourses <?php echo $class1; ?>">
    <div class="myCoursesSection">
        <div class="myCoursesTitleField">
            <a href="javascript:history.go(-1)" class="managmentBack">
                <img src="/images/backButtonCheckout.png" alt="" class="backButtonCheckout">
            </a>
            <div><?=$GLOBALS['text']['paymentPage']?></div>
        </div>
        <div class="userProfileMenuField">
            <span><?=$GLOBALS['text']['paymentsTitle']?></span>
            <ul class="userProfileMenu paymentField">
                <li><a href="/my-card/payments"><?=$GLOBALS['text']['paymentPage']?></a></li>
                <li><a href="/user-profile/achievements"><?=$GLOBALS['text']['tabletachievement']?></a></li>
                <li><a href="/courses/my-courses"><?=$GLOBALS['text']['tabletMyCourse']?></a></li>
                <li><a href="/wishlist/index"><?=$GLOBALS['text']['tabletWishlist']?></a></li>
            </ul>
        </div>
        <div class="mainCoursesFields">
            <div class="myCoursesProfileField">
                <div class="myCoursesFieldSection">
                    <div class="myCoursesFieldSectionLeft">
                        <div class="imgFieldCourses">
                            <?php if(!empty(Yii::$app->user->identity->image)){?>
                                <img src="/<?=Yii::$app->user->identity->image?>" alt="">
                            <?php }else{?>
                                <img src="/images/avatar.png" alt="">
                            <?php } ?>
                        </div>
                        <div class="usersProfileInfo">
                            <span class="nameAndUsername"><?php if(!empty(Yii::$app->user->identity->username)){echo Yii::$app->user->identity->username;}?></span>
                            <?php if (Yii::$app->user->identity->phone) { ?>
                                <div class="usersProfileInfoPhone">
                                    <img src="/images/phonAchievements.png" alt="">
                                    <span><?php if(!empty(Yii::$app->user->identity->phone)){echo Yii::$app->user->identity->phone;}?></span>
                                </div>
                            <?php } ?>
                            <?php if (Yii::$app->user->identity->email) { ?>
                                <div class="usersProfileInfoEmail">
                                    <img src="/images/mailAchievements.png" alt="">
                                    <span><?php if(!empty(Yii::$app->user->identity->email)){echo Yii::$app->user->identity->email;}?></span>
                                </div>
                            <?php } ?>
                            <?php if (Yii::$app->user->identity->linkdin_url) { ?>
                                <div class="usersProfileInfoLinkdin">
                                    <img src="/images/linkdinAchievements.png" alt="">
                                    <?php if(!empty(Yii::$app->user->identity->linkdin_url)){?>
                                        <a href="<?=Yii::$app->user->identity->linkdin_url?>" target="_blank"><?=Yii::$app->user->identity->username?></a>
                                    <?php }?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="myCoursesFieldSectionRight">
                        <a href="/user-profile/achievements-edit"><img src="/images/editIconMyCourses.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="cardMyCourses paymentTable">
                <div class="tableAround">
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th><?=$GLOBALS['text']['paymentLesson']?></th>
                                <th><?=$GLOBALS['text']['paymentPrice']?></th>
                                <th><?=$GLOBALS['text']['paymentDate']?></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if (!empty($payments)){foreach ($payments as $keys => $payment){?>
                            <tr>
                                <td><?=$keys + 1?></td>
                                <td><?=$payment['lesson_name']?></td>
                                <td><?=$payment['price']?> ֏</td>
                                <td><?=$payment['create_date']?></td>
                            </tr>
                        <?php }} ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="myCoursesSectionMobile">
        <div class="myCoursesTitleField">
            <img src="/images/backButtonCheckout.png" alt="" class="backButtonCheckout">
            <div><?=$GLOBALS['text']['tabletMyCourse']?></div>
        </div>
        <div class="myCoursesMobile tablePaymentMobile">
            <div class="tableAround">
                <table>
                    <thead>
                    <tr>
                    <tr>
                        <th>#</th>
                        <th><?=$GLOBALS['text']['paymentLesson']?></th>
                        <th><?=$GLOBALS['text']['paymentPrice']?></th>
                        <th><?=$GLOBALS['text']['paymentDate']?></th>
                    </tr>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if (!empty($payments)){foreach ($payments as $keys => $payment){?>
                        <tr>
                            <td><?=$keys + 1?></td>
                            <td><?=$payment['lesson_name']?></td>
                            <td><?=$payment['price']?> ֏</td>
                            <td><?=$payment['create_date']?></td>
                        </tr>
                    <?php }} ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>