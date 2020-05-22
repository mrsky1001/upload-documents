<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="<?= Url::to(['site/upload']) ?>">Get started with Yii</a></p>
    </div>

    <div class="body-content">
    </div>

    </div>
</div>
