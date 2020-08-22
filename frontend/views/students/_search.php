<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\studentsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'firstname') ?>

    <?= $form->field($model, 'secondname') ?>

    <?= $form->field($model, 'thirdname') ?>

    <?= $form->field($model, 'regno') ?>

    <?php // echo $form->field($model, 'mobileno') ?>

    <?php // echo $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'dateofbirth') ?>

    <?php // echo $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'student_fathersname') ?>

    <?php // echo $form->field($model, 'atudent_fathersmobileno') ?>

    <?php // echo $form->field($model, 'student_fathersid') ?>

    <?php // echo $form->field($model, 'student_mothersname') ?>

    <?php // echo $form->field($model, 'student_mothersmobile') ?>

    <?php // echo $form->field($model, 'student_mothersid') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
