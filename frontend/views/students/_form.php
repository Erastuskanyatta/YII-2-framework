<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Student */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'secondname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'thirdname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'regno')->textInput() ?>

    <?= $form->field($model, 'mobileno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dateofbirth')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'student_fathersname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'atudent_fathersmobileno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'student_fathersid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'student_mothersname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'student_mothersmobile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'student_mothersid')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
