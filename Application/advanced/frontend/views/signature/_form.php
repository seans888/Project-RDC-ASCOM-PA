<?php

use common\models\TestDocument;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Signature */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-horizontal">
    <br/>
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">

            <h1>Add Signature</h1>

            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'sig_title')->textInput(['maxlength' => true])->label('Your Position')?>

            <?= $form->field($model, 'sig_order')->textInput()->label('Order')?>

            <?= $form->field($model, 'sig_comment')->textarea(['rows'=>'3','maxlength' => true])->label('Comments')?>

            <?= $form->field($model, 'sig_date_signed')->textInput()->label('Date')?>

            <?=
            $form->field($model, 'test_document_id')->widget(Select2::classname(), [
                'data' => ArrayHelper::map(TestDocument::find()->all(), 'id', 'docu_name'),
                'language' => 'en',
                'size' => Select2::SMALL,
                'options' => ['placeholder' => 'Select a document ...'],
                'pluginOptions' => [
                    'allowClear' => true,
                    'maximumSelectionLength'=> 3,
                ],
            ])->label('Test Document');
            ?>

            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
    </fieldset>

</div>
