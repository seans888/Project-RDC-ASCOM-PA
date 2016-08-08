<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TestWorksheet */

$this->title = 'Create Test Worksheet';
$this->params['breadcrumbs'][] = ['label' => 'Test Worksheets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="test-worksheet-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
