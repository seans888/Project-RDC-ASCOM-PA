<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TestWorksheetSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Test Worksheets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="test-worksheet-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Test Worksheet', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'work_item',
            'work_file',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
