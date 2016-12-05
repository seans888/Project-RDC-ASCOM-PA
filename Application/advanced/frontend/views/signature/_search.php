<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SignatureSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="signature-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'sig_title') ?>

    <?= $form->field($model, 'sig_order') ?>

    <?= $form->field($model, 'sig_comment') ?>

    <?= $form->field($model, 'sig_date_signed') ?>

    <?php // echo $form->field($model, 'test_document_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
