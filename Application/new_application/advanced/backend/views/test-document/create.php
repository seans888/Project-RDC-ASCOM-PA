<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TestDocument */

$this->title = 'Create Test Document';
$this->params['breadcrumbs'][] = ['label' => 'Test Documents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="test-document-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
