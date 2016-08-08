<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TestDocument */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="test-document-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'test_date')->textInput() ?>

    <?= $form->field($model, 'test_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'test_schedule')->textInput() ?>

    <?= $form->field($model, 'test_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'test_worksheet_id')->textInput() ?>

    <?= $form->field($model, 'task_organization_id')->textInput() ?>

    <?= $form->field($model, 'result_id')->textInput() ?>

    <?= $form->field($model, 'implementation_plan_id')->textInput() ?>

    <?= $form->field($model, 'item_specification_id')->textInput() ?>

    <?= $form->field($model, 'directive_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
