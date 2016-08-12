<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\TestDocument */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Test Documents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="test-document-view">

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

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'test_date',
            'test_type',
            'test_schedule',
            'test_name',
            'test_worksheet_id',
            'task_organization_id',
            'result_id',
            'implementation_plan_id',
            'item_specification_id',
            'directive_id',
        ],
    ]) ?>

</div>
