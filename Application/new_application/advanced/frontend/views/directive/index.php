<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DirectiveSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Directives';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="directive-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::button('Create Directive', ['value'=>Url::to('index.php?r=directive/create'),'class' => 'btn btn-success', 'id'=>'modalButton']) ?>
    </p>

    <?php
        Modal::begin([
            'header' => '<h4>Directive</h4>',
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
            'directive_date',
            'directive_type',
            'directive_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
