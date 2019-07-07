<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\modules\auth\models\Myquiz */

$this->title = $model->Quiz;
$this->params['breadcrumbs'][] = ['label' => 'Myquizzes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="myquiz-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Quiz' => $model->Quiz, 'User' => $model->User, 'QuizQuestions' => $model->QuizQuestions], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Quiz' => $model->Quiz, 'User' => $model->User, 'QuizQuestions' => $model->QuizQuestions], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Quiz',
            'User',
            'QuizQuestions',
            'Correctanswers',
            'incorrectanswers',
            'Percentages',
            'Qualified',
            'Result',
        ],
    ]) ?>

</div>
