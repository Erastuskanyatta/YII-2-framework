<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\studentsperformanceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Studentsperformances';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="studentsperformance-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Studentsperformance', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'firstname',
            'lastname',
            'unitname',
            'unitcode',
            //'unit_grade',
            //'total_grade',
            //'total_gradeincreased',
            //'sem',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
