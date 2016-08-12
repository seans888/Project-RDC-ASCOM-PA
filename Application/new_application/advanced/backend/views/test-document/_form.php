<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\TestDocument;

/* @var $this yii\web\View */
/* @var $model common\models\TestDocument */
/* @var $form yii\widgets\ActiveForm */


?>

<div class="test-document-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'test_date')->textInput() ?>

    <?= $form->field($model, 'test_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'test_schedule')->textInput() ?>

    <?= $form->field($model, 'test_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'test_worksheet_id')->textInput() ?>
    <?= $form->field($model, 'test_worksheet_id')->dropDownList(
        \yii\helpers\ArrayHelper::map(\common\models\TestWorksheet::find()->all(),'id','work_item'),
        ['prompt'=>'Select related test worksheet']
    ) ?>

    <?= $form->field($model, 'task_organization_id')->dropDownList(
        \yii\helpers\ArrayHelper::map(\common\models\TaskOrganization::find()->all(),'id','taskorg_name'),
        ['prompt' =>'Select related task organization document']
    )?>

    <?= $form->field($model, 'result_id')->dropDownList(
        \yii\helpers\ArrayHelper::map(\common\models\Result::find()->all(),'id','result_item'),
        ['prompt' =>'Select related item results document']
    ) ?>

    <?= $form->field($model, 'implementation_plan_id')->dropDownList(
        \yii\helpers\ArrayHelper::map(\common\models\ImplementationPlan::find()->all(),'id','implan_name'),
        ['prompt' =>'Select related implementation plan name']
    ) ?>

    <?= $form->field($model, 'item_specification_id')->dropDownList(
        \yii\helpers\ArrayHelper::map(\common\models\ItemSpecification::find()->all(),'id','itemspec_name'),
        ['prompt' =>'Select related Item Specification name']
    )?>

    <?= $form->field($model, 'directive_id')->dropDownList(
        \yii\helpers\ArrayHelper::map(\common\models\Directive::find()->all(),'id','directive_name'),
        ['prompt' =>'Select related Directive name']
    )?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
