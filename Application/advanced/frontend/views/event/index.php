<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $searchModel common\models\EventSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Events';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php
        Modal::begin([
        'header'=>'<h1>Event</h1>',
        'id' => 'modal' ,
        'size' => 'modal-lg',
    ]);
    echo "<div id = 'modalContent'></div>";

    Modal::end();
    ?>
<?= \yii2fullcalendar\yii2fullcalendar::widget(array(
    'events'=> $events,
));
?>

</div>
