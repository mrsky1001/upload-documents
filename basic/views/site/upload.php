<?php

/* @var $this yii\web\View */
/* @var $model UploadFileForm */

use app\models\UploadFileForm;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Загрузка документов';
$this->params['breadcrumbs'][] = $this->title;
$this->registerCss(<<<CSS
.input-wrap{
    position: relative;
}
.input-wrap input[type=file]{
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    opacity: 0;
    background: none;
    cursor: inherit;
    display: block;
}
CSS
);

?>

<div class="site-upload">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(['options' => []]) ?>
    <?=  $form->field($model, 'file', [
    'template' => "<button class='btn btn-default input-wrap'>Выбрать файл...{input}</button>\n{hint}\n{error}"
    ])->fileInput() ?>
    <button class="btn btn-success">Отправить</button>
    <?php ActiveForm::end() ?>
</div>