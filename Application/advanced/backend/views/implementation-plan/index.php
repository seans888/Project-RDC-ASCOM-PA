<?php

use yii\helpers\Html;
use yii\grid\GridView;

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
        <?= Html::a('Create Implementation Plan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'implan_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
