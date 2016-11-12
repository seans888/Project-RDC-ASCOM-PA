<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ItemSpecificationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Item Specifications';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="item-specification-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::button('Create Item Specifications', ['value'=>Url::to('index.php?r=item-specification/create'),'class' => 'btn btn-success', 'id'=>'modalButton']) ?>
    </p>

    <?php
    Modal::begin([
        'header' => '<h4>Item Specification</h4>',
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
            'itemspec_date',
            'itemspec_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
