<?php

use common\models\TestDocument;
use common\models\User;
use common\models\UserType;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model common\models\Approval */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Approval'
?>

<div class="approval-form">

    <br/>

    <h1>Approval</h1>

    <?php $docu = new TestDocument(); ?>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'approval_remarks')->textarea(['rows'=>'3','maxlength' => true])->label('Remarks')?>

    <?= $form->field($model, 'approval_status')->textInput(['maxlength' => true])->label('Status') ?>

    <?= $form->field($model, 'approval_date')->textInput()->label('Date')?>

    <?=
        $form->field($model, 'test_document_id')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(TestDocument::find()->all(), 'id', 'docu_name'),
            'language' => 'en',
            'size' => Select2::SMALL,
            'options' => ['placeholder' => 'Select a document ...'],
            'showToggleAll' => false,
            'pluginOptions' => [
                'allowClear' => true,
                'maximumSelectionLength'=> 3,
            ],
        ])->label('Test Document');
    ?>

    <?= $form->field($model, 'user_id')->dropDownList(
            ArrayHelper::map(User::findBySql(
                    'SELECT * FROM `user` WHERE `user_type_id` IN (1,5,6)')->all(),'id', 'username' ),
            ['prompt'=> '--select approver--'])
            ->label('Approval for')
    ?>

    <?= $form->field($model, 'user_user_type_id')->dropDownList(
            ArrayHelper::map(UserType::find()->all(), 'id', 'user_type_name'),
            ['prompt'=> '--select user type--'])
            ->label('Approver type')
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
