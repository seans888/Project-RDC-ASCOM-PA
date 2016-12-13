<?php

use yii\helpers\Html;
use kartik\detail\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\TestProject */

$this->title = $model->project_name;
$this->params['breadcrumbs'][] = ['label' => 'Test Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="test-project-view">

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

    <?= DetailView::widget([
        'model' => $model,
        'hover' => true,
        'attributes' => [
            'id',
            'project_name',
            'project_type',
        ],
    ]) ?>

</div>
