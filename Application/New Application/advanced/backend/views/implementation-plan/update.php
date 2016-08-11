<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ImplementationPlan */

$this->title = 'Update Implementation Plan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Implementation Plans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="implementation-plan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
