<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ImplementationPlan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="implementation-plan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'implan_date')->textInput() ?>

    <?= $form->field($model, 'implan_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
