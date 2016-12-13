<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\DocumentType;
use common\models\TestProject;

/* @var $this yii\web\View */
/* @var $model common\models\TestDocument */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="test-document-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'docu_date')->textInput()->hint('Date written on document')->label('Date') ?>

    <?= $form->field($model, 'docu_name')->textInput(['maxlength' => true])
        ->hint('Enter title of document')->label('Document name or title') ?>

    <?= $form->field($model, 'document_type')->dropDownList(
        ArrayHelper::map(DocumentType::find()->all(),'id','type_name'),
        ['prompt'=>'--none--'])->hint('Choose type of document') ?>

    <?= $form->field($model, 'test_project_id')->dropDownList(
        ArrayHelper::map(TestProject::find()->all(), 'id', 'project_name'),
        ['prompt' => '--please choose test project--'])
        ->hint('Choose which test project this document is in')
        ->label('Test Project Folder')?>

    <?= $form->field($model, 'docu_file')->fileInput(); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
