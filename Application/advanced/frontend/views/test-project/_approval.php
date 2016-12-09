<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\helpers\Url;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ApprovalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

//$this->title = 'Approvals';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="approval-index">
    <?php
    Modal::begin([
        'header'=>'<h1>For Approval</h1>',
        'id' => 'modal3' ,
        'size' => 'modal-lg',
    ]);
    echo "<div id = 'modalContent3'></div>";

    Modal::end();
    ?>
    <?php
    Modal::begin([
        'header'=>'<h1>For Signature</h1>',
        'id' => 'modal4' ,
        'size' => 'modal-lg',
    ]);
    echo "<div id = 'modalContent4'></div>";

    Modal::end();
    ?>
    <div class="col-md-6">
        <?= GridView::widget([
            'export' => false,
            'condensed' => true,
            'hover' => true,
            'dataProvider' => $dataProvider,
            //'filterModel' => $searchModel,
            'columns' => [
                //['class' => 'yii\grid\SerialColumn'],

                'id',
                'approval_remarks:text:Remarks',
                'approval_status:text:Status',
                'approval_date:text:Date',
                //'test_document_id',
                // 'user_id',
                // 'user_user_type_id',

                [
                    'class' => 'yii\grid\ActionColumn',
                    'controller' => 'approval'
                ],
            ],
            'panel' => [
                'before' => Html::button('Notify for Approval',
                    ['value' =>Url::toRoute('approval/create'), 'class' => 'btn btn-default', 'id' => 'modalButton3']),
                'after' => false,
                'footer' => false,
                'type' => 'info'
            ]
        ]); ?>
    </div>
    <div class="col-md-6">
        <?= GridView::widget([
            'export' => false,
            'condensed' => true,
            'hover' => true,
            'dataProvider' => $dataProvider2,
            //'filterModel' => $searchModel2,
            'columns' => [
                //['class' => 'yii\grid\SerialColumn'],

                'id',
                //'sig_title:text:Title',
                [
                    'attribute' => 'sig_title',
                    'format' => 'text',
                    'label' => 'Title',
                ],
                'sig_order:text:Order',
                'sig_comment:text:Comment',
                'sig_date_signed:text:Date',
                // 'test_document_id',

                [
                    'class' => 'yii\grid\ActionColumn',
                    'controller' => 'signature'
                ],
            ],
            'panel' => [
                'before' => Html::button('For Signature',
                    ['value' =>Url::toRoute('signature/create'), 'class' => 'btn btn-default', 'id' => 'modalButton4']),
                'after' => false,
                'footer' => false,
                'type' => 'info'
            ]
        ]); ?>
    </div>
</div>
