<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Studentsperformance */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="studentsperformance-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'unitname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'unitcode')->textInput() ?>

    <?= $form->field($model, 'unit_grade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_grade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_gradeincreased')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sem')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
