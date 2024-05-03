<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception$exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="siteError">
    <div class="alert404">
        <span class="span1">404</span>
        <span class="span2">page not found</span>
        <div class="errorBtnField">
            <a class="errorHref" href="/personel-management/index">
                <img src="/images/buttonImg1.png" alt="">
                <span>GO BACK HOME</span>
            </a>
        </div>
    </div>
</div>
