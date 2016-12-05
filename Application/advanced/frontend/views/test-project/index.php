<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use common\models\TestDocumentSearch;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TestProjectSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Test Projects';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="test-project-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Add Test Project', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'export' => false,
        'hover' => true,
        'resizableColumns' => true,
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'class' => 'kartik\grid\ExpandRowColumn',
                'value' => function ($model, $key, $index, $column) {
                    return GridView::ROW_COLLAPSED;
                },
                'detail' => function ($model, $key, $index, $column) {
                    $searchModel = new TestDocumentSearch();
                    $searchModel->test_project_id = $model->id;
                    $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

                    return Yii::$app->controller->renderPartial('_testdocus', [
                        'searchModel' => $searchModel,
                        'dataProvider' => $dataProvider,
                    ]);
                },
            ],
            'project_name:text:Name',
            'project_type:text:Type',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
