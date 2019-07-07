<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\modules\auth\models\EmpSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Emps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="emp-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Emp', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'empno',
            'ename',
            'job',
            'mgr',
            'hiredate',
            //'sal',
            //'comm',
            //'deptno',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
