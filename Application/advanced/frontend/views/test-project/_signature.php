<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SignatureSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Signatures';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="signature-index">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
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
