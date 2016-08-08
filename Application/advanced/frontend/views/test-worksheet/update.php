<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TestWorksheet */

$this->title = 'Update Test Worksheet: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Test Worksheets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="test-worksheet-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
