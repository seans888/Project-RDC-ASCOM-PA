<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use common\models\ApprovalSearch;
use common\models\SignatureSearch;
use yii\bootstrap\Modal;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TestDocumentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

//$this->title = 'Test Documents';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="test-document-index">

    <?php
    Modal::begin([
        'header'=>'<h1>New Test Document</h1>',
        'id' => 'modal2' ,
        'size' => 'modal-lg',
    ]);
    echo "<div id = 'modalContent2'></div>";

    Modal::end();
    ?>

    <?= GridView::widget([
        'condensed' => true,
        'hover' => true,
        'export' => false,
        //'summary' => 'Documents',
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [

            //['class' => 'yii\grid\SerialColumn'],
            'id',
            [
                'class' => 'kartik\grid\ExpandRowColumn',
                'value' => function ($model, $key, $index, $column) {
                    return GridView::ROW_COLLAPSED;
                },
                'detail' => function ($model, $key, $index, $column) {
                    $searchModel = new ApprovalSearch();
                    $searchModel->test_document_id = $model->id;
                    $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

                    $searchModel2 = new SignatureSearch();
                    $searchModel2->test_document_id = $model->id;
                    $dataProvider2 = $searchModel->search(Yii::$app->request->queryParams);

                    return Yii::$app->controller->renderPartial('_approval', [
                        'searchModel' => $searchModel,
                        'dataProvider' => $dataProvider,
                        'searchModel2' => $searchModel2,
                        'dataProvider2' => $dataProvider2
                    ]);
                },
            ],
            'docu_date:text:Date',
            'docu_name:text:Name',
            //'type.type_name:text:Type',
            [
                'attribute' => 'document_type',
                'value'     => 'type.type_name'
            ],
            //'test_project_id',
            [
                'class' => 'yii\grid\ActionColumn',
                'controller' => 'test-document'
            ]
        ],
        'panel' => [
            'heading' => '<i class="glyphicon glyphicon-file"></i> Document',
            'before' => Html::button('<i class="glyphicon glyphicon-plus-sign"></i> New Test Document',
                ['value'=>Url::toRoute('test-document/create'),'class' => 'btn btn-success','id'=>'modalButton2']),
            'after' => false,
            'footer' => false,
            'footerOptions' => [
                'class' => 'panel panel-primary'
            ],
            'type' => 'primary'
        ]
    ]); ?>
</div>
