<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Signature */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="signature-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sig_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sig_order')->textInput() ?>

    <?= $form->field($model, 'sig_comment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sig_date_signed')->textInput() ?>

    <?= $form->field($model, 'test_document_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
