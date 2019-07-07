<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\modules\auth\models\QuestioncategoriesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Questioncategories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="questioncategories-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Questioncategories', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'NAME',
            'Questioncount',
            'active',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
