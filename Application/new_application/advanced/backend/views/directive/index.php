<?php

use yii\helpers\Html;
use yii\grid\GridView;

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
        <?= Html::a('Create Directive', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
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