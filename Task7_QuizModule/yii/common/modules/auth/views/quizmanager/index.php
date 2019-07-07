<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\modules\auth\models\QuizmanagerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Quizmanagers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quizmanager-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Quizmanager', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'QuizName',
            'NoOfQuestions',
            'Timeallowed:datetime',
            'AssignedUser',
            //'createdat',
            //'createdby',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
