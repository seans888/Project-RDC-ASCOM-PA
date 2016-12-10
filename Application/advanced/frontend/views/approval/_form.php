<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Approval */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="approval-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'approval_remarks')->textInput(['maxlength' => true])
        ->hint('To be filled out by the officer for his comments')->label('Remarks')?>

    <?= $form->field($model, 'approval_status')->textInput(['maxlength' => true])
        ->hint('To be changed by the officer only.')->label('Status') ?>

    <?= $form->field($model, 'approval_date')->textInput()
        ->hint('Date of approval')->label('Date')?>

    <?= $form->field($model, 'test_document_id')->textInput()
        ->hint('Approval pertaining to which document')->label('Test Document')?>

    <?= $form->field($model, 'user_id')->textInput()
        ->hint('Request approval for whom')->hint('Officer name')?>

    <?= $form->field($model, 'user_user_type_id')->textInput()
        ->hint('Type of user who will approve the document')->label('Approver type')?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
