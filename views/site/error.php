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
        <span class="span2"><?=$GLOBALS['text']['notFound']?></span>
        <div class="errorBtnField">
            <a class="errorHref" href="/">
                <img src="/images/buttonImg1.png" alt="">
                <span><?=$GLOBALS['text']['notFoundBtn']?></span>
            </a>
        </div>
    </div>
</div>
