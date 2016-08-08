<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ImplementationPlan */

$this->title = 'Create Implementation Plan';
$this->params['breadcrumbs'][] = ['label' => 'Implementation Plans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="implementation-plan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
