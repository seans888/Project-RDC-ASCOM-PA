<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use common\models\DocumentType;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\TestDocument */

$this->title = $model->docu_name;
$this->params['breadcrumbs'][] = ['label' => 'Test Documents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="test-document-view">

    <br/>

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= $i = $model->document_type;
        if ($i == 1) {
            $data = 'Directive';
        } elseif ($i == 2) {
            $data = 'Implementation Plan';
        } elseif ($i == 3) {
            $data = 'Item Specification';
        } elseif ($i == 4) {
            $data = 'Task Organization';
        } elseif ($i == 5) {
            $data = 'Test Worksheet';
        } elseif ($i == 6) {
            $data = 'Result';
        } else {
            $data = 'Test document';
        }
    ?>

    <?=
        DetailView::widget([
        'model' => $model,
        'mode' => DetailView::MODE_VIEW,
        'hover' => true,
        'attributes' => [
            'id',
            'docu_date:text:Date',
            'docu_name:text:Name',
            [
                'label' => 'Type',
                'value' => $data
            ],
            'test_project_id:text:Project ID',
        ],]);

        echo Html::a('Download', ['test-document/download', 'file'=>$model->document], ['class' => 'btn btn-primary']);
    ?>

</div>
