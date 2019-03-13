<?php

/* @var $this yii\web\View */
/* @var $message string */

use yii\helpers\Html;

$this->title = 'Say page';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="say-page">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is a say page, it displays what is written in the parameter "message". 
    </p>

    <code><?= Html::encode($message) ?></code>
</div>
