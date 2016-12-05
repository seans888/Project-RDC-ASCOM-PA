<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ApprovalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Approvals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="approval-index">
    <div class="col-md-6">
        <?= GridView::widget([
            'export' => false,
            'condensed' => true,
            'hover' => true,
            'dataProvider' => $dataProvider,
            //'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'id',
                'approval_remarks',
                'approval_status',
                'approval_date',
                'test_document_id',
                // 'user_id',
                // 'user_user_type_id',

                ['class' => 'yii\grid\ActionColumn'],
            ],
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
                ['class' => 'yii\grid\SerialColumn'],

                'id',
                'sig_title',
                'sig_order',
                'sig_comment',
                'sig_date_signed',
                // 'test_document_id',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>
</div>
