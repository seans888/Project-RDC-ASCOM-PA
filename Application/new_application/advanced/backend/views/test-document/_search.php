<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TestDocumentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="test-document-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'test_date') ?>

    <?= $form->field($model, 'test_type') ?>

    <?= $form->field($model, 'test_schedule') ?>

    <?= $form->field($model, 'test_name') ?>

    <?php // echo $form->field($model, 'test_worksheet_id') ?>

    <?php // echo $form->field($model, 'task_organization_id') ?>

    <?php // echo $form->field($model, 'result_id') ?>

    <?php // echo $form->field($model, 'implementation_plan_id') ?>

    <?php // echo $form->field($model, 'item_specification_id') ?>

    <?php // echo $form->field($model, 'directive_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
