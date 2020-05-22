<?php

/* @var $this yii\web\View */
/* @var $model UploadFileForm */

use app\models\UploadFileForm;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Upload';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="site-upload">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(['options' => []]) ?>
    <?= $form->field($model, 'file')->fileInput() ?>
    <button>Submit</button>
    <?php ActiveForm::end() ?>

    <code><?= __FILE__ ?></code>
</div>