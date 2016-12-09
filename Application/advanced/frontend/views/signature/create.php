<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Signature */

$this->title = 'Create Signature';
$this->params['breadcrumbs'][] = ['label' => 'Signatures', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="signature-create">

    <!--<h1><?= Html::encode($this->title) ?></h1>-->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
