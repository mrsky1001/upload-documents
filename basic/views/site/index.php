<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'Главная';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Сервис «Загрузка документов»</h1>

        <p class="lead">Нажмите на кнопку что бы продолжить</p>

        <p><a class="btn btn-lg btn-success" href="<?= Url::to(['site/upload']) ?>">Открыть</a></p>
    </div>

    <div class="body-content">
    </div>

    </div>
</div>
