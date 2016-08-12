<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TestDocumentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Test Documents';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="test-document-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Test Document', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
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
