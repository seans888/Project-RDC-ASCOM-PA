<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use common\models\TestDocumentSearch;
use yii\bootstrap\Modal;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TestProjectSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Test Projects';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="test-project-index">
    <br/>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php
        Modal::begin([
            'header'=>'<h1>New Test Project</h1>',
            'id' => 'modal' ,
            'size' => 'modal-lg',
        ]);
        echo "<div id = 'modalContent'></div>";

        Modal::end();
    ?>
    <?= GridView::widget([
        'export' => false,
        'hover' => true,
        'resizableColumns' => true,
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'class' => 'kartik\grid\ExpandRowColumn',
                //'expandIcon' => '<span class="glyphicon glyphicon-menu-right"></span>',
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
        'panel' => [
            //<span class="glyphicon glyphicon-folder-open"/>
            'heading' => '<h2><i class="glyphicon glyphicon-folder-close"></i> Test Projects</h2>',
            'before' => Html::button('<i class="glyphicon glyphicon-plus-sign"></i> &nbsp;Test Project',
                ['value'=>Url::to('index.php?r=test-project/create'),'class' => 'btn btn-success','id'=>'modalButton']),
            'footer' => '<h6>End of test projects</h6>',
            'after' => false,
        ],
    ]); ?>

</div>
