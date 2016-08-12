<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TaskOrganizationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Task Organizations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-organization-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Task Organization', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'taskorg_date',
            'taskorg_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
