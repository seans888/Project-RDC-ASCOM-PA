<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Directive */

$this->title = 'Update Directive: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Directives', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="directive-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
