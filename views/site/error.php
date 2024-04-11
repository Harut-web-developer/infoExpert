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
        <img src="/images/errorimage.png" alt="">
    </div>
</div>
