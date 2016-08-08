<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Directive */

$this->title = 'Create Directive';
$this->params['breadcrumbs'][] = ['label' => 'Directives', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="directive-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
