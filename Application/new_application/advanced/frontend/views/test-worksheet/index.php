<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\helpers\Url;

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
        <?= Html::button('Create Test Worksheets', ['value'=>Url::to('index.php?r=test-worksheet/create'),'class' => 'btn btn-success', 'id'=>'modalButton']) ?>
    </p>

    <?php
    Modal::begin([
        'header' => '<h4>Test Worksheet</h4>',
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
            'work_item',
            'work_file',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
