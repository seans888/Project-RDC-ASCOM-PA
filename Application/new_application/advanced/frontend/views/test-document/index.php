<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TestDocumentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Test Documents';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="Test-Documents-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::button('Create Test Document',
            ['value'=>Url::to('index.php?r=test-document/create'), 'class' => 'btn btn-success', 'id'=>'modalButton']) ?>
    </p>

    <?php
        Modal::begin([
            'header'=>'<h4>Test Document</h4>',
            'id' => 'modal',
            'size'=>'modal-lg',
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
            'test_date',
            'test_type',
            'test_schedule',
            'test_name',
            // 'test_worksheet_id',
            // 'task_organization_id',
            // 'result_id',
            // 'implementation_plan_id',
            // 'item_specification_id',
            // 'directive_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
