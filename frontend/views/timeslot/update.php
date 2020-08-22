<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\TimeSlot */

$this->title = 'Update Time Slot: ' . $model->time_slot_id;
$this->params['breadcrumbs'][] = ['label' => 'Time Slots', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->time_slot_id, 'url' => ['view', 'id' => $model->time_slot_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="time-slot-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
