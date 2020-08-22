<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\studentsperformanceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="studentsperformance-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'firstname') ?>

    <?= $form->field($model, 'lastname') ?>

    <?= $form->field($model, 'unitname') ?>

    <?= $form->field($model, 'unitcode') ?>

    <?php // echo $form->field($model, 'unit_grade') ?>

    <?php // echo $form->field($model, 'total_grade') ?>

    <?php // echo $form->field($model, 'total_gradeincreased') ?>

    <?php // echo $form->field($model, 'sem') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
