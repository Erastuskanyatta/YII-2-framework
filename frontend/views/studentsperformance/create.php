<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Studentsperformance */

$this->title = 'Create Studentsperformance';
$this->params['breadcrumbs'][] = ['label' => 'Studentsperformances', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="studentsperformance-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
