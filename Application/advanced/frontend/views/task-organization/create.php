<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TaskOrganization */

$this->title = 'Create Task Organization';
$this->params['breadcrumbs'][] = ['label' => 'Task Organizations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-organization-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
