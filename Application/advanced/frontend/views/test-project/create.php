<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TestProject */

$this->title = 'Create Test Project';
$this->params['breadcrumbs'][] = ['label' => 'Test Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="test-project-create">

    <!--<h1><?= Html::encode($this->title) ?></h1>-->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
