<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\modules\auth\models\Myquiz */

$this->title = 'Update Myquiz: ' . $model->Quiz;
$this->params['breadcrumbs'][] = ['label' => 'Myquizzes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Quiz, 'url' => ['view', 'Quiz' => $model->Quiz, 'User' => $model->User, 'QuizQuestions' => $model->QuizQuestions]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="myquiz-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
