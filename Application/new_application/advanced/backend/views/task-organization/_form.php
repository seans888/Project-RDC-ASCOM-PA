<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TaskOrganization */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="task-organization-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'taskorg_date')->textInput() ?>

    <?= $form->field($model, 'taskorg_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
