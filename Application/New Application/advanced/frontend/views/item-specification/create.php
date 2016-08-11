<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ItemSpecification */

$this->title = 'Create Item Specification';
$this->params['breadcrumbs'][] = ['label' => 'Item Specifications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="item-specification-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
