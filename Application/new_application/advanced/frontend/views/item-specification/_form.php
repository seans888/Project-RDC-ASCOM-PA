<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ItemSpecification */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="item-specification-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'itemspec_date')->textInput() ?>

    <?= $form->field($model, 'itemspec_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
