<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\studentsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Students';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Student', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'firstname',
            'secondname',
            'thirdname',
            'regno',
            //'mobileno',
            //'gender',
            //'dateofbirth',
            //'city',
            //'email:email',
            //'address',
            //'student_fathersname',
            //'atudent_fathersmobileno',
            //'student_fathersid',
            //'student_mothersname',
            //'student_mothersmobile',
            //'student_mothersid',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
