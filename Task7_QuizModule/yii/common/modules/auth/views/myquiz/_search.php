<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\auth\models\MyquizSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="myquiz-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Quiz') ?>

    <?= $form->field($model, 'User') ?>

    <?= $form->field($model, 'QuizQuestions') ?>

    <?= $form->field($model, 'Correctanswers') ?>

    <?= $form->field($model, 'incorrectanswers') ?>

    <?php // echo $form->field($model, 'Percentages') ?>

    <?php // echo $form->field($model, 'Qualified') ?>

    <?php // echo $form->field($model, 'Result') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
