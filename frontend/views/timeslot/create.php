<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\TimeSlot */

$this->title = 'Create Time Slot';
$this->params['breadcrumbs'][] = ['label' => 'Time Slots', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="time-slot-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
