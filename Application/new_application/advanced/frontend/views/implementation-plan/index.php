<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ImplementationPlanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Implementation Plans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="implementation-plan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::button('Create Implementation Plan', ['value'=>Url::to('index.php?r=implementation-plan/create'),'class' => 'btn btn-success', 'id'=>'modalButton']) ?>
    </p>

    <?php
    Modal::begin([
        'header' => '<h4>Implamentation Plan</h4>',
        'id' => 'modal',
        'size' => 'modal-lg'
    ]);

    echo "<div id='modalContent'></div>";

    Modal::end();
    ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'implan_date',
            'implan_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
